@extends('layouts.public.app')

@section('content')

<!-- Konten Halaman -->
<section class="py-5">
    <div class="container px-5">
        <!-- Daftar Kategori Jilbab -->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                    <i class="bi bi-tags"></i>
                </div>
                <h1 class="fw-bolder">Kategori Jilbab</h1>
                <p class="lead fw-normal text-muted mb-0">Temukan koleksi jilbab terbaik kami</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- Looping Kategori Jilbab -->
                    <!-- Looping Kategori Jilbab 1 -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">PASMINAH CRINKLE</div>
                                        <div class="small text-muted">Pasminah yang gampang di bentuk</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                <img class="profile-img" src="{{ asset('asset/public/assets/gambar1.png') }} "alt="">
                                </div>
                                <div class="text-primary fw-bolder mb-2">Rp 50.000</div>
                                <a class="btn btn-outline-primary px-4 py-2" href="#!">Tambahkan ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <!-- Looping Kategori Jilbab 2 -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Jilbab birgo </div>
                                        <div class="small text-muted">Cocok untuk di pakai sehari hari  </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                <img class="profile-img" src="{{ asset('asset/public/assets/gambar1.png') }} "alt="">
                                </div>
                                <div class="text-primary fw-bolder mb-2">Rp 50.000</div>
                                <a class="btn btn-outline-primary px-4 py-2" href="#!">Tambahkan ke Keranjang</a>
                              </div>
                             </div>
                         </div>
                        <!-- Looping Kategori Jilbab 3 -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Segita Premium</div>
                                        <div class="small text-muted">Cocok unrtuk anak sekolah jaman sekrang </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                <img class="profile-img" src="{{ asset('asset/public/assets/gambar1.png') }} "alt="">
                                </div>
                                <div class="text-primary fw-bolder mb-2">Rp 50.000</div>
                                <a class="btn btn-outline-primary px-4 py-2" href="#!">Tambahkan ke Keranjang</a>
                              </div>
                             </div>
                         </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
