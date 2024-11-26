<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'title',
        'section_order'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class)->orderBy('lecture_order');
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function userProgress()
    {
        return $this->hasMany(UserProgress::class);
    }


    public function getProgressPercentage($userId)
    {
        // Total lectures in the section
        $totalLectures = $this->lectures()->count();
    
        if ($totalLectures === 0) {
            return 0; // Avoid division by zero
        }
    
        // Completed lectures by the user
        $completedLectures = $this->lectures()
            ->whereHas('userProgress', function ($query) use ($userId) {
                $query->where('user_id', $userId)->where('completed', 1);
            })->count();
    
        // Calculate the progress percentage
        return round(($completedLectures / $totalLectures) * 100, 2);
    }
    
    public function getTotalLectures()
    {
        return $this->lectures()->count();
    }
    

}
