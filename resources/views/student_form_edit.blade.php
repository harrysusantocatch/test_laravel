<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Student</title>
</head>
<body>
    @foreach($students as $student)
    <form action="/student/update" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <input type="hidden" name="id" value="{{ $student->id }}"> <br/>
      	Name :
		<input type="text" name="name" value="{{ $student->name }}"> <br/>
		Course :
		<input type="text" name="course" value="{{ $student->course }}"> <br/>
		<input type="submit" value="Save">
    </form>
    @endforeach
</body>
</html>
