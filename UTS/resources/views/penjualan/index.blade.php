<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
</head>
<body>
    <h1>Data Penjualan</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>User</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->user->nama ?? '-' }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
