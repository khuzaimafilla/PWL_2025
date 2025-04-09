<!DOCTYPE html>
<html>
<head>
    <title>Data Level</title>
</head>
<body>
    <h1>Data Level</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->nama_level }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
