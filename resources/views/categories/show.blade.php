<!-- filepath: /Users/dennychandra/Documents/Workspace/laravelproj/produk-api/resources/views/categories/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="text-2xl font-bold mb-4">{{ $category->name }}</h1>
    <p class="text-gray-700"><strong>Description:</strong> {{ $category->description }}</p>
    <div class="mt-4">
        <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to Categories</a>
        <a href="{{ route('categories.edit', $category->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
        </form>
    </div>
</div>
@endsection