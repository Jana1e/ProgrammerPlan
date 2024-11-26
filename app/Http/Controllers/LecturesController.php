<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Section;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    /**
     * Display a listing of lectures for a specific section.
     */
    public function index($courseId, $sectionId)
    {
        $section = Section::findOrFail($sectionId);
        $lectures = Lecture::where('section_id', $sectionId)->orderBy('lecture_order')->get();

        return view('lectures.index', compact('section', 'lectures'));
    }

    /**
     * Show the form for creating a new lecture in a section.
     */
    public function create($courseId, $sectionId)
    {
        $section = Section::findOrFail($sectionId);
        return view('lectures.create', compact('section'));
    }

    /**
     * Store a newly created lecture in the database.
     */



     public function store(Request $request)
     {
         try {
             // Validate the incoming request data
             $validated = $request->validate([
                 'section_id' => 'required|integer',
                 'title' => 'required|string|max:255',
                 'content' => 'nullable|string',
                 'video_url' => 'nullable|url',
                 'lecture_order' => 'nullable|integer'
             ]);
     
             // Ensure each validated item is not an array
             $lecture = Lecture::create([
                 'section_id' => $validated['section_id'],
                 'title' => $validated['title'],
                 'content' => $validated['content'] ?? '', // Defaults to empty string if null
                 'video_url' => $validated['video_url'] ?? '',
                 'lecture_order' => $validated['lecture_order'] ?? 1
             ]);
     
             // Respond with success JSON if request is an AJAX request
             return response()->json([
                 'success' => true,
                 'message' => 'Lecture created successfully.',
                 'lecture' => $lecture // Returns the lecture object as JSON
             ]);
         } catch (\Exception $e) {
             // Catch and respond with the error message
             return response()->json([
                 'success' => false,
                 'message' => $e->getMessage() ?: 'An error occurred while creating the lecture'
             ], 500);
         }
     }
     



     public function show_image($id)
     {
         $img=1;
         return view('partials.online_payment_options', compact("img"));
     }
 




    /**
     * Display the specified lecture.
     */
    public function show($courseId, $sectionId, $id)
    {
        $lecture = Lecture::where('section_id', $sectionId)->findOrFail($id);
        return view('lectures.show', compact('lecture'));
    }

    /**
     * Show the form for editing the specified lecture.
     */
    public function edit($courseId, $sectionId, $id)
    {
        $section = Section::findOrFail($sectionId);
        $lecture = Lecture::where('section_id', $sectionId)->findOrFail($id);

        return view('lectures.edit', compact('section', 'lecture'));
    }

    /**
     * Update the specified lecture in the database.
     */
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'title' => 'nullable|string|max:255',
                'video_url' => 'nullable|url',
                'pdf' => 'nullable|string', // Validate PDF files
                'content' => 'nullable|string',
                'description' => 'nullable|string',
                'lecture_notes' => 'nullable|string',
                'lecture_order' => 'nullable|integer',
            ]);
    
            $lecture = Lecture::findOrFail($id);
    
         
    
            $lecture->update($validated);
    
            return response()->json([
                'success' => true,
                'message' => 'Lecture updated successfully',
                'lecture' => $lecture,
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed: ' . $e->getMessage(),
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the lecture: ' . $e->getMessage(),
            ], 500);
        }
    }
    

    /**
     * Remove the specified lecture from the database.
     */
   // Deletes a lecture
   public function destroy($id)
   {
       try {
           $lecture = Lecture::find($id); // Use `find` instead of `findOrFail`
   
           if (!$lecture) {
               return response()->json([
                   'success' => false,
                   'message' => 'Lecture not found'
               ], 404);
           }
   
           $lecture->delete();
   
           return response()->json([
               'success' => true,
               'message' => 'Lecture deleted successfully'
           ]);
       } catch (\Exception $e) {
           return response()->json([
               'success' => false,
               'message' => 'An error occurred while deleting the lecture: ' . $e->getMessage()
           ], 500);
       }
   }
   
}
