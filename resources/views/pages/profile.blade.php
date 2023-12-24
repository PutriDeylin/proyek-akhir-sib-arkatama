@extends('layouts.main')

@section('konten')

<style>
     .card:hover {
        transition: transform 0.3s ease;
        transform: translateY(-10px);
    }

    .carousel-control-prev,
    .carousel-control-next {
        color: black; 
        margin-top: -100px; 
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
        border-radius: 10px; 
    }

</style>

   <!-- Carousel -->
   <br>
<div class="row">
    <div class="col-12">
        <div id="welcomeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1 class="text-center" style="font-size: 38px;">Selamat Datang di Toko Kami</h1>
                    <p class="text-center" style="font-size: 18px;">Temukan produk luar biasa dan nikmati pengalaman belanja online yang istimewa bersama kami.</p>
                </div>
                <div class="carousel-item">
                    <h1 class="text-center" style="font-size: 38px;">Toko yang Memahami Kebutuhan Anda</h1>
                    <p class="text-center" style="font-size: 18px;">Kualitas terbaik, harga terjangkau, pilihan lengkap untuk gaya hidup anda.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 text-center">
        <button class="carousel-control-prev" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually"></span>
        </button>
    </div>
</div>
<br>
    
    <!-- Category Buttons -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-right">
                <div class="col-12 text-right">
                    <button type="button" class="btn btn-outline-primary mx-2 active">All</button>
                    <button type="button" class="btn btn-outline-primary mx-2">Sport</button>
                    <button type="button" class="btn btn-outline-primary mx-2">Daily</button>
                    <button type="button" class="btn btn-outline-primary mx-2">Accessories</button>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- Product Cards -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/1.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu New Balance</h5>
                            <p class="card-text">Tersedia ukuran 36, 37, 38 dan 39</p>
                            <p class="card-text"><strong>Rp. 300.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/2.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu Rebook</h5>
                            <p class="card-text">Tersedia ukuran 36, 37, 38 dan 39</p>
                            <p class="card-text"><strong>Rp. 200.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/3.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu Nike</h5>
                            <p class="card-text">Tersedia ukuran 36, 37, 38 dan 39</p>
                            <p class="card-text"><strong>Rp. 350.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/4.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Kalung mas</h5>
                            <p class="card-text">Tersedia ukuran 35, 40 dan 45</p>
                            <p class="card-text"><strong>Rp. 200.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
               
        <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/7.jpeg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sunscreen Azarine</h5>
                            <p class="card-text">Tersedia oily, dry, acne dan sensitif.</p>
                            <p class="card-text"><strong>Rp. 33.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/8.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Facial Wash Wardah</h5>
                            <p class="card-text">Tersedia oil, smooth dan cooling.</p>
                            <p class="card-text"><strong>Rp. 25.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/5.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Parfum Evangeline</h5>
                            <p class="card-text">Tersedia semua varian sakura</p>
                            <p class="card-text"><strong>Rp. 29.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img src="{{ asset('gambar/6.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Kacamata</h5>
                            <p class="card-text">Tersedia warna hitam, dan bening</p>
                            <p class="card-text"><strong>Rp. 30.000</strong></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-dark" style="margin-left: 5px;">
                            <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Address and Social Media -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row justify-content-center mt-5">
                            <!-- Address -->
                            <div class="col-12 text-center">
                                <p style="font-size: 16px;">
                                    <i class="fas fa-map-marker-alt"></i> Jalan Braga No. 123, Kota Bandung
                                </p>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <!-- Phone Number -->
                            <div class="col-12 text-center">
                                <p style="font-size: 16px;">
                                    <i class="fas fa-phone"></i> +62 123 4567 890
                                </p>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-5 mt-3">
                            <!-- Social Media Links -->
                            <div class="col-12 text-center">
                                <a href="#" class="btn btn-outline-dark mx-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-dark mx-2">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-outline-dark mx-2">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-dark mx-2">
                                    <i class="far fa-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-outline-dark mx-2">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
@endsection