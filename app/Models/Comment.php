<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Table name (optional if using 'comments' as the default)
    protected $table = 'comments';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'user_id',
        'lecture_id',
        'content',
    ];

    /**
     * Relationship with the User model.
     * A comment belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship with the Lecture model.
     * A comment belongs to a lecture.
     */
    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }

    /**
     * Format the created_at attribute for display.
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('F j, Y, g:i a');
    }
}
