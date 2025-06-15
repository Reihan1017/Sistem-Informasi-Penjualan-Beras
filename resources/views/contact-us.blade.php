@extends('layouts.main')

@section('title', 'Pesan Sekarang')

@section('container')

<section>
  <main id="main">
    <section id="order-form" class="contact mt-4 bg-sawah">
      <div class="container mb-5" data-aos="fade-up">
        <header class="section-header text-center mb-5 pb-4" >
          <h1>Pemesanan</h1>
          <p>Silahkan lengkapi data diri untuk pemesanan</p>
        </header>
        
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat Toko</h3>
                  <p>Jl. Raya Malangbong Rt. 001 Rw. 003 Kab. Garut</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Operasional</h3>
                  <p>Senin - Jum'at 07.45 - 17:00</p>
                  <p>Sabtu 07.45 - 14:00</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="{{ route('pesanan.store') }}" method="POST" class="">
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

                <!-- Pilih Produk -->
                <select name="produk_id" id="produkSelect" class="form-control" required>
                  <option value="">Pilih Produk</option>
                  @foreach ($produks as $produk)
                  <option value="{{ $produk->id }}" 
                    data-nama="{{ $produk->nama_produk }}" 
                    data-harga="{{ $produk->harga }}">
              {{ $produk->nama_produk }}
            </option>            
                  @endforeach
                </select>

                <!-- Harga Satuan Otomatis -->
                <div class="col-md-6">
                  <input type="text" id="hargaProduk" class="form-control" readonly>
                </div>

                <!-- Jumlah Pesanan -->
                <div class="col-md-6">
                  <input type="number" id="jumlahProduk" name="jumlah" class="form-control" placeholder="Jumlah Pesanan" min="1" value="1" required>
                </div>

                <!-- Total Harga -->
                <div class="col-md-6">
                  <input type="text" id="totalHarga" class="form-control" placeholder="Total Harga" readonly>
                </div>
                <!-- Catatan -->
                <div class="col-md-12">
                  <textarea name="catatan" class="form-control" placeholder="Catatan (opsional)"></textarea>
                </div>
                
                <!-- Tombol Kirim: Ubah ID & biarkan form tetap submit -->
                <button type="submit" class="btn btn-success">
                  Kirim Pesanan
                </button>

                
                
                </div>

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
  // ========== Script Harga dan Total Otomatis ==========
  document.getElementById('produkSelect').addEventListener('change', function () {
    const selected = this.options[this.selectedIndex];
    const harga = selected.getAttribute('data-harga');
    document.getElementById('hargaProduk').value = 'Rp ' + parseInt(harga).toLocaleString();

    const jumlah = document.getElementById('jumlahProduk').value;
    if (jumlah) {
      const total = parseInt(harga) * parseInt(jumlah);
      document.getElementById('totalHarga').value = 'Rp ' + total.toLocaleString();
    }
  });

  document.getElementById('jumlahProduk').addEventListener('input', function () {
    const jumlah = this.value;
    const selected = document.getElementById('produkSelect').options[document.getElementById('produkSelect').selectedIndex];
    const harga = selected.getAttribute('data-harga');

    if (harga && jumlah) {
      const total = parseInt(harga) * parseInt(jumlah);
      document.getElementById('totalHarga').value = 'Rp ' + total.toLocaleString();
    }
  });

  // ========== Script Kirim ke WhatsApp ==========
  document.getElementById('waBtn').addEventListener('click', function (e) {
    e.preventDefault();

    let nama = document.querySelector('[name="nama"]').value;
    let telepon = document.querySelector('[name="telepon"]').value;
    let alamat = document.querySelector('[name="alamat"]').value;
    let produk = document.querySelector('[name="produk_id"] option:checked').text;
    let harga = document.getElementById('hargaProduk').value;
    let jumlah = document.querySelector('[name="jumlah"]').value;
    let total = document.getElementById('totalHarga').value;
    let catatan = document.querySelector('[name="catatan"]').value;

        let pesan = 
    ` *Pesanan Baru*\n\n` +
    ` *Nama:* ${nama}\n` +
    ` *No HP:* ${telepon}\n` +
    ` *Alamat:* ${alamat}\n\n` +
    ` *Produk:* ${produk}\n` +
    ` *Harga per-Kg:* ${harga}\n` +
    ` *Jumlah:* ${jumlah} Kg \n` + 
    ` *Total yang Harus Dibayar Sebesar:* ${total}\n\n` +
    ` *Catatan:* ${catatan}`;

    // Encode pesan agar baris baru (\n) terbaca di WhatsApp
    let url = "https://api.whatsapp.com/send?phone=6285117222655&text=" + encodeURIComponent(pesan);

    window.open(url, '_blank');
  });
</script>




@endsection
