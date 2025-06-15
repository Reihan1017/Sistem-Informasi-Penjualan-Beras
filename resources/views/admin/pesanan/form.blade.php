@extends('layouts.main')

@section('container')

<section>
  <main id="main">

    <section id="order-form" class="contact mt-4">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Pemesanan</h2>
          <p>Formulir Pemesanan Produk</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6 offset-lg-3">
            <form action="{{ route('pesanan.store') }}" method="POST">
              @csrf

              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="col-md-6">
                  <input type="tel" name="telepon" class="form-control" placeholder="No. Telepon / WhatsApp" required>
                </div>

                <div class="col-md-12">
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" required>
                </div>

                <div class="col-md-6">
                  <select name="produk_id" id="produkSelect" class="form-control" required>
                    <option value="">Pilih Produk</option>
                    @foreach ($produkList as $produk)
                      <option value="{{ $produk->id }}" data-harga="{{ $produk->harga }}">
                        {{ $produk->nama }} - {{ $produk->kategori }}
                      </option>
                    @endforeach
                  </select>
                </div>

                <div class="col-md-6">
                  <input type="text" id="hargaProduk" class="form-control" placeholder="Harga Otomatis" readonly>
                </div>

                <div class="col-md-12">
                  <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Pesanan" required>
                </div>

                <div class="col-md-12">
                  <textarea name="catatan" class="form-control" rows="4" placeholder="Catatan (Opsional)"></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-success">Kirim Pemesanan</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

  </main>
</section>

<script>
  document.getElementById('produkSelect').addEventListener('change', function () {
    const harga = this.options[this.selectedIndex].getAttribute('data-harga');
    document.getElementById('hargaProduk').value = harga ? 'Rp ' + harga : '';
  });
</script>

@endsection
