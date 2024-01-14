<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Catije Bar & Restaurant</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
</head>

<body>
<header>
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="{{route('home')}}">HOME</a>
            <a href="menu">MENU</a>
            <a href="about">ABOUT US</a>
            <a href="contact"  class="nav-link active">CONTACT US</a>
            <a href="order" id="order">ORDER YOUR FOOD</a></div>
            <a href="myacc" id="myAccount">My Account</a></div>
        </nav>
    </header>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>Feel free to contact us for any inquiries or feedback :</p>
            <p>catije@gmail.com</p>
            <p>+123 456 789</p>
            <p>123 Restaurant Street, Catyvilleje</p>
        </div>

        <div class="contact-form">
            <h4>Send Us a Message</h4>
            <form action="#" method="post">
                <label for="name">Your Name :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
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
        function showThankYou() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;

            if (name.trim() === '' || email.trim() === '') {
                alert('Please fill your name, email and your message.');
            } else {
                document.getElementById('form-container').style.display = 'none';
                document.getElementById('confirmation-message').innerText = 'Thank You for Your Feedback! ^.^';
            }
        }
    </script>

</html>
