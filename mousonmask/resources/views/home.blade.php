<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Moul?query=moul">
</head>

<body>
    <header id="main-header">
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home" class="menu-link active">HOME</a>
            <a href="menu" class="menu-link">MENU</a>
            <a href="about" class="menu-link">ABOUT US</a>
            <a href="contact" class="menu-link">CONTACT US</a>
            <a href="order" id="order">ORDER YOUR FOOD</a></div>
            <a href="myacc" id="myAccount">My Account</a></div>
        </nav>
    </header>
    <section id="home" class="hero-section">
        <div class="text-container">
            <div class="text">EAT</div>
            <div class="text">DRINK</div>
            <div class="text">DANCE</div>
        </div>
        <div class="overlay"></div>
    </section>

     <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi Smooth Scroll
            const scroll = new SmoothScroll('a[href*="#"]', {
                speed: 800,
                speedAsDuration: true,
            });

            // Ambil semua link menu
            const menuLinks = document.querySelectorAll('.menu-link');

            // Tambahkan event listener pada setiap link menu
            menuLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    // Hapus kelas 'active' dari semua link menu
                    menuLinks.forEach(otherLink => {
                        otherLink.classList.remove('active');
                    });

                    // Tambahkan kelas 'active' pada link yang dipencet
                    this.classList.add('active');

                    // Tentukan halaman yang sedang aktif
                    const currentPage = window.location.pathname.split('/').pop();

                    // Tambahkan kelas 'active' pada link menu yang sesuai dengan halaman aktif
                    menuLinks.forEach(link => {
                        const linkPage = link.getAttribute('href').split('/').pop();
                        if (linkPage === currentPage) {
                            link.classList.add('active');
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
