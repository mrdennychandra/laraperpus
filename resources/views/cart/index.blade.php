<!-- filepath: /Users/dennychandra/Documents/Workspace/laravelproj/produk-api/resources/views/cart/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Your Cart</h1>

@if ($carts->isEmpty())
    <p>Your cart is empty.</p>
@else
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Book</th>
                <th class="border border-gray-300 px-4 py-2">Quantity</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalQty = 0; // Initialize grand total
            @endphp
            @foreach ($carts as $cart)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $cart->book->title }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $cart->quantity }}</td>
                @php
                        $totalQty += $cart->quantity; // Add to grand total
                    @endphp
                <td class="border border-gray-300 px-4 py-2">
                    <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Grand Total -->
    <div class="mt-4 text-right">
        <h2 class="text-xl font-bold"> Total Qty: {{ $totalQty }}</h2>
    </div>
@endif
@endsection