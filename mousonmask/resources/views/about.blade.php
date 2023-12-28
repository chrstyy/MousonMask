@extends('layouts.app')
@section('title', 'About Us')
@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Moul?query=moul">
        <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.0/dist/smooth-scroll.polyfills.min.js"></script>
    </head>

    <header>
        <div class="logo">
            <img src="{{ asset('images/catije.png') }}" alt="Tulisan Logo">
        </div>
        <div class="menu">
            <a href="#home-section" class="menu-link active">HOME</a>
            <a href="#about-section" class="menu-link">ABOUT US</a>
            <a href="#menu-section" class="menu-link">MENU</a>
            <a href="#contact-section" class="menu-link">CONTACT US</a>
            <div class="order"><a href="#order-section" class="menu-link">ORDER YOUR FOOD</a></div>
            <div class="my-account"><a href="#account-section" class="menu-link">My Account</a></div>
        </div>
    </header>

    <section id="about-section">
        <p>Hi Karaayyy</p>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const scroll = new SmoothScroll('a[href*="#"]', {
                speed: 800,
                speedAsDuration: true,
            });

            function scrollToSection(sectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }

            const menuLinks = document.querySelectorAll('.menu-link');

            menuLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    menuLinks.forEach(otherLink => {
                        otherLink.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
        });
    </script>
@endsection
