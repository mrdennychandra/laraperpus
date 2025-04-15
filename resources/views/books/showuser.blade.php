<!-- filepath: /Users/dennychandra/Documents/Workspace/laravelproj/produk-api/resources/views/books/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="bg-white p-6 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-4">{{ $book->title }}</h1>
        @if ($book->cover_image)
        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover Image" class="w-32 h-48 object-cover">
    @else
        <p>No cover image available.</p>
    @endif
        <p class="text-gray-700"><strong>Author:</strong> {{ $book->author }}</p>
        <p class="text-gray-700"><strong>Published Year:</strong> {{ $book->published_year }}</p>
        <p class="text-gray-700"><strong>ISBN:</strong> {{ $book->isbn }}</p>
        <p class="text-gray-700"><strong>Description:</strong> {{ $book->description }}</p>
        <p class="text-gray-700"><strong>Category:</strong> {{ $book->category->name ?? 'No Category' }}</p>
       
        <!-- Add to Cart Form -->
        <form action="{{ route('cart.store') }}" method="POST" class="mt-4">
            @csrf
            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <label for="quantity" class="block text-gray-700">Quantity</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1" class="border border-gray-300 px-4 py-2 rounded w-24 mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
        </form>

        <div class="mt-4">
            <button onclick="history.back()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back</button>
        </div>

    </div>
</div>
@endsection