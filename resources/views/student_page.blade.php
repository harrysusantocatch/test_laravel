<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT</title>
</head>
<body>
<a href="/form">add</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Course</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->course }}</td>
            <td>
                <a href="/form/edit/{{ $student->id }}">Edit</a>
                |
                <a href="/student/delete/{{ $student->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
