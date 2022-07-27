<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Item;
use App\Models\Item_image;
use App\Models\Category;

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.item.index');
    }

    public function create()
    {
        $categories = Category::get(['name', 'id']);

        return view('admin.item.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validate = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'warranty' => 'required',
            'price' => 'required',
            'description' => 'required|max:255',
        ];


        $validatedData = $request->validate($validate);

        $item = Item::create($validatedData);

        if ($request->image) {
            $nameFile = $item->id . ".png";
            $request->image->storeAs(
                'public/item-image', $nameFile
            );

            $item->update([
                'image' => $nameFile,
            ]);
        }

        return redirect(route('item'));
    }

    public function edit(Item $item)
    {
        $categories = Category::get(['name', 'id']);

        return view('admin.item.edit', compact('item', 'categories'));
    }

    public function update(Item $item, Request $request)
    {
        // dd($request);

        $validate = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'warranty' => 'required',
            'price' => 'required',
            'description' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $item->update($validatedData);

        if ($request->image) {
            $nameFile = $item->id . ".png";
            $request->image->storeAs(
                'public/item-image', $nameFile
            );

            $item->update([
                'image' => $nameFile,
            ]);
        }

        if ($request->additionalImage) {
            $nameFile = $item->id . "-" . $request->additionalImage->getClientOriginalName();

            $request->additionalImage->storeAs(
                'public/additional-item-image', $nameFile
            );

            Item_image::create([
                'item_id' => $item->id,
                'image' => $nameFile,
            ]);
        }

        return redirect(route('item'));
    }

    public function delete(Item $item)
    {
        Storage::delete('public/item-image/'.$item->image);

        foreach ($item->item_images as $item_image) {
            Storage::delete('public/additional-item-image/'.$item_image->image);
            $item_image->delete();
        }

        $item->delete();

        return back();
    }

    public function additionalDelete(Item_image $item_image)
    {
        Storage::delete('public/additional-item-image/'.$item_image->image);

        $item_image->delete();

        return back();
    }
}
