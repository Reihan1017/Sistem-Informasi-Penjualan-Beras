@extends('layouts.main')

@section('container')
<style>
    #hero {
  width: 100%;
  height: 90.5vh;
  background-image: url('assets/img/sawah.jpg');
  background-size: cover;
  background-position: center;
}
</style>
    <section>
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>PILIHAN TERBAIK DARI YANG TERBAIK</h1>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="assets/img/homee.png" class="img-fluid animated" alt="" style="float: right">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="row justify-content-between">
                        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                            <img src="assets/img/sawahh.jpg" class="img-fluid" alt="" data-aos="zoom-in">
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <h3 data-aos="fade-up">Tentang Kami</h3>
                            <p data-aos="fade-up" data-aos-delay="100">
                            Sistem Informasi Penjualan Beras adalah sebuah sistem yang 
                            dirancang untuk membantu proses pengelolaan penjualan beras,
                            baik secara manual maupun digital. Sistem ini bertujuan untuk 
                            meningkatkan efisiensi, akurasi, dan kemudahan dalam aktivitas penjualan, 
                            pencatatan stok, serta laporan transaksi.
                            </p>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-box-seam-fill"></i>
                                    <h4>Kelola Inventory</h4>
                                    <p>Kelola inventaris dengan efisien dan mudah menggunakan platform kami untuk meningkatkan produktivitas
                                    </p>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-wallet"></i>
                                    <h4>Kelola Payment</h4>
                                    <p>Mudahkan proses pembayaran Anda dengan platform kami yang aman dan dapat diandalkan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Produk</h2>
                        <p>Abah Beras</p>
                    </div>

                    <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                    alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
            <!-- End Clients Section -->
                         <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title2">
                        <h2>Layanan Kami</h2>
                        <p>Lihatlah layanan hebat yang kami tawarkan!</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-handbag"></i></div>
                                <h4 class="title"><a href="">Inventaris</a></h4>
                                <p class="description">Melacak dan mengelola stok produk secara efisien, memastikan ketersediaan barang yang akurat dan memberikan informasi terkini mengenai jumlah dan jenis produk yang tersedia.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-wallet2"></i></div>
                                <h4 class="title"><a href="">Pembayaran</a></h4>
                                <p class="description">Mengefisiensi pembelian produk melalui berbagai metode pembayaran yang aman dan terpercaya, memastikan pengalaman berbelanja yang nyaman dan tanpa hambatan.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-currency-dollar"></i></div>
                                <h4 class="title"><a href="">Keuangan</a></h4>
                                <p class="description">Pelacakan dan analisis secara real-time terhadap transaksi, pendapatan, dan pengeluaran, membantu pengguna dalam mengelola dan mengoptimalkan keuangan mereka dengan lebih efektif dan efisien.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- End Services Section -->
        </main><!-- End #main -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </section>
@endsection
