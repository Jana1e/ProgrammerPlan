<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'title',
        'content',
        'video_url',
        'lecture_order',
        'description',
        'pdf',
        'lecture_notes'
    ];

  

    public function section()
    {
        return $this->belongsTo(Section::class);
    }



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    



    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function userProgress()
    {
        return $this->hasMany(UserProgress::class);
    }

    public function getIsCompletedAttribute()
    {
        return UserProgress::where('user_id', auth()->id())
            ->where('lecture_id', $this->id)
            ->where('completed', 1)
            ->exists();
    }
    
    public function getIsCurrentAttribute()
    {
        $currentProgress = UserProgress::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->first();
    
        return $currentProgress && $currentProgress->lecture_id === $this->id;
    }



    public function getCourseProgressPercentage($userId)
    {
        $totalLectures = $this->section->product->lectures()->count();
    
        if ($totalLectures === 0) {
            return 0; // Avoid division by zero
        }
    
        $completedLectures = $this->section->product->lectures()
            ->whereHas('userProgress', function ($query) use ($userId) {
                $query->where('user_id', $userId)->where('completed', 1);
            })->count();
    
        return round(($completedLectures / $totalLectures) * 100, 2);
    }
    


    
}
