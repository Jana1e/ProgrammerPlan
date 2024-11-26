<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Lecture;
use App\Models\Section;
use App\Models\UserProgress;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($courseId)
    {
        $userId = auth()->id();

        // Fetch course with sections and lectures
        $course = Product::with([
            'sections.lectures' => function ($query) {
                $query->orderBy('lecture_order');
            }
        ])->findOrFail($courseId);

        // Get the current progress of the user in the course
        $progress = UserProgress::where('user_id', $userId)
            ->where('course_id', $courseId)
            ->orderBy('created_at', 'desc')
            ->first();

        $currentLecture = $progress
            ? Lecture::find($progress->lecture_id)
            : $course->sections->first()->lectures->first();

        // Mark lectures as completed or current for display
        foreach ($course->sections as $section) {
            foreach ($section->lectures as $lecture) {
                $lecture->is_completed = UserProgress::where('user_id', $userId)
                    ->where('lecture_id', $lecture->id)
                    ->where('completed', true)
                    ->exists();

                $lecture->is_current = $lecture->id === ($currentLecture->id ?? null);
            }
        }

        // Get previous and next lectures
        $previousLecture = $this->getPreviousLecture($currentLecture, $course);
        $nextLecture = $this->getNextLecture($currentLecture, $course);

        $totalLectures = $course->sections->sum(function ($section) {
            return $section->lectures->count();
        });




        // Fetch course with sections and lectures
        $quizzes = Lecture::with([
            'quizzes.questions.answers' => function ($query) {
                $query->orderBy('id');
            }
        ])->findOrFail($currentLecture->id);






        return view('frontend.courses.show', compact(
            'course',
            'currentLecture',
            'previousLecture',
            'nextLecture',
            'totalLectures',
            'quizzes'
        ));
    }

    private function getPreviousLecture($currentLecture, $course)
    {
        // Check if $currentLecture is valid
        if (!$currentLecture || !$currentLecture->section) {
            return null; // Return null if $currentLecture or its section is not set
        }
        $currentSection = $currentLecture->section;
        // Get the previous lecture in the same section
        $previousLecture = Lecture::where('section_id', $currentSection->id)
            ->where('lecture_order', '<', $currentLecture->lecture_order)
            ->orderByDesc('lecture_order')
            ->first();

        // If no previous lecture, get the last lecture of the previous section
        if (!$previousLecture) {
            $previousSection = $course->sections()
                ->where('section_order', '<', $currentSection->section_order)
                ->orderByDesc('section_order')
                ->first();

            $previousLecture = $previousSection
                ? $previousSection->lectures->last()
                : null;
        }

        return $previousLecture;
    }



    public function nextLecture(Request $request, $courseId)
    {
        $userId = auth()->id();
        $currentLectureId = $request->input('currentLectureId');

        $currentLecture = Lecture::find($currentLectureId);

        if (!$currentLecture) {
            return redirect()->back()->with('error', 'Current lecture not found.');
        }

        // Mark the current lecture as completed
        UserProgress::updateOrCreate(
            [
                'user_id' => $userId,
                'course_id' => $courseId,
                'section_id' => $currentLecture->section_id,
                'lecture_id' => $currentLecture->id,
            ],
            [
                'completed' => 1,
                'completed_at' => now(),
            ]
        );

        // Get the next lecture
        $nextLecture = $this->getNextLecture($currentLecture, $courseId);

        if (!$nextLecture) {
            return redirect()->route('frontend.courses.show', $courseId)
                ->with('message', 'You have completed the course.');
        }

        // Create progress for the next lecture
        UserProgress::updateOrCreate(
            [
                'user_id' => $userId,
                'course_id' => $courseId,
                'section_id' => $nextLecture->section_id,
                'lecture_id' => $nextLecture->id,
            ],
            [
                'completed' => 0,
            ]
        );

        return redirect()->route('courses.show', $courseId);
    }

    private function getNextLecture($currentLecture, $courseId)
    {
        if (!$currentLecture || !$currentLecture->section) {
            return null; // Return null if $currentLecture or its section is not set
        }
        $currentSection = $currentLecture->section;
        $nextLecture = Lecture::where('section_id', $currentSection->id)
            ->where('lecture_order', '>', $currentLecture->lecture_order)
            ->orderBy('lecture_order', 'asc')
            ->first();

        if (!$nextLecture) {
            $nextSection = $currentSection->product->sections()
                ->where('section_order', '>', $currentSection->section_order)
                ->orderBy('section_order', 'asc')
                ->first();

            $nextLecture = $nextSection ? $nextSection->lectures->first() : null;
        }

        return $nextLecture;
    }



    public function previousLecture(Request $request, $courseId)
    {
        $userId = auth()->id();
        $currentLectureId = $request->input('currentLectureId');

        // Get the current lecture
        $currentLecture = Lecture::findOrFail($currentLectureId);

        // Fetch the previous lecture in the same section
        $previousLecture = Lecture::where('section_id', $currentLecture->section_id)
            ->where('lecture_order', '<', $currentLecture->lecture_order)
            ->orderBy('lecture_order', 'desc')
            ->first();

        // If no previous lecture in the current section, get the last lecture of the previous section
        if (!$previousLecture) {
            $previousSection = Section::where('product_id', $courseId)
                ->where('section_order', '<', $currentLecture->section->section_order)
                ->orderBy('section_order', 'desc')
                ->first();

            if ($previousSection) {
                $previousLecture = Lecture::where('section_id', $previousSection->id)
                    ->orderBy('lecture_order', 'desc')
                    ->first();
            }
        }

        // If there's no previous lecture, the user is already at the start of the course
        if (!$previousLecture) {
            return response()->json(['message' => 'You are at the beginning of the course.'], 200);
        }

        // Create a new progress record for the previous lecture
        UserProgress::create([
            'user_id' => $userId,
            'course_id' => $courseId,
            'section_id' => $previousLecture->section_id,
            'lecture_id' => $previousLecture->id,
            'completed' => false,
        ]);

        return response()->json([
            'success' => true,
            'previous_lecture' => [
                'id' => $previousLecture->id,
                'title' => $previousLecture->title,
                'video_url' => $previousLecture->video_url,
            ],
        ]);
    }
}
