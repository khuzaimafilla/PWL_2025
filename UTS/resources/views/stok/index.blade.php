<!DOCTYPE html>
<html>
<head>
    <title>Data Stok</title>
</head>
<body>
    <h1>Data Stok</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Barang</th>
                <th>Jumlah Masuk</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->barang->nama_barang ?? '-' }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->tanggal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
