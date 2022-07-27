@extends('layouts.app')

@section('content')

<h1 class="text-lg flex-1 font-medium">Add Item</h1>

<form action="{{route('item.store')}}" class="mt-10" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
        <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name">
    </div>
    <div class="mb-6">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Category</label>
        <select name="category_id" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @foreach ( $categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-6">
        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
        <input name="stock" type="number" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Stock">
    </div>
    <div class="mb-6">
        <label for="discount" class="block mb-2 text-sm font-medium text-gray-900">Discount</label>
        <input name="discount" type="number" id="discount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Discount">
    </div>
    <div class="mb-6">
        <label for="warranty" class="block mb-2 text-sm font-medium text-gray-900">Warranty</label>
        <input name="warranty" type="text" id="warranty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Warranty">
    </div>
    <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
        <input name="price" type="number" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Price">
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Banner Image</label>
        <input name="image" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none" id="user_avatar" type="file" accept="image/*">
        <div class="mt-1 text-sm text-gray-500" id="user_avatar_help">The image that will be most emblazoned on your item</div>
    </div>

    <div class="mb-6">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
        <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Description column"></textarea>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

@endsection
