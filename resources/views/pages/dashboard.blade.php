@extends('layouts.main')

@section('title', $title = 'Dashboard')

@section('content')
<div class="container">
    <div class="row mb-3 mt-3">
        <div class="col-lg-4 col-md-12">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3> ₹185358 </h3>
                    <p> Data Pasien </p>
                </div>
                <div class="icon">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> 5464 </h3>
                    <p> Data Kriteria </p>
                </div>
                <div class="icon">
                    <i class="fa fa-list" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3> 723 </h3>
                    <p> Alternatif Makanan </p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="text-center p-3">
                <img class="w-75" src="{{ asset ('img/makanan.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                <p class="fw-bold p-3" >Penjelasan Singkat</p>
                <p style="text-align: justify" class="p-3 pt-0">
                    Aplikasi SPK (Sistem Pendukung Keputusan) Rekomendasi menu makanan merupakan sebuah aplikasi yang dirancang untuk memberikan rekomendasi menu makanan yang sesuai bagi pengguna. Aplikasi ini menggunakan metode SAW (Simple Additive Weighting) dalam proses pengambilan keputusan. Metode SAW adalah salah satu metode yang digunakan dalam SPK untuk memberikan bobot pada setiap kriteria yang digunakan dalam pengambilan keputusan.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
