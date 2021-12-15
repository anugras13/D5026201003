@extends('layout.happy')
@section('title', 'Data Karyawan')
@section('judulhalaman', 'Data Karyawan')
@section('konten')
    </br>
    <a href="/karyawan1/tambah"> + Tambah Karyawan Baru</a>
	<br/>
	<br/>

	<p>Cari Data Karyawan berdasarkan nama:</p>
	<form action="/karyawan1/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Karyawan .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	</form>
</br>
<table class="table table-striped table-hover table-bordered align-middle">
		<tr class="custom-table">
			<th>No.</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
		<div class="table-secondary">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->NIP}}
            <td>{{ $p->Nama }}</td>
			<td>{{ $p->Pangkat }}</td>
			<td>{{ number_format($p->Gaji) }}</td>
			</div>
			<td>
                <a href="/karyawan1/detail/{{ $p->NIP }}">View</a>
				|
				<a href="/karyawan1/edit/{{ $p->NIP }}">Edit</a>
				|
				<a href="/karyawan1/hapus/{{ $p->NIP }}">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>
       {{ $karyawan1->links() }}

 @endsection
