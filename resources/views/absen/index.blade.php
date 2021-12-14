@extends('layout.happy')
@section('title', 'Data Absensi')
@section('judulhalaman', 'Data Absensi Pegawai')
@section('konten')
    <br/>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>
    <p>Cari Data Absen Pegawai berdasarkan nama:</p>
	<form action="/absen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Pegawai .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit">
    </form>
    <br/>
    <br/>
	<table class="table table-striped table-hover table-bordered align-middle">
		<tr class="custom-table">
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
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
    {{$absen->links() }}
@endsection
