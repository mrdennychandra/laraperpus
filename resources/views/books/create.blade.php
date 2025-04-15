@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Add New Book</h1>
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="title" class="block font-bold">Title</label>
            <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label for="author" class="block font-bold">Author</label>
            <input type="text" name="author" id="author" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label for="published_year" class="block font-bold">Published Year</label>
            <input type="date" name="published_year" id="published_year" class="w-full border border-gray-300 rounded px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="isbn" class="block font-bold">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block font-bold">Description</label>
            <textarea name="description" id="description" class="w-full border border-gray-300 rounded px-4 py-2"></textarea>
        </div>
        <div class="mb-4">
            <label for="cover_image" class="block font-bold">Cover Image</label>
            <input type="file" name="cover_image" id="cover_image" class="w-full border border-gray-300 rounded px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="category_id" class="block font-bold">Category</label>
            <select name="category_id" id="category_id" class="w-full border border-gray-300 rounded px-4 py-2" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('books.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
    </form>
</div>
@endsection