<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
use Artisan;
class MyWorkController extends Controller
{

    public function index()
    {



        $Works = Product::where('user_id', Auth::user()->id)->where('digital', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.devloper.myWork.index', compact('Works'));
    
   
    }


    public function Mywork()
    {



        $Works = Product::where('user_id', Auth::user()->id)->where('digital', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.devloper.myWork.Mywork', compact('Works'));
    
   
    }



    public function store(Request $request)
    {

        // Validate and save data (replace with your logic)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0', // Ensure price is numeric and non-negative
            'duration' => 'nullable|integer|min:0', // Ensure duration is an integer and non-negative


        ]);

        $user_id = auth()->user()->id;
        $request->merge(['user_id' =>  $user_id]);
        Product::create($request->all());
        flash(translate('Work created successfully.'))->success();
        Artisan::call('view:clear');
        Artisan::call('cache:clear');

        return back();


    }

    public function destroy($id)
    {
       

        $product = Product::findOrFail($id);
        $product->product_translations()->delete();
        $product->categories()->detach();
        $product->wishlists()->delete();
        $product->carts()->delete();
        $product->last_viewed_products()->delete();
        
        Product::destroy($id);


        flash(translate('Product has been deleted successfully'))->success();
        Artisan::call('view:clear');
        Artisan::call('cache:clear');

        return back();
    }


    public function update(Request $request, $id)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail_img' => 'nullable', // Optional file validation
        ]);

        // Find the work item by ID
        $work = Product::findOrFail($id);

        // Update the fields
        $work->name = $validated['name'];
        $work->description = $validated['description'];

        // Handle thumbnail image upload if provided
        if ($request->has('thumbnail_img')) {
            $work->thumbnail_img = $validated['thumbnail_img'];
        }

        // Save the updated work item
        $work->save();
        flash(translate('Work  has been update successfully'))->success();
        Artisan::call('view:clear');
        Artisan::call('cache:clear');

        return back();
    }


}
