<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/book/tambah">Tambah</a>
    <table>
        <tr>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Url Gambar</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{$book->image}}</td>
            <td>
                <a href="/book/update/{{ $book->id }}">Edit</a>
                |
                <a href="/book/delete/{{ $book->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
