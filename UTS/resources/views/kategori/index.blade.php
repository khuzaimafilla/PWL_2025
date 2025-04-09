<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>
    <h1>Data Kategori</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->nama_kategori }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
