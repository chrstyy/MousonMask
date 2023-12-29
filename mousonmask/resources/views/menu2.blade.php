<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <style>
        body {
            margin: 0;
            background-color: #BAE8DA;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .logo img {
            height: 80px;
        }

        nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav a {
            color: black;
            text-decoration: none;
            font-family: 'Moul', regular;
            font-size: 25px;
            font-weight: bold;
            margin: 0 40px;
        }

        nav .active {
            color: red;
        }

        nav a#order {
            display: inline-block;
            background: #DFD7D7;
            mix-blend-mode: multiply;
            line-height: normal;
        }

        nav a#myAccount {
            font-family: 'Moul', regular;
            font-size: 20px;
            font-weight: bold;
            margin-top: -55px;
            margin-right: 5px;
        }

        .menu-container {
            display: flex;
            align-items: flex-start;
            padding: 20px;
        }

        .menu-options {
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .menu-options a {
            display: block;
            color: black;
            text-decoration: none;
            font-family: 'Moul', regular;
            font-size: 25px;
            font-weight: bold;
            margin-right: 50px;
           
        }

        .search {
            display: flex;
            background-color: black;
            color: white;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            
        }

        .search input {
            border: none;
            background: none;
            color: white;
            padding: 0;
            margin: 0;
            font-size: 16px;
        }

        .search img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .menu-list {
            margin-left: 50px;
            display: grid;
            grid-template-columns: repeat(4, 3fr);
            transition: opacity 0.3s ease-in-out;
        }

        .menu-card {
            width: 300px;
            height: auto;
            margin-top:80px;
            margin-bottom: 50px;
            background-color: #000;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            
        }

        .menu-card img {
            width: auto;
            height: 230px;
            border-radius: 50%;
            margin-top: -100px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 20px;
        }

        .menu-card-content {
            color: white;
            margin-left: 40px;
            margin-right: 40px;
            margin-bottom: 10px;
            text-align: center; 
        }

        .menu-card-content h3 {
            font-family: 'Barlow';
        }

        .menu-card-content p {
            margin-top: 10px;
            font-family: 'Barlow';
            font-size: 18px;
        }

        #cart-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 80px;
            height: 80px;
            background-color: #DFD7D7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        #cart-icon img {
            width: 40px;
            height: 40px;
        }
    </style>
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
            <a href="#order-section" id="order">ORDER YOUR FOOD</a></div>
            <a href="#account-section" id="myAccount">My Account</a></div>
        </nav>
    </header>

    <div class="menu-container">
        <div class="menu-options">
            <a href="#" onclick="showMenu('snack')">Snacks</a>
            <a href="#" onclick="showMenu('appetizer')">Appetizer</a>
            <a href="#" onclick="showMenu('alcohol')">Alcohol Drinks</a>
            <a href="#" onclick="showMenu('nonAlcohol')">Non-Alcohol Drinks</a>
            <a href="#" onclick="showMenu('dessert')">Dessert</a>
        </div>
        <div class="search">
            <img src="icons/search.png" alt="Search Icon">
            <input type="text" placeholder="Search...">
        </div>
        
    </div>
    <div class="menu-list" id="menu-list">
            
    </div>
    <div id="cart-icon" onclick="addToCart()">
        <img src="icons/cart-icon.png" alt="Add to Cart Icon">
    </div>

    <script>
        
        function showMenu(category) {
            const menuData = {
                'snack': [
                    { name: 'Torilla with Bolognese and Cheese', price: '$2.99', image: 'https://tse3.mm.bing.net/th?id=OIP.srYCBEeyvxhhycXZfDJ9sQHaE7&pid=Api&P=0&h=180' },
                    { name: 'Fried Wonton with Sour Spicy Sauce', price: '$2.69', image: 'images/bobo.jpg' },
                    { name: 'Potato Sticks with Dipping Sauce', price: '$2.00', image: 'images/meyong.jpg' },
                    { name: 'Popcorn Chicken', price: '$3.00', image: 'images/cabayi.jpg' },
                    { name: 'Spicy Honey Chicken Wings', price: '$3.22', image: 'images/eehem.jpg' },
                    { name: 'Banan Turon with Caramel', price: '$1.69', image: 'images/etete.jpg' },
                    { name: 'Loaded Nachos with Chicken Mayo', price: '$2.35', image: 'images/boi.jpg' },
                    { name: 'Garlic Cheese Bread', price: '$2.10', image: 'images/babha.jpg' }
                ],
                'appetizer': [{ name: 'Torilla with Bolognese and Cheese', price: '$2.99', image: 'https://tse3.mm.bing.net/th?id=OIP.srYCBEeyvxhhycXZfDJ9sQHaE7&pid=Api&P=0&h=180' },
                    { name: 'Fried Wonton with Sour Spicy Sauce', price: '$2.69', image: 'images/bobo.jpg' },
                    { name: 'Potato Sticks with Dipping Sauce', price: '$2.00', image: 'images/meyong.jpg' },
                    { name: 'Popcorn Chicken', price: '$3.00', image: 'images/cabayi.jpg' },
                    { name: 'Spicy Honey Chicken Wings', price: '$3.22', image: 'images/eehem.jpg' },
                    { name: 'Banan Turon with Caramel', price: '$1.69', image: 'images/etete.jpg' },
                    { name: 'Loaded Nachos with Chicken Mayo', price: '$2.35', image: 'images/boi.jpg' },
                    { name: 'Garlic Cheese Bread', price: '$2.10', image: 'images/babha.jpg' }
                ],
                'alcohol': [{ name: 'Torilla with Bolognese and Cheese', price: '$2.99', image: 'https://tse3.mm.bing.net/th?id=OIP.srYCBEeyvxhhycXZfDJ9sQHaE7&pid=Api&P=0&h=180' },
                    { name: 'Fried Wonton with Sour Spicy Sauce', price: '$2.69', image: 'images/bobo.jpg' },
                    { name: 'Potato Sticks with Dipping Sauce', price: '$2.00', image: 'images/meyong.jpg' },
                    { name: 'Popcorn Chicken', price: '$3.00', image: 'images/cabayi.jpg' },
                    { name: 'Spicy Honey Chicken Wings', price: '$3.22', image: 'images/eehem.jpg' },
                    { name: 'Banan Turon with Caramel', price: '$1.69', image: 'images/etete.jpg' },
                    { name: 'Loaded Nachos with Chicken Mayo', price: '$2.35', image: 'images/boi.jpg' },
                    { name: 'Garlic Cheese Bread', price: '$2.10', image: 'images/babha.jpg' }
                ],
                'nonAlcohol': [{ name: 'Torilla with Bolognese and Cheese', price: '$2.99', image: 'https://tse3.mm.bing.net/th?id=OIP.srYCBEeyvxhhycXZfDJ9sQHaE7&pid=Api&P=0&h=180' },
                    { name: 'Fried Wonton with Sour Spicy Sauce', price: '$2.69', image: 'images/bobo.jpg' },
                    { name: 'Potato Sticks with Dipping Sauce', price: '$2.00', image: 'images/meyong.jpg' },
                    { name: 'Popcorn Chicken', price: '$3.00', image: 'images/cabayi.jpg' },
                    { name: 'Spicy Honey Chicken Wings', price: '$3.22', image: 'images/eehem.jpg' },
                    { name: 'Banan Turon with Caramel', price: '$1.69', image: 'images/etete.jpg' },
                    { name: 'Loaded Nachos with Chicken Mayo', price: '$2.35', image: 'images/boi.jpg' },
                    { name: 'Garlic Cheese Bread', price: '$2.10', image: 'images/babha.jpg' }
                ],
                'dessert': [{ name: 'Torilla with Bolognese and Cheese', price: '$2.99', image: 'https://tse3.mm.bing.net/th?id=OIP.srYCBEeyvxhhycXZfDJ9sQHaE7&pid=Api&P=0&h=180' },
                    { name: 'Fried Wonton with Sour Spicy Sauce', price: '$2.69', image: 'images/bobo.jpg' },
                    { name: 'Potato Sticks with Dipping Sauce', price: '$2.00', image: 'images/meyong.jpg' },
                    { name: 'Popcorn Chicken', price: '$3.00', image: 'images/cabayi.jpg' },
                    { name: 'Spicy Honey Chicken Wings', price: '$3.22', image: 'images/eehem.jpg' },
                    { name: 'Banan Turon with Caramel', price: '$1.69', image: 'images/etete.jpg' },
                    { name: 'Loaded Nachos with Chicken Mayo', price: '$2.35', image: 'images/boi.jpg' },
                    { name: 'Garlic Cheese Bread', price: '$2.10', image: 'images/babha.jpg' }
                ]
            };

            const menuList = document.getElementById('menu-list');
        menuList.innerHTML = '';

        const searchInput = document.querySelector('.search input');
        const searchTerm = searchInput.value.toLowerCase();

        menuData[category].forEach(item => {
            // Check if the item name contains the search term
            if (item.name.toLowerCase().includes(searchTerm) || searchTerm === '') {
                const card = document.createElement('div');
                card.classList.add('menu-card');

                const image = document.createElement('img');
                image.src = item.image;
                card.appendChild(image);

                const content = document.createElement('div');
                content.classList.add('menu-card-content');

                const itemName = document.createElement('h3');
                itemName.textContent = item.name;
                content.appendChild(itemName);

                const itemPrice = document.createElement('p');
                itemPrice.textContent = `Price : ${item.price}`;
                content.appendChild(itemPrice);

                card.appendChild(content);

                menuList.appendChild(card);
            }
        });
    }

    // Add an event listener to the search input
    document.querySelector('.search input').addEventListener('input', function () {
        const category = 'snack'; // Set the default category, you can change it as needed
        showMenu(category);
    });
</script>
</body>
</html>