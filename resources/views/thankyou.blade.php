@extends('layouts.app')

@section('title', 'Thank You')

@section('content')

    <!-- top Section -->
    <nav class="navbar top-bar primary-text py-3">
        <div class="container justify-content-end">
            <a href="#">ID</a>
            <span style='font-size:15px;'>&#9474;</span>
            <a href="#">EN</a>
        </div>
    </nav>
    <!-- Nav Section -->
    <nav class="navbar nav-bar py-3">
        <div class="container justify-content-start">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-helios.png') }}" alt="Helios Logo">
            </a>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-sangfor.png') }}" alt="sangfor Logo">
            </a>
        </div>
    </nav>
    <!-- thank you Section -->
    <div class="thankyou bg-image p-5" style="background-image: url({{ asset('images/bg-form.png') }})">
        <div class="container text-center mt-5">
            <img class="img-fluid" src="{{ asset('images/thank-you.svg') }}" alt="thankyou">
            <h1 class="secondary-text pt-5">Thank You for Your Interest</h1>
            <p class="ghost-color pb-5">Our team will contact you within 5 working days.</p>
            <button class="btn btn-primary-custom"> 
                <a href="{{ url('/') }}">Back to Homepage</a>
            </button>   
        </div>
    </div>
        <!-- Footer Section -->
        <footer class="primary-text py-5">
            <div class="container-fluid px-5">
                <div class="d-flex  justify-content-md-between align-items-center justify-content-sm-center">
                    <!-- Left Section -->
                    <div class="left-section">
                        <h3 class="text-white mb-5">PT. Helios Informatika Nusantara</h3>
                        <p class="text-white mb-5">
                            Centennial Tower, 12th Floor,<br>
                            Jl. Jendral Gatot Subroto<br>
                            No. Kav 24-25, Jakarta<br>
                            12930 Indonesia
                        </p>
                        <p class="text-white mb-5">
                            <span>Phone:</span> +62 21 8062 2220 <br>
                            <span>Email:</span> tencent@helios.id
                        </p>
                        <div class="social-icons d-flex justify-content-md-start justify-content-sm-center">
                            <a href="https://www.instagram.com" target="_blank" class="me-3">
                                <img src="{{ asset('images/footer-facebook.svg') }}" alt="Facebook" class="img-fluid">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="me-3">
                                <img src="{{ asset('images/footer-ig.svg') }}" alt="Instagram" class="img-fluid">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="me-3">
                                <img src="{{ asset('images/footer-Twitter.svg') }}" alt="Twitter" class="img-fluid">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="me-3">
                                <img src="{{ asset('images/footer-Youtube.svg') }}" alt="YouTube" class="img-fluid">
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="me-3">
                                <img src="{{ asset('images/footer-Linkedin.svg') }}" alt="LinkedIn" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- Right Section -->
                    <div class="right-section">
                        <img class="" src="{{ asset('images/footer-worldmap.svg') }}" alt="World Map">
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-bottom text-center py-4 primary-text">
            <p class="text-white mb-0">© 2023 - PT. Helios Informatika Nusantara - All Rights Reserved</p>
        </div>

@endsection
