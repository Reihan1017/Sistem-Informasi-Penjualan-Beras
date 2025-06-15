@extends('layouts.admin') {{-- sesuaikan dengan layout kamu --}}

@section('content')
<h2>Catatan Pemesanan</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Catatan</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $pesanan)
            <tr>
                <td>{{ $pesanan->nama }}</td>
                <td>{{ $pesanan->alamat }}</td>
                <td>{{ $pesanan->no_hp }}</td>
                <td>{{ $pesanan->catatan }}</td>
                <td>{{ $pesanan->created_at->format('d-m-Y H:i') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
