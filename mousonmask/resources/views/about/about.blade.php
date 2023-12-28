<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <title>About Us - Catije Bar & Restaurant</title>
</head>
<style>
    
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #BAE8DA;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.5);
    z-index: 1;
    color: #000000;
}

.logo img {
    height: 80px;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav a {
    color: black;
    text-decoration: none;
    align-items: center;
    margin-right: 80px; /*jarak antar nama nav*/
    font-family: 'Moul', regular;
    font-size: 25px;
    font-weight: bold;
}

nav .active {
    color: red;
}

.order {
    display: inline-block; /* Membuat kotak sesuai dengan besarnya teks */
    background: #DFD7D7;
    mix-blend-mode: multiply;
    line-height: normal;
}

.myAccount {
    margin-left: auto;
    margin-bottom: 50px;
}
.myAccount a {
    color: black;
    text-decoration: none;
}

.about-container {
    display: flex;
}

.about-content {
    width: 45%;
    text-align: center;
    padding: 40px;
    margin-left: 45px;            
}

.about-content h2 {
    font-size: 40px;
    margin-bottom: 20px;
    font-family: Moul;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.about-content p {
    font-size: 18px;
    font-family: 'Book Antiqua', sans-serif ;
    line-height: 1.6;
    
}

.image-container {
    width: 50%;
    position: fixed;
    right: 0;
    top: 0;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
    z-index: 1; 
}

.background-image {
    width: 570px;
    height: 745px;
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0.5;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: rgba(47, 124, 103, 0.57);
    color: #fff;
    z-index: 2; 
}

footer a#link {
    color: #fff;
    text-decoration: none;
    margin: 0 20px;
}

footer a#link:hover {
    color: #00f;
}

footer a img {
    width: 25px;
    height: auto;
    margin: 0 20px;
}

</style>
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
            <div class="order"><a href="#order-section">ORDER YOUR FOOD</a></div>
            <div class="myAccount"><a href="#account-section">My Account</a></div>
        </nav>
    </header>

    <div class="about-container">
        <div class="about-content">
            <h2>About Us</h2>
            <p>Welcome to Catije Bar and Restaurant where we take you to unforgottable culinary journey. </p>
            <p>Created with the utmost dedication and creative touch of Chef Jasmine Rodriguez, Catije delivers a dining experience that combines deliciousness and indulgence in every inch of our space.</p>
            <p>Our philosophy carries the concept that food and drinks are not just nutrition, but art that creates memories. Our dishes, carefully prepared from fresh ingredients, provide an alluring harmony of flavours.</p>
            <p>In an atmosphere filled with trendy decorations and a warm atmosphere, Catije is not just a restaurant, but a destination where meeting friends, romantic moments or relaxing evenings becomes more special.
                Charming live music and our selection of specialty cocktails add a touch of authenticity to your visit. Our team, passionate and committed, is here to create a friendly and relaxed atmosphere for every guest.</p>
            <p>We are in the city center, ready to welcome you with a smile and deliciousness. Catije Bar & Restaurant is not just a place to eat, it's a celebration of life in every inch of our space.</p>
            <p>Come join us, celebrating the beauty of the food and the warmth of the atmosphere at Catije, where every visit is an unforgettable culinary journey. </p>
        </div>
        <div class="image-container">
            <img src="images/logo.png" alt="Static Image" class="background-image">
        </div>
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

</html>
