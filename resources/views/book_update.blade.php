<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($book as $p)
	<form action="/book/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Judul <input type="text" required="required" name="title" value="{{ $p->title }}"> <br/>
		Penerbit <input type="text" required="required" name="publisher" value="{{ $p->publisher }}"> <br/>
		Url Image <textarea required="required" name="imageUrl">{{ $p->image }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
