<!-- Alert Messages -->
@if (session('success'))
    <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 relative">
        {{ session('success') }}
        <button onclick="document.getElementById('success-alert').remove()" class="absolute top-0 right-0 mt-2 mr-2 text-green-700 hover:text-green-900">
            &times;
        </button>
    </div>
@endif

@if ($errors->any())
    <div id="error-alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 relative">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button onclick="document.getElementById('error-alert').remove()" class="absolute top-0 right-0 mt-2 mr-2 text-red-700 hover:text-red-900">
            &times;
        </button>
    </div>
@endif