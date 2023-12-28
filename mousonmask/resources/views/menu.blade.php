<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - CATIJE</title>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

</head>

<body>

    <header>
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home">HOME</a>
            <a href="menu" class="nav-link active">MENU</a>
            <a href="about">ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <a href="#order-section" id="order">ORDER YOUR FOOD</a>
            <a href="#account-section" id="myAccount">My Account</a>
        </nav>
    </header>

    <section class="menu-categories">
        <span data-category="appetizer">Appetizer</span>
        <span data-category="snacks">Snacks</span>
        <span data-category="alcohol-drink">Alcohol Drink</span>
        <span data-category="non-alcohol-drink">Non-Alcohol Drink</span>
        <span data-category="dessert">Dessert</span>
        <div class="line"></div>
    </section>

    <div class="search-bar">
        <img src="{{ asset('images/search.png') }}" alt="Search Icon">
        <input type="text" placeholder="Search for food or drinks">
    </div>

    <section id="appetizer" class="menu-section">
       <div class="menu-container">
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="{{ asset('images/tortilla.png') }}" alt="Tortilla">
                </div>
                <div class="item-description">
                    Torilla with Bolognese and Cheese
                    <p>$ 2.99</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="{{ asset('images/wonton.jpg') }}" alt="Wonton">
                </div>
                <div class="item-description">
                    Fried Wonton with Sour Spicy Sauce
                    <p>$ 2.69</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="{{ asset('images/potatosticks.jpg') }}" alt="Potato">
                </div>
                <div class="item-description">
                    Potato Sticks with Dipping Sauce
                    <p>$ 2.00</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://www.cookingclassy.com/wp-content/uploads/2019/01/chicken-nuggets-7.jpg" alt="Popcorn">
                </div>
                <div class="item-description">
                    Popcorn Chicken
                    <p>$ 3.00</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://heartbeetkitchen.com/foodblog/wp-content/uploads/2018/01/crispy-gluten-free-chicken-wings-a.jpg" alt="Spicy Honey">
                </div>
                <div class="item-description">
                    Spicy Honey Chicken Wings
                    <p>$ 3.22</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://www.thelittleepicurean.com/wp-content/uploads/2018/02/turon-filipino-fried-banana-roll-0.jpg" alt="Banana">
                </div>
                <div class="item-description">
                    Banana Turon with  Caramel
                    <p>$ 1.69</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://www.healthymummy.com/wp-content/uploads/2017/03/Easy-Chicken-Nachos.jpg" alt="Nachos">
                </div>
                <div class="item-description">
                    Loaded Nachos with  Chicken Mayo
                    <p>$ 2.35</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://i.pinimg.com/originals/0e/c9/dc/0ec9dc764fd953371dabcd7f90843f83.jpg" alt="Garlic">
                </div>
                <div class="item-description">
                    Garlic Cheese Bread
                    <p>$ 2.10</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Add sections for other categories -->

    <div class="cart-popup">
        <img src="cart-icon.png" alt="Shopping Cart">
        <span class="cart-count">0</span>
    </div>

    <script>
        function scrollToCategory(categoryId) {
            const targetSection = document.getElementById(categoryId);

            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartPopup = document.querySelector('.cart-popup');
            const cartCount = document.querySelector('.cart-count');
            const menuCategories = document.querySelectorAll('.menu-categories span');

            let itemCount = 0;

            menuCategories.forEach(category => {
                category.addEventListener('click', function () {
                    const categoryId = this.getAttribute('data-category');
                    scrollToCategory(categoryId);
                });
            });
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function () {
                    itemCount++;
                    cartCount.textContent = itemCount;
                });
            });

            cartPopup.addEventListener('click', function () {
                // Redirect to the cart/order page
                window.location.href = "order.blade.php";
            });
        });
    </script>

</body>

</html>
