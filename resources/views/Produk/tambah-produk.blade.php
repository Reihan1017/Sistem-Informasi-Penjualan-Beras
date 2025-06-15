@extends('layouts.main')

@section('container')
    <section>
        <!-- ======= add Product Section ======= -->
        <section id="add" class="add">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h1>Add Product</h1>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <form action="{{ route('store-inventory') }}" method="post" class="php-email-form">
                                @csrf
                            <div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" onchange="previewFoto()">
                                        @error('foto')
                                        <div class="invalid-feedback alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="nama_barang"> Nama Merk</label>
                                    <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                        placeholder="Masukkan nama barang" required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="harga_jual">Harga Jual</label>
                                    <input type="number" class="form-control" name="harga_jual" id="harga_jual"
                                        placeholder="0" min="0" step="1000" required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" name="kategori" id="kategori" required>
                                        <option disabled selected>-- Pilih Kategori --</option>
                                        <option value="Sepatu">MERAH</option>
                                        <option value="Baju">PUTIH</option>
                                        <option value="Elektronik">raskin</option>
                                        <option value="Mainan">bansos</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="jumlah_stok">Jumlah Stok</label>
                                    <input type="number" class="form-control" name="jumlah_stok" id="jumlah_stok"
                                        placeholder="0" min="0" required>
                                </div>
                            <div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan Data</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Us Section -->
    </section>
@endsection
