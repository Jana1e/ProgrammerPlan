<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Product;
use Illuminate\Http\Request;

class SectionsController extends Controller
{



    public function index(Request $request)
    {
        $productId = $request->query('product_id');
    
        // Retrieve sections with their related lectures for the specified product ID
        $sections = Section::with(['lectures' => function ($query) {
            $query->orderBy('lecture_order'); // Order lectures by lecture_order within each section
        }])
            ->where('product_id', $productId)
            ->orderBy('section_order')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Sections fetched successfully',
            'sections' => $sections,
        ]);
    }



    public function create($productId)
    {
        $product = Product::findOrFail($productId);
        return view('sections.create', compact('product'));
    }


    public function store(Request $request)
    {



        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'section_order' => 'nullable|integer',
            'product_id' => 'required|exists:products,id' // Ensures the product exists
        ]);

        // Create the section
        $section = Section::create([
            'product_id' => $validated['product_id'],
            'title' => $validated['title'],
            'section_order' => $validated['section_order'] ?? 0 // Default to 0 if not provided
        ]);

        // Check if the request is an AJAX request
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Section created successfully.',
                'section' => $section
            ]);
        }

        // Redirect for non-AJAX requests
        return redirect()->route('sections.index', ['product' => $section->product_id])
            ->with('success', 'Section created successfully.');
    }

    /**
     * Display the specified section.
     */
    public function show($productId, $id)
    {
        $section = Section::where('product_id', $productId)->findOrFail($id);
        return view('sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified section.
     */
    public function edit($productId, $id)
    {
        $product = Product::findOrFail($productId);
        $section = Section::where('product_id', $productId)->findOrFail($id);

        return view('sections.edit', compact('product', 'section'));
    }

    /**
     * Update the specified section in the database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'order' => 'nullable|integer'
        ]);

        $section = Section::findOrFail($id);
        $section->update([
            'name' => $request->input('name'),
            'order' => $request->input('order', 0)
        ]);

        return response()->json([
            'success' => true,
            'message' => 'تم تحديث القسم بنجاح',
            'section' => $section
        ]);
    }

    /**
     * Remove the specified section from the database.
     */
    public function destroy($id)
    {
        $section = Section::findOrFail($id); // العثور على القسم أو إرجاع خطأ 404 إذا لم يكن موجودًا
        $section->delete(); // حذف القسم

        return response()->json([
            'success' => true,
            'message' => 'تم حذف القسم بنجاح.'
        ]);
    }


    public function reorder(Request $request)
    {
        // Ensure the 'order' array is present
        $order = $request->input('order');

        if (!$order) {
            return response()->json(['success' => false, 'message' => 'No order provided']);
        }

        // Update each section's order based on the provided array
        foreach ($order as $item) {
            Section::where('id', $item['id'])->update(['section_order' => $item['order']]);
        }

        return response()->json(['success' => true, 'message' => 'Sections reordered successfully']);
    }
}
