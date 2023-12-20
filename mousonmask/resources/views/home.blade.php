<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/catije.png') }}" alt="Tulisan Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="dropdown">
                    <a href="#">Menu</a>
                    <div class="dropdown-content">
                        <a href="#">Appetizers</a>
                        <a href="#">Main Course</a>
                        <a href="#">Desserts</a>
                    </div>
                </li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Order Your Food</a></li>
            </ul>
        </nav>
        <div class="my-account">
            <a href="#">My Account</a>
        </div>
    </header>

    <section class="hero-section">
        <div class="overlay"></div>
        <div class="center-box">
            <h1>Eat. Dance. Drink.</h1>
        </div>
    </section>

    <!-- Your other content goes here -->

</body>
</html>
