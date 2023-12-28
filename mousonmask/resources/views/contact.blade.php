<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Catije Bar & Restaurant</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #BAE8DA;
        }

        header {
            background-color: rgba(255, 255, 255, 0.5);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .logo img {
            width: auto;
            height: 60px;
            margin-left: 20px;
            margin-top: 5px;
        }

        nav {
            margin-right: 20px;
        }

        nav a {
            margin: 0 40px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 14px;
            transition: color 0.3s; /* Efek transisi warna */
        }

        nav a:hover {
            color: maroon; /* Warna saat kursor diarahkan */
        }

        .contact-container {
            display: flex;
            justify-content: space-around;
            padding: 80px 0;
            color: #000;
            text-align: center;
            text-shadow: 2px 2px 4px #ffffff;
        }

        .contact h2 {
            color: black;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .contact-form {
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            width: 45%;
        }

        .contact-info {
            width: 45%;
        }

        .contact-form h4 {
            color: black;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 10px;

        }

        .contact-form textarea {
            height: 150px;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        .contact-info p {
            color: black;
            margin-bottom: 10px;
        }

        .contact-form button:hover {
            background-color: #7c7c7c;
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
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home">Home</a>
            <a href="about">About Us</a>
            <a href="menu">Menu</a>
            <a href="contact">Contact Us</a>
            <a href="order">Order Your Food</a>
            <a href="myacc">My Account</a>
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
        <p><a id="link" href="terms">Terms & Conditions</a> | <a id="link" href="privacy">Privacy Policy</a></p>
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
