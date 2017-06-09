<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
<table border="2">
	<tr>
		<th>Nama: </th>
		<th>Jurusan: </th>
		<th>JK: </th>
	</tr>
		@foreach ($tampilan as $b)
		<tr>
			<td>{{$b->nama }}</td>
			<td>{{$b->jurusan }}</td>
			<td>{{$b->JK }}</td>
		</tr>
		@endforeach


	</tr>
</table>
</body>
</html>