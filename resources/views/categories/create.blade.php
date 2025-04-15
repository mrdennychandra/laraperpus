<!-- filepath: /Users/dennychandra/Documents/Workspace/laravelproj/produk-api/resources/views/categories/create.blade.php -->
@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create Category</h1>

<!-- Include Alert Messages -->
@include('layouts.alert')

<form action="{{ route('categories.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Name</label>
        <input type="text" name="name" id="name" class="w-full border border-gray-300 px-4 py-2 rounded" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700">Description</label>
        <textarea name="description" id="description" class="w-full border border-gray-300 px-4 py-2 rounded"></textarea>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
</form>
@endsection