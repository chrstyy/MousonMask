<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Moul?query=moul">
    <!-- Tambahkan library Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.0/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>

    <header>
        <div class="logo">
            <img src="{{ asset('images/catije.png') }}" alt="Tulisan Logo">
        </div>
        <div class="menu">
            <a href="#home-section" class="menu-link active">HOME</a>
            <a href="#about-section" class="menu-link">ABOUT US</a>
            <a href="#menu-section" class="menu-link">MENU</a>
            <a href="#contact-section" class="menu-link">CONTACT US</a>
            <div class="order"><a href="#order-section" class="menu-link">ORDER YOUR FOOD</a></div>
            <div class="my-account"><a href="#account-section" class="menu-link">My Account</a></div>
        </div>
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
