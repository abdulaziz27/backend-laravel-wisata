<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //index
    public function index(Request $request)
    {
        $categories = Category::when($request->keyword, function ($query) use ($request) {
            $query->where('name', 'like', "%{$request->keyword}%")
                ->orWhere('description', 'like', "%{$request->keyword}%");
        })->orderBy('id', 'desc')->paginate(10);
        return view('pages.categories.index', compact('categories'));
    }

    //create
    public function create()
    {
        return view('pages.categories.create');
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'opening_hours' => 'nullable',
            'location' => 'nullable',
            'map_link' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->opening_hours = $request->opening_hours;
        $category->location = $request->location;
        $category->map_link = $request->map_link;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/categories', $imageName);
            $category->image = 'categories/' . $imageName;
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    //edit
    public function edit(Category $category)
    {
        return view('pages.categories.edit', compact('category'));
    }

    //update
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'opening_hours' => 'nullable',
            'location' => 'nullable',
            'map_link' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->opening_hours = $request->opening_hours;
        $category->location = $request->location;
        $category->map_link = $request->map_link;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($category->image) {
                $oldImagePath = storage_path('app/public/' . $category->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/categories', $imageName);
            $category->image = 'categories/' . $imageName;
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    //destroy
    public function destroy(Category $category)
    {
        // Delete image if exists
        if ($category->image) {
            $imagePath = storage_path('app/public/' . $category->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
