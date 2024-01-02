<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/about.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
    <title>Welcome to Catije Restaurant</title>
    <style>
        body {
            margin: 0;
            background-color: #BAE8DA;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .welcome-container {
            display: flex;
            align-items: center;
            height: 70vh;
        }

        .welcome-content {
            text-align: left;
            padding: 50px;
            font-size: 30px;

        }

        .image-container {
            flex: 1;
            padding: 20px;
        }

        #welcomeImage {
            width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: changeImage 3s infinite; /* Change image every 5 seconds */
        }

        @keyframes changeImage {
            25%, 75% {
                opacity: 0;
            }
            10%, 90% {
                opacity: 1;
            }
        }

        .get-started-button {
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="welcome-container">
        <div class="image-container">
            <img src="images/welcome1.jpg" alt="Welcome Image" id="welcomeImage">
        </div>
        <div class="welcome-content">
            <h2>Welcome to Catije Restaurant</h2>
            <p>Experience the finest culinary delights in a warm and inviting atmosphere.</p>
            <a href="login" class="get-started-button">Get started</a>
        </div>
    </div>

    <script>
        const imageUrls = [
            'images/banner1.png',
            'images/banner2.png',
            'images/banner3.png',
            'images/banner4.png',
            'images/banner5.png'
        ];

        let currentIndex = 0;
        const welcomeImage = document.getElementById('welcomeImage');

        function changeImage() {
            welcomeImage.src = imageUrls[currentIndex];
            currentIndex = (currentIndex + 1) % imageUrls.length;
        }

        // Change image every 5 seconds
        setInterval(changeImage, 3000);
    </script>
</body>

</html>
