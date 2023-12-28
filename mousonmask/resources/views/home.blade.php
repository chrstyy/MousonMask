<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Moul?query=moul">
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.0/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>
    <header id="main-header">
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home" class="nav-link active">HOME</a>
            <a href="menu">MENU</a>
            <a href="about">ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <a href="#order-section" id="order">ORDER YOUR FOOD</a></div>
            <a href="#account-section" id="myAccount">My Account</a></div>
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
            const header = document.getElementById('main-header');
            const homeLink = document.querySelector('.nav-link');

            homeLink.addEventListener('click', function (e) {
                e.preventDefault();

                // Toggle class 'hidden' on the header
                header.classList.toggle('hidden');

                // Scroll to the home section (assuming the first section has id 'home-section')
                document.getElementById('home-section').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>

