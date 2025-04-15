@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Books</h1>
    <!-- Include Alert Messages -->
@include('layouts.alert')
    <a href="{{ route('books.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Book</a>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">Title</th>
                <th class="border border-gray-300 px-4 py-2">Author</th>
                <th class="border border-gray-300 px-4 py-2">Published Year</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $book->author }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $book->published_year }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('books.show', $book->id) }}" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">View</a>
                <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                </form>
               </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection