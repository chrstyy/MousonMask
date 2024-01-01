<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Catije Bar & Restaurant</title>
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
        <h2>Privacy Policy</h2>
        <p>Your privacy is important to us. This Privacy Policy outlines the types of personal information that is received and collected and how it is used:</p>
        <ol>
            <li>We may collect personal information such as name, contact information, and demographic information for internal record keeping.</li>
            <li>We use this information to improve our products and services, and we may periodically send promotional emails about new products, special offers, or other information.</li>
            <li>We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure, we have put in place suitable physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</li>
        </ol>
        <p>For the complete Privacy Policy, please contact us or visit our physical location.</p>
        <button id="backToAbout">Back to About Us</button>  
    </div>
    <footer>
        <a href="https://www.facebook.com/" target="_blank"><img src="icons/facebookLogo.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="icons/instagramLogo.png" alt="Instagram"></a>
        <a href="https://www.twitter.com/" target="_blank"><img src="icons/twitterLogo.png" alt="Twitter"></a>
        <a href="https://www.google.co.id/maps" target="_blank"><img src="icons/gpsLogo.png" alt="Maps"></a>
        <p>&copy; 2023 Catije Bar & Resto. All rights reserved.</p>
        <p><a id="termsLink" href="terms">Terms & Conditions</a> | <a id="privacyLink" href="privacy">Privacy Policy</a></p>
    </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const backToAboutButton = document.getElementById('backToAbout');

        backToAboutButton.addEventListener('click', function () {
            window.location.href = 'about'; 
        });
    });
</script>
</html>
