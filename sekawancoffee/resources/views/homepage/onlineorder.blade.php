@extends('layouts.template')
@section('content')
<div class="content">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Online Order</h1>
            <h1 class="text-center">Sekawan Coffee & Roastery</h1><br>
        </div>
    </div>
    <style type="text/css">
            h1 {
                font-size: 40px;
                font-family: Cambria,"Times New Roman",serif; }
    </style>
    <div class="container">
        <div class="row mt-2">
            <!-- produk pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                    <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a >
                    <div class="card-body">
                        <a  href="https://wa.link/e0hxor" target="_blank" role="button" class="text-decoration-none">
                            <p class="card-text">
                            Coklat Ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink2.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Vanilla
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Mactha ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 12.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                    <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a >
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Coklat Ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink2.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Vanilla
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Mactha ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 12.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                    <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a >
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Coklat Ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink2.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Vanilla
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Mactha ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 12.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                    <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a >
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Coklat Ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink2.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Vanilla
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a>
                        <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="https://wa.link/e0hxor">
                            <p class="card-text">
                            Mactha ice
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 12.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- kontak sekawan -->
    <div class="container-fluid text-center py-4 border-top mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center text-sm-start mb-3">
                    <a href="/">
                        <img
                            width="150"
                            style="height: 150px; object-fit: cover; border-radius: 10px;"
                            src="{{ asset('images/logo.jpeg') }}"
                            alt=""
                        />
                    </a>
                    <h4 class="title-alt mt-4">
                    <strong>
                        Sekawan Coffee & Roastery
                    </strong>
                    </h4>
                    <h3>
                        Coffee House dengan konsep rumahan
                        yang menghadirkan kehangatan kekerabatan
                        antar sesama.
                    </h3>
                    <h5>
                        <strong>
                            @sekawancoffeebwi
                        </strong>
                    </h5>
                    <style type="text/css">
                        h4 {
                            font-size: 19px;
                            font-family: Cambria,"Times New Roman",serif; }
                        h5 {
                            font-size: 18px;
                            font-family: Cambria,"Times New Roman",serif; }
                        h3 {
                            font-size: 16px;
                            font-family: Cambria,"Times New Roman",serif; }
                    </style>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"><strong> Tools </strong></span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="/" class="title">Home</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="/history" class="title">History</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="/onlineorder" class="title">Order</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"><strong> Service</strong></span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> Dine in </span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> Take a way </span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> GoFood </span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> Joker </span>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"><strong> Contact us </strong></span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> +62 812-3553-6215</span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title">sekawancoffebwi@gmail.com</span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title">Sukorejo,Belakang KUA Srono</span>
                        </li>`
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection