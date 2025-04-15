<!-- filepath: /Users/dennychandra/Documents/Workspace/laravelproj/produk-api/resources/views/categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Category</h1>
<!-- Include Alert Messages -->
@include('layouts.alert')

<form action="{{ route('categories.update', $category->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Name</label>
        <input type="text" name="name" id="name" class="w-full border border-gray-300 px-4 py-2 rounded" value="{{ $category->name }}" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700">Description</label>
        <textarea name="description" id="description" class="w-full border border-gray-300 px-4 py-2 rounded">{{ $category->description }}</textarea>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
</form>
@endsection