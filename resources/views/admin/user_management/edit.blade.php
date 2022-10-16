@extends('layouts.app')

@section('content')

<h1 class="text-lg flex-1 font-medium">Add User</h1>

<form action="{{route('user.update', ['user' => $user->id])}}" class="mt-10" method="post" enctype="multipart/form-data">
    @csrf
        @method('patch')

    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
        <input name="name" value="{{$user->name}}" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name">
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input name="email" value="{{$user->email}}" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ex: john@gmail.com">
    </div>
    {{-- <div class="mb-6">
        <label for="level" class="block mb-2 text-sm font-medium text-gray-900" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">Role</label>
        <select name="level" id="level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option value="admin" @if($user->level == "admin") selected @endif>Admin</option>
            <option value="user" @if($user->level == "user") selected @endif>User</option>
        </select>
    </div> --}}
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
        <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Kosongkan Bila Tidak ada Perubahan">
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

@endsection
