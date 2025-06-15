@extends('admin.admin_master')

@section('content')
<h2>Catatan Pemesanan</h2>

<div class="container-fluid">
    <h3 class="mt-4">Data Pesanan</h3>
    <div class="card mt-3">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Produk</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Total</th>
              <th>Catatan</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->telepon }}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->produk->nama_produk ?? '-' }}</td>
              <td>{{ $item->jumlah }}</td>
              <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
              <td>Rp {{ number_format($item->total, 0, ',', '.') }}</td>
              <td>{{ $item->catatan }}</td>
              <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-3">
          {{ $data->links() }} {{-- Untuk pagination --}}
        </div>
      </div>
    </div>
  </div>
@endsection
