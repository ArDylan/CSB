@extends('layouts.app')

@section('content')

<h1 class="text-lg flex-1 font-medium">Add Customer</h1>

<form action="{{route('customer.update', ['customer' => $customer->id])}}" class="mt-10" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
        <input name="name" type="text" value="{{$customer->name}}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name">
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input name="email" type="text" value="{{$customer->email}}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ex: john@gmail.com">
    </div>
    <div class="mb-6">
        <label for="no_phone" class="block mb-2 text-sm font-medium text-gray-900">No HP</label>
        <input name="no_phone" type="text" value="{{$customer->no_phone}}" id="no_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ex: 0812">
    </div>
    <div class="mb-6">
        <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
        <input name="location" type="text" value="{{$customer->location}}" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ex: Balikpapan">
    </div>
    <div class="mb-6">
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
        <input name="image" type="file" id="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

@endsection
