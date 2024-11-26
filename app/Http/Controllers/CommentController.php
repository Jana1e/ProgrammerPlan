<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lecture;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display comments for a specific lecture.
     *
     * @param int $lectureId
     * @return \Illuminate\View\View
     */
    public function index($lectureId)
    {
        $lecture = Lecture::with('comments.user')->findOrFail($lectureId);

        return view('comments.index', compact('lecture'));
    }

    /**
     * Store a new comment.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $lectureId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'lecture_id' => 'required|exists:lectures,id',
            'content' => 'required|string|max:1000',
        ]);
    
        // Save the comment
        Comment::create([
            'content' => $request->content,
            'user_id' => auth()->id(),
            'lecture_id' => $request->lecture_id,
        ]);
    
        return redirect()->back()->with('success', 'Comment posted successfully!');
    }
    

    /**
     * Delete a comment.
     *
     * @param int $commentId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($commentId)
    {
        $comment = Comment::findOrFail($commentId);

        if ($comment->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}
