<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    try {
        Category::create($validatedData);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Failed to save category: ' . $e->getMessage());

        // Redirect back to the create view with an error message
        return redirect()->route('categories.create')->with('error', 'Failed to create category. Please try again.');
    }
}

    /**
     * Display the specified category.
     */
    public function show($id)
    {
        try {
            $category = Category::findOrFail($id);
            return view('categories.show', compact('category'));
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Failed to retrieve category: ' . $e->getMessage());
    
            // Redirect back to the index view with an error message
            return redirect()->route('categories.index')->with('error', 'Failed to retrieve category. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        try {
            $category = Category::findOrFail($id);
            $category->update($validatedData);
            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Failed to update category: ' . $e->getMessage());
    
            // Redirect back to the edit view with an error message
            return redirect()->route('categories.edit', $id)->with('error', 'Failed to update category. Please try again.');
        }
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Failed to delete category: ' . $e->getMessage());
    
            // Redirect back to the index view with an error message
            return redirect()->route('categories.index')->with('error', 'Failed to delete category. Please try again.');
        }
    }
}