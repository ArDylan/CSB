@extends('layouts.app')

@section('content')

<h1 class="text-lg flex-1 font-medium">Edit Item</h1>

<form action="{{route('item.update', ['item' => $item->id])}}" class="mt-10" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
        <input value="{{$item->name}}" name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name">
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
        <input value="{{$item->stock}}" name="stock" type="number" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Stock">
    </div>
    <div class="mb-6">
        <label for="discount" class="block mb-2 text-sm font-medium text-gray-900">Discount</label>
        <input value="{{$item->discount}}" name="discount" type="number" id="discount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Discount">
    </div>
    <div class="mb-6">
        <label for="warranty" class="block mb-2 text-sm font-medium text-gray-900">Warranty</label>
        <input value="{{$item->warranty}}" name="warranty" type="text" id="warranty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Warranty">
    </div>
    <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
        <input value="{{$item->price}}" name="price" type="number" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Price">
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Banner Image</label>
        <input name="image" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none" id="user_avatar" type="file" accept="image/*">
        <div class="mt-1 text-sm text-gray-500" id="user_avatar_help">The image that will be most emblazoned on your item</div>
        <img src="{{asset('storage/item-image/'.$item->image)}}" alt="" class="rounded-md shadow-md w-52 h-52">
    </div>
    <div class="mb-6">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
        <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Description column">{{$item->description}}</textarea>
    </div>
    <div class="mb-6">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Additional Image</label>
        <input name="additionalImage" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none" id="user_avatar" type="file" accept="image/*">
    </div>


    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>
<div class="grid grid-cols-4 gap-4 mt-10 py-3">
    @foreach ($item->item_images as $file)
    <form action="{{route('item.delete.image', ['item_image' => $file->id])}}" method="post">
        @csrf
        @method('delete')
        <div>
            <img src="{{asset('storage/additional-item-image/'.$file->image)}}" alt="" class="rounded-md shadow-md">
            <input type="hidden" name="id" value="{{$file->id}}">
            <button type="submit" class="m-2 p-1 text-red-600 hover:bg-red-600 hover:text-white rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                {{-- <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg%22%3E<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg> --}}
            </button>
        </div>
    </form>
    @endforeach
</div>

@endsection
