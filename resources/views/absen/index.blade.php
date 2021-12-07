@extends('layout.happy')
@section('title', 'Data Absensi')
@section('judulhalaman', 'Data Absensi Pegawai')
@section('konten')
    <br/>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover table-bordered align-middle">
		<tr class="custom-table">
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
