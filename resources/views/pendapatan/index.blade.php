@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'Data Pendapatan Pegawai')
@section('konten')
</br>
	<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>

	<br/>
	<br/>
    <p>Cari Data Pendapatan berdasarkan nama :</p>
	<form action="/pendapatan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama .." value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
    </form>
</br></br>
	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>

			<td>{{ $p->pegawai_nama }}</td>
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
    {{ $pendapatan->links() }}
@endsection
