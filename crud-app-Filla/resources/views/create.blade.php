<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>
    <h1>Add Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
    <!-- mengirim data dengan mthod POST -->
        @csrf
    <!-- Laravel directive untuk keamanan form -->
        <label for="name">Name:</label>
    <!-- label form "name" -->
        <input type="text" name="name" required>
    <!-- form input "name" bertipe "text" -->
        <br>
        <label for="description">Description:</label>
    <!-- label form "description" -->
        <textarea name="description" required></textarea>
    <!-- inputan form description bertipe textarea (inputan teks yang luas) -->
        <br>
        <button type="submit">Add Item</button>
    <!-- tombol untuk submit form -->
    </form>
    <a href="{{ route('items.index') }}">Back to List</a>
    <!-- kembali ke laman utama -->
</body>
</html>
