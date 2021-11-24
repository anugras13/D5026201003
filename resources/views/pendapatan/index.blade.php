<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>

			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>

			<td>{{ $p->idPegawai }}</td>
			<td>{{ $p->bulan }}</td>
			<td>{{ $p->tahun }}</td>
            <td>{{ $p->gaji}}</td>
            <td>{{ $p->tunjangan}}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
