@extends('layouts.app')
@section('title', 'Home')
@section('content')

<<<<<<< Updated upstream
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Moul?query=moul">
    <!-- Tambahkan library Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.0/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
=======
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Moul?query=moul">
        <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.0/dist/smooth-scroll.polyfills.min.js"></script>
    </head>

>>>>>>> Stashed changes
    <header>
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home" class="nav-link active">HOME</a>
            <a href="#menu-section">MENU</a>
            <a href="about" >ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <div class="order"><a href="#order-section">ORDER YOUR FOOD</a></div>
            <div class="myAccount"><a href="#account-section">My Account</a></div>
        </nav>
    </header>

    <section id="home-section" class="hero-section">
        <div class="text-container">
            <div class="text">EAT</div>
            <div class="text">DRINK</div>
            <div class="text">DANCE</div>
        </div>
        <div class="overlay"></div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('section');
            const menuLinks = document.querySelectorAll('.menu-link');

            menuLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);

                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add event listener for scrolling back to the header
            window.addEventListener('scroll', function () {
                const scrollTop = window.scrollY;

                if (scrollTop === 0) {
                    menuLinks.forEach(link => {
                        link.classList.remove('active');
                    });
                    menuLinks[0].classList.add('active'); // Assuming the first link is Home
                }
            });
        });
    </script>
<<<<<<< Updated upstream

</body>
</html>
=======
@endsection
>>>>>>> Stashed changes
