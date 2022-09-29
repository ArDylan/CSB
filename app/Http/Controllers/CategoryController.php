<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if ($request->image) {
            $nameFile = $category->id . ".png";
            $request->image->storeAs(
                'public/category-image', $nameFile
            );

            $category->update([
                'image' => $nameFile,
            ]);
        }

        return redirect(route('category'));
    }

    public function delete(Category $category)
    {
        $category->delete();
        return back();
    }
}
