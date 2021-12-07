@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'Data Pendapatan Pegawai')
@section('konten')

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
            <th>Opsi</th>
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
@endsection
