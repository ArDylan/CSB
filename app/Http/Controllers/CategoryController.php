<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Type $var = null)
    {
        return view('admin.category.index');
    }
}
