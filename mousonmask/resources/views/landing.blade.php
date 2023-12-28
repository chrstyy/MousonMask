<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/catije.png') }}" alt="Tulisan Logo">
        </div>
        <div class="menu">
            <a href="#home-section" class="menu-link">HOME</a>
            <a href="#about-section" class="menu-link">ABOUT US</a>
            <a href="#menu-section" class="menu-link">MENU</a>
            <a href="#contact-section" class="menu-link">CONTACT US</a>
            <div class="order"><a href="#order-section" class="menu-link">ORDER YOUR FOOD</a></div>
            <div class="my-account"><a href="#account-section" class="menu-link">My Account</a></div>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
