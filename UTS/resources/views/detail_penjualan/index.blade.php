<!DOCTYPE html>
<html>
<head>
    <title>Data Detail Penjualan</title>
</head>
<body>
    <h1>Data Detail Penjualan</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->barang->nama_barang ?? '-' }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->subtotal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
