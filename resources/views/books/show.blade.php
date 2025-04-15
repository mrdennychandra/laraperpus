@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $book->title }}</h1>
    <div class="mb-4">
        <strong>Author:</strong> {{ $book->author }}
    </div>
    <div class="mb-4">
        <strong>Published Year:</strong> {{ $book->published_year }}
    </div>
    <div class="mb-4">
        <strong>ISBN:</strong> {{ $book->isbn }}
    </div>
    <div class="mb-4">
        <strong>Description:</strong> {{ $book->description }}
    </div>
    <div class="mb-4">
        <strong>Category:</strong> {{ $book->category->name }}
    </div>
    <div class="mb-4">
        <strong>Cover Image:</strong>
        @if ($book->cover_image)
            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover Image" class="w-32 h-48 object-cover">
        @else
            <p>No cover image available.</p>
        @endif
    </div>
    <a href="{{ route('books.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
</div>
@endsection