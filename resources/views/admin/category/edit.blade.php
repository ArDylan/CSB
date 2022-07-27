@extends('layouts.app')

@section('content')

<h1 class="text-lg flex-1 font-medium">Edit Category</h1>

<form action="{{route('category.update', ['category' => $category->id])}}" class="mt-10" method="post">
    @csrf
    @method('patch')
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
      <input name="name" value="{{$category->name}}" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name" required>
    </div>
    <div class="mb-6">
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
      <input name="description" value="{{$category->description}}" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Description" required>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>



@endsection
