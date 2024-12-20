<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'location', 'start_date', 'registration_link', 'image', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
