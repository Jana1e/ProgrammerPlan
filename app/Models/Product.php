<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class Product extends Model
{
    use PreventDemoModeChanges;
    
    protected $guarded = ['choice_attributes'];

    protected $with = ['product_translations', 'taxes', 'thumbnail'];



    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function wishlistCount()
    {
        return $this->wishlists()->count();
    }



    public function getTranslation($field = '', $lang = false)
    {
        $lang = $lang == false ? App::getLocale() : $lang;
        $product_translations = $this->product_translations->where('lang', $lang)->first();
        return $product_translations != null ? $product_translations->$field : $this->$field;
    }

    public function product_translations()
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function main_category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function frequently_bought_products()
    {
        return $this->hasMany(FrequentlyBoughtProduct::class);
    }

    public function product_categories()
    {
        return $this->hasMany(ProductCategory::class);
    }

 

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_progress', 'course_id', 'user_id')
            ->withTimestamps(); // Assuming the pivot table is `user_product`
    }
    


    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->where('status', 1);
    }

    public function product_queries()
    {
        return $this->hasMany(ProductQuery::class);
    }

    

    public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }

    public function taxes()
    {
        return $this->hasMany(ProductTax::class);
    }

    public function flash_deal_products()
    {
       
    }

    public function bids()
    {
        return $this->hasMany(AuctionProductBid::class);
    }

    public function thumbnail()
    {
        return $this->belongsTo(Upload::class, 'thumbnail_img');
    }

    public function scopePhysical($query)
    {
        return $query->where('digital', 0);
    }

    public function scopeDigital($query)
    {
        return $query->where('digital', 1);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    
    public function scopeIsApprovedPublished($query)
    {
        return $query->where('approved', '1')->where('published', 1);
    }

    public function last_viewed_products()
    {
        return $this->hasMany(LastViewedProduct::class);
    }




 /**
     * Get the user progress for all users in this course.
     */
    public function userProgress()
    {
        return $this->hasMany(UserProgress::class);
    }




    public function sections()
    {
        return $this->hasMany(Section::class, 'product_id');
    }




    public function getProgressPercentage($userId)
    {
        // Total lectures in the course
        $totalLectures = $this->sections()->withCount('lectures')->get()->sum('lectures_count');
    
        if ($totalLectures === 0) {
            return 0; // Avoid division by zero
        }
    
        // Completed lectures by the user
        $completedLectures = $this->sections()
            ->with('lectures')
            ->get()
            ->flatMap(function ($section) use ($userId) {
                return $section->lectures->filter(function ($lecture) use ($userId) {
                    return $lecture->userProgress()
                        ->where('user_id', $userId)
                        ->where('completed', 1)
                        ->exists();
                });
            })->count();
    
        // Calculate the progress percentage
        return round(($completedLectures / $totalLectures) * 100, 2);
    }
    

    public function getTotalSections()
    {
        return $this->sections()->count();
    }
    
    public function getTotalLectures()
    {
        return $this->sections()
            ->withCount('lectures') // Count lectures in each section
            ->get()
            ->sum('lectures_count'); // Sum up all lectures
    }
    





}
