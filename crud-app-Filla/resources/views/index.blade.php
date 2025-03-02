<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Items</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    <!-- condition ketika session berhasil menampilkan message "success" -->
    @endif
    <a href="{{ route('items.create') }}">Add Item</a>
    <!-- Mengarah ke page form untuk membuat item baru -->
    <ul>
        @foreach ($items as $item)
    <!-- perulangan foreach untuk listing item dari database-->
            <li>
                {{ $item->name }} - 
                <a href="{{ route('items.edit', $item) }}">Edit</a>
                <!-- ke page edit dengan ID item yang dipilih. -->
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf
                <!-- Laravel directive untuk keamanan form -->
                    @method('DELETE')
                <!-- method untuk menghapus data yang sudah ada sebelumnya -->
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
