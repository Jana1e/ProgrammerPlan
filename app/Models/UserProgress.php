<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgress extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'user_progress';

    // Fillable properties for mass assignment
    protected $fillable = [
        'user_id',
        'course_id',
        'section_id',
        'lecture_id',
        'completed',
        'completed_at',
    ];

    // Relationships

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    
    /**
     * Relationship with the Course model.
     */
    public function course()
    {
        return $this->belongsTo(Product::class, 'course_id', 'id');
    }

    /**
     * Relationship with the Section model.
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * Relationship with the Lecture model.
     */
    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }






    public function getProgressPercentage()
    {
        $totalLectures = $this->course->lectures()->count();
        $completedLectures = UserProgress::where('user_id', $this->user_id)
            ->where('course_id', $this->course_id)
            ->where('completed', 1)
            ->count();
    
        if ($totalLectures === 0) {
            return 0;
        }
    
        return round(($completedLectures / $totalLectures) * 100, 2);
    }
    





    public function courses()
    {
        return $this->userProgress()
            ->with('course')
            ->get()
            ->pluck('course')
            ->unique();
    }


    public static function getUserCountByCourse($courseId)
    {
        return self::where('course_id', $courseId)->distinct('user_id')->count('user_id');
    }


}
