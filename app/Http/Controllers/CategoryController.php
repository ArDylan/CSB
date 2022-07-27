<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validate = [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        Category::create($validatedData);

        return redirect(route('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $validate = [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $category->update($validatedData);

        return redirect(route('category'));
    }

    public function delete(Category $category)
    {
        $category->delete();
        return back();
    }
}
