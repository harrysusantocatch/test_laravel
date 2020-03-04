<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<form action="/formulir/process" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>

</body>
</html>
