<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item) }}" method="POST">
    <!-- mengirim data dengan mthod POST -->
        @csrf
    <!-- Laravel directive untuk keamanan form -->
        @method('PUT')
    <!-- metode untuk mengambil data yang sudah ada dengan PUT -->
        <label for="name">Name:</label>
    <!-- label form "name" -->
        <input type="text" name="name" value="{{ $item->name }}" required>
    <!-- form input "name" bertipe "text" yang berisi data name dari item yang sudah ada sebelumnya -->
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $item->description }}</textarea>
    <!-- form input "description" bertipe "textarea" yang berisi data description dari item yang sudah ada sebelumnya -->
        <br>
        <button type="submit">Update Item</button>
    <!-- submit hasil edit item -->
    </form>
    <a href="{{ route('items.index') }}">Back to List</a>
    <!-- kembali ke laman utama -->
</body>
</html>
