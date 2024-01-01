<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions - Catije Bar & Restaurant</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home">HOME</a>
            <a href="menu">MENU</a>
            <a href="about" class="nav-link active">ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <a href="order" id="order">ORDER YOUR FOOD</a></div>
            <a href="myacc" id="myAccount">My Account</a></div>
        </nav>
    </header>

    <div class="content-container">
        <h2>Terms and Conditions</h2>

        <p>Welcome to Catije Bar & Restaurant. By accessing and using our website, you agree to comply with and be bound by the following terms and conditions:</p>
        <ol>
            <li>Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.</li>
            <li>Your use of any information or materials on this website is entirely at your own risk.</li>
            <li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics.</li>
        </ol>
        <p>For the complete Terms and Conditions, please contact us or visit our physical location.</p>
        <button id="backToAbout">Back to About Us</button>  
    </div>
    <footer>
        <a href="https://www.facebook.com/" target="_blank"><img src="icons/facebookLogo.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="icons/instagramLogo.png" alt="Instagram"></a>
        <a href="https://www.twitter.com/" target="_blank"><img src="icons/twitterLogo.png" alt="Twitter"></a>
        <a href="https://www.google.co.id/maps" target="_blank"><img src="icons/gpsLogo.png" alt="Maps"></a>
        <p>&copy; 2023 Catije Bar & Resto. All rights reserved.</p>
        <p><a id="link" href="terms">Terms & Conditions</a> | <a id="link" href="privacy">Privacy Policy</a></p>
    </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const backToAboutButton = document.getElementById('backToAbout');

        backToAboutButton.addEventListener('click', function () {
            window.location.href = 'about'; // Ganti dengan URL halaman About Us
        });
    });
</script>
</html>
