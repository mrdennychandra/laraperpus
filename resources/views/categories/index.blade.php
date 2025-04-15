<!-- filepath: /Users/dennychandra/Documents/Workspace/laravelproj/produk-api/resources/views/categories/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Categories</h1>

<!-- Include Alert Messages -->
@include('layouts.alert')

<a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Category</a>
<table class="table-auto w-full mt-4 border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-300 px-4 py-2">Name</th>
            <th class="border border-gray-300 px-4 py-2">Description</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td class="border border-gray-300 px-4 py-2">{{ $category->name }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $category->description }}</td>
            <td class="border border-gray-300 px-4 py-2">
                <a href="{{ route('categories.show', $category->id) }}" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">View</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection