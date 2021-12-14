@extends('layout.happy')
@section('title', 'Data Meja')
@section('judulhalaman', 'Data Meja')
@section('konten')
    </br>
    <a href="/meja/tambah"> + Tambah Meja Baru</a>
	<br/>
	<br/>

	<p>Cari Data Meja berdasarkan nama:</p>
	<form action="/meja/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Meja .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	</form>
</br>
<table class="table table-striped table-hover table-bordered align-middle">
		<tr class="custom-table">
			<th>No.</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($meja as $p)
		<tr>
		<div class="table-secondary">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->merkmeja }}</td>
			<td>{{ $p->stockmeja }}</td>
			<td>{{ $p->tersedia }}</td>
			</div>
			<td>
                <a href="/meja/detail/{{ $p->kodemeja }}">Details</a>
				|
				<a href="/meja/edit/{{ $p->kodemeja }}">Edit</a>
				|
				<a href="/meja/hapus/{{ $p->kodemeja }}">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>
       {{ $meja->links() }}

 @endsection
