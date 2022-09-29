<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Item;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get()->take(8);
        $costumers = Customer::orderBy('id', 'desc')->get()->take(8);

        return view('welcome', compact('categories', 'costumers'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function items(Category $category)
    {
        $items = Item::where("category_id", $category->id)->get();

        return view("item", compact("items", "category"));
    }
}
