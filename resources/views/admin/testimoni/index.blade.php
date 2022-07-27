@extends('layouts.app')

@section('content')
<div class="md:flex">
    <h1 class="text-xl font-bold flex-1 text-center md:text-left">TABLE TESTIMONI</h1>
    <a href="{{route('customer.create')}}" class="flex focus:outline-none text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-green-900">Tambah</a>
</div>
<livewire:testimoni-component/>

@endsection
