<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('Admin.categories.create');
    }

    public function store(Request $request)
    {
        // Validation logic here

        // Create and save the category
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        // Handle image upload here
        if ($request->hasFile('image')) {
            $profileImg = $request->file('image');
            $profileImgPath = Storage::disk('public')->put('images', $profileImg);
            $category->image = $profileImgPath;
        }
        $category->save();

        // Redirect to the index page with a success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('Admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Validation logic here

        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        // Handle image upload here if needed
        if ($request->hasFile('image')) {
            $profileImg = $request->file('image');
            $profileImgPath = Storage::disk('public')->put('images', $profileImg);
            $category->image = $profileImgPath;
        }
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
