@extends('layouts.public.app')

@section('content')

<!-- Konten Halaman -->
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Produk Kami</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Bagian Produk -->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Produk</h2>
                    <!-- Tombol Lihat Keranjang -->
                    <a class="btn btn-primary px-4 py-3" href="#!">
                        <div class="d-inline-block bi bi-cart me-2"></div>
                        Lihat Keranjang
                    </a>
                </div>
                <!-- Kartu Produk 1 -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                            <img class="profile-img" src="{{ asset('asset/public/assets/gambar1.png') }} " alt="produk1">
                            </div>
                            <div class="col-lg-8">
                                <h3 class="fw-bolder">Pashminah Plisket</h3>
                                <p class="text-muted">PASHMINAH PLISKET BAHAN BAHAN BABYDOLL PREMIUM</p>
                                <div class="text-primary fw-bolder mb-2">Rp 60.000</div>
                                <a class="btn btn-outline-primary px-4 py-2" href="#!">Tambahkan ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kartu Produk 2 -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                            <img class="profile-img" src="{{ asset('asset/public/assets/gambar1.png') }} " alt="Produk 2">
                            </div>
                            <div class="col-lg-8">
                                <h3 class="fw-bolder">Pasmina Motif plisket</h3>
                                <p class="text-muted">PASHMINAH MOTIF PLISKET BAHAN BABYDOLL PREMIUM</p>
                                <div class="text-primary fw-bolder mb-2">Rp 50.000</div>
                                <a class="btn btn-outline-primary px-4 py-2" href="#!">Tambahkan ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kartu Produk 3 -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                            <img class="profile-img" src="{{ asset('asset/public/assets/gambar1.png') }} " alt="Produk 3">
                            </div>
                            <div class="col-lg-8">
                                <h3 class="fw-bolder">Jilbab bergo</h3>
                                <p class="text-muted">PASHMINAH BERGO BAHAN  PREMIUM</p>
                                <div class="text-primary fw-bolder mb-2">Rp 70.000</div>
                                <a class="btn btn-outline-primary px-4 py-2" href="#!">Tambahkan ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
