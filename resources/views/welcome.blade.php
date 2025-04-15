@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Books</h1>

    <!-- Search Form -->
    <form action="{{ route('welcome') }}" method="GET" class="mb-4">
        <input
            type="text"
            name="search"
            placeholder="Search books by title"
            value="{{ $search }}"
            class="border border-gray-300 px-4 py-2 rounded w-full md:w-1/3"
        >
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2 md:mt-0">Search</button>
    </form>

    <!-- Book Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($books as $book)
        <div class="bg-white p-4 rounded shadow-md">
            @if ($book->cover_image)
                <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover Image" class="w-full h-48 object-cover mb-4">
            @endif
            <h2 class="text-lg font-bold mb-2">{{ $book->title }}</h2>
            <p class="text-gray-700 mb-2">Author: {{ $book->author }}</p>
            <p class="text-gray-700 mb-4">{{ Str::limit($book->description, 50) }}</p>
            <a
                href="{{ route('books.showuser', $book->id) }}"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
            >
                Detail
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection