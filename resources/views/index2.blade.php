<!DOCTYPE html>
<html>
<head>
	<title>NAMA BUAH</title>
</head>
<body>
<table border="4">
<tr>
	@foreach ($Buah as $b)
		<tr>
			<li>{{$b}}</li>
		</tr>
		@endforeach
</tr>
	
</table>

</body>
</html>
