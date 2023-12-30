<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Catije</title>
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

        .menu-options a.active {
            color: red;
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
            font-size: 18px;
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
            transition: transform 0.5s ease; /* Tambahkan transisi untuk efek slide */
        }

        .menu-list.slide-in {
            transform: translateX(0); /* Atur transformasi ke posisi awal */
        }

        .menu-list.slide-out {
            transform: translateX(-100%); /* Atur transformasi ke posisi menyembunyikan */
        }


        .menu-card {
            width: 300px;
            height: 350px;
            margin-top: 100px;
            margin-bottom: 50px;
            background-color: #000;
            border-radius: 20px;
            flex-direction: column;
            
        }

        .menu-card:hover {
            transform: scale(1.05);
        }

        .menu-card:hover {
            transform: scale(1.05);
        }

        .menu-card img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-top: -100px;
            margin-left: 50px;
            margin-right: 45px;
            margin-bottom: 10px;
            object-fit: cover;
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
            font-size: 20px;
        }

        .menu-card-content p {
            margin-top: 10px;
            font-family: 'Barlow';
            font-size: 20px;
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

        .quantity-container {
            display: flex;
            align-items: center;
            margin-top: 10px; 
            justify-content: center;
        }

        .quantity-container button {
            background-color: #DFD7D7;
            border: none;
            cursor: pointer;
            margin: 0 5px; 
        }

        .menu-card-content button {
            font-family: 'Moul', regular;
            background-color: #DFD7D7;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            display: inline-block;
            font-size: 18px;
            border-radius: 10px;
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
            <a href="order" id="order">ORDER YOUR FOOD</a></div>
            <a href="myacc" id="myAccount">My Account</a></div>
        </nav>
    </header>

    <div class="menu-container">
        <div class="menu-options" id="menu-options">
            <a href="#" onclick="showMenu('appetizer')">Appetizer</a>
            <a href="#" onclick="showMenu('snack')">Snacks</a>
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
        let selectedItems = [];
        function showMenu(category) {
            const menuData = {
                'snack': [
                    { name: 'Torilla with Bolognese and Cheese', price: '$2.99', image: 'https://tse3.mm.bing.net/th?id=OIP.CiuAgf6j3D1taLtQ3EzN9AHaFj&pid=Api&P=0&h=180' },
                    { name: 'Fried Wonton with Sour Spicy Sauce', price: '$2.69', image: 'https://cravingsjournal.com/wp-content/uploads/2020/06/fried-wontons-1.jpg' },
                    { name: 'Potato Sticks with Dipping Sauce', price: '$2.00', image: 'https://tse4.mm.bing.net/th?id=OIP.G0-VSkKoFW5BHHlmbWBKBwHaFP&pid=Api&P=0&h=180'},
                    { name: 'Popcorn Chicken', price: '$3.00', image: 'https://tse4.mm.bing.net/th?id=OIP.yi3uQb4_pdGvgoLxT9vpjAHaHa&pid=Api&P=0&h=180' },
                    { name: 'Spicy Honey Chicken Wings', price: '$3.22', image: 'https://tse2.mm.bing.net/th?id=OIP.XmbsOTbH3m-zM6Rpx80HgAHaHa&pid=Api&P=0&h=180' },
                    { name: 'Banana Turon with Caramel', price: '$1.69', image: 'https://tse2.mm.bing.net/th?id=OIP.c6VRUTOCpyAC_6coVwn-DwHaHa&pid=Api&P=0&h=180' },
                    { name: 'Loaded Nachos with Chicken Mayo', price: '$2.35', image: 'https://tse1.mm.bing.net/th?id=OIP.p5z4FtE-LH__3jXheaCV6QHaH5&pid=Api&P=0&h=180' },
                    { name: 'Garlic Cheese Bread', price: '$2.10', image: 'https://tse3.mm.bing.net/th?id=OIP.DXIj4r5NEb72P0smgNGMigHaFF&pid=Api&P=0&h=180' }
                ],
                'appetizer': [
                    { name: 'Artisan Cheese Plate', price: '$15.00', image: 'https://tse3.mm.bing.net/th?id=OIP.yj0lsGkIN5QtZi3Jo9rc7wHaGR&pid=Api&P=0&h=180' },
                    { name: 'Bruschetta', price: '$8.00', image: 'https://tse4.mm.bing.net/th?id=OIP.4-aDQrUwyM6B6vxTZrXAJAHaEz&pid=Api&P=0&h=180' },
                    { name: 'Caesar Salad', price: '$5.12', image: 'https://tse4.mm.bing.net/th?id=OIP.QmHw_37gNHByVUGMekg3awHaHa&pid=Api&P=0&h=180g' },
                    { name: 'Shrimp Cocktail', price: '$10.00', image: 'https://tse2.mm.bing.net/th?id=OIP.R3QKd3XafMBUMH_tktFQEgHaE8&pid=Api&P=0&h=180' },
                    { name: 'Caprese Skewers', price: '$7.50', image: 'https://tse1.mm.bing.net/th?id=OIP.7cIwTBHkkYJt2JSFHib3UAHaHa&pid=Api&P=0&h=180' },
                    { name: 'Spinach and Artichoke Dip', price: '$9.00', image: 'https://tse4.mm.bing.net/th?id=OIP._C5NTz1y153qrsJmiDeKNgHaFC&pid=Api&P=0&h=180' },
                    { name: 'Stuffed Mushrooms', price: '$6.35', image: 'https://tse3.mm.bing.net/th?id=OIP.8CyOKwbqSKXZwsPSPLO6EgHaE8&pid=Api&P=0&h=180g' },
                    { name: 'Deviled Eggs', price: '$7.10', image: 'https://tse4.mm.bing.net/th?id=OIP.QUZ0--hojQe1OV40SJlBDgHaE8&pid=Api&P=0&h=180' }
                ],
                'alcohol': [
                    { name: 'Martini', price: '$12.00', image: 'https://tse1.mm.bing.net/th?id=OIP.3ZV0fYQZbEmRY2y8yehM1wHaHa&pid=Api&P=0&h=180' },
                    { name: 'Margarita', price: '$8.50', image: 'https://tse3.mm.bing.net/th?id=OIP.Zljihe1OVdpMs8JO5C0C_AHaE8&pid=Api&P=0&h=180' },
                    { name: 'Old Fashioned', price: '$12.50', image: 'https://tse1.mm.bing.net/th?id=OIP.STfR97mTboXVcMYRVhHMfAHaHa&pid=Api&P=0&h=180' },
                    { name: 'Mojito', price: '$11.45', image: 'https://tse2.mm.bing.net/th?id=OIP._Zeuj-mSku2-dVCgVaEDMAHaHa&pid=Api&P=0&h=180' },
                    { name: 'Craft Beer (pint)', price: '$6.50', image: 'https://tse2.mm.bing.net/th?id=OIP.lg2YFtzLZx8pz8Jx0q6qsAHaEm&pid=Api&P=0&h=180' },
                    { name: 'Wine by the Glass', price: '$13.20', image: 'https://tse2.mm.bing.net/th?id=OIP.fE_O2ERZDAeMVIBZijFAjQHaE8&pid=Api&P=0&h=180' },
                    { name: 'Whiskey Sour', price: '$14.00', image: 'https://tse1.mm.bing.net/th?id=OIP.-qaun2STZ7J1C9q1RADaBwHaE8&pid=Api&P=0&h=180' },
                    { name: 'Cosmopolitan', price: '$16.20', image: 'https://tse4.mm.bing.net/th?id=OIP.GNomUD5tyfXSJ4MHRC0qJQHaHa&pid=Api&P=0&h=180' }
                ],
                'nonAlcohol': [
                    { name: 'Lemonade', price: '$3.99', image: 'https://tse2.mm.bing.net/th?id=OIP.O4-BlwnK5XddkVPnAKuEVQHaE8&pid=Api&P=0&h=180' },
                    { name: 'Virgin Mojito', price: '$7.00', image: 'https://tse2.mm.bing.net/th?id=OIP.srPfMqNzMSam8jw0JpYnEQHaHa&pid=Api&P=0&h=180' },
                    { name: 'Shirley Temple', price: '$4.00', image: 'https://tse1.mm.bing.net/th?id=OIP.M8OS8YtsYUVzT738-yKeLAHaHa&pid=Api&P=0&h=180' },
                    { name: 'Iced Tea', price: '$3.00', image: 'https://tse2.mm.bing.net/th?id=OIP.E_gCRT8XQRVS_WM6U8oLTgHaFj&pid=Api&P=0&h=180' },
                    { name: 'Soda (per can)', price: '$3.00', image: 'https://tse4.mm.bing.net/th?id=OIP.HuiZ0wKn4fJzdUo9nFpqOQHaFj&pid=Api&P=0&h=180' },
                    { name: 'Mocktail (non-alcoholic)', price: '$7.69', image: 'https://tse1.mm.bing.net/th?id=OIP.i6Po_-gOp0NXSJXIhA_ODQHaJ9&pid=Api&P=0&h=180' },
                    { name: 'Brewed Coffee', price: '$5.35', image: 'https://tse1.mm.bing.net/th?id=OIP.gyi2811SPA3O1YcuPtJiSwHaHa&pid=Api&P=0&h=180' },
                    { name: 'Matchless Coffee', price: '$6.10', image: 'https://tse1.mm.bing.net/th?id=OIP.7UntTq1JqkCiTLMEB-IwvwHaE8&pid=Api&P=0&h=180' }
                ],
                'dessert': [
                    { name: 'Chocolate Lava Cake', price: '$12.50', image: 'https://tse4.mm.bing.net/th?id=OIP.UqPA6l0j5zEUC34D2WyFpAHaJw&pid=Api&P=0&h=180' },
                    { name: 'Cheesecake (slice)', price: '$10.99', image: 'https://tse1.mm.bing.net/th?id=OIP.S-q_0M8EpT3xB4SviRG9tAHaHa&pid=Api&P=0&h=180' },
                    { name: 'Tiramisu', price: '$14.00', image: 'https://tse2.mm.bing.net/th?id=OIP.g6OCL5qbY-Nnp-jUe3qzeQHaE7&pid=Api&P=0&h=180' },
                    { name: 'Apple Pie (slice)', price: '$5.20', image: 'https://tse4.mm.bing.net/th?id=OIP.DuFc4e9W7H6789dtveuQcQHaE8&pid=Api&P=0&h=180' },
                    { name: 'Crème Brûlée', price: '$13.22', image: 'https://tse4.mm.bing.net/th?id=OIP.1Xc5cFVVnIY6b-rACqGqeQHaE7&pid=Api&P=0&h=180' },
                    { name: 'Brownie Sundae', price: '$14.60', image: 'https://tse3.mm.bing.net/th?id=OIP.TxM8wBI4P8J-EBGZaK8a6wHaHa&pid=Api&P=0&h=180' },
                    { name: 'Key Lime Pie (slice)', price: '$9.35', image: 'https://tse2.mm.bing.net/th?id=OIP.9vdkk310qAFXV-o3B__CcwHaHa&pid=Api&P=0&h=180' },
                    { name: 'Strawberry Shortcake', price: '$8.10', image: 'https://tse2.mm.bing.net/th?id=OIP.XMYMOFgxzRkPuAoWLF7dCwHaHa&pid=Api&P=0&h=180' }
                ]
            };

            const menuList = document.getElementById('menu-list');
            menuList.innerHTML = '';

            const searchInput = document.querySelector('.search input');
            const searchTerm = searchInput.value.toLowerCase();

            menuData[category].forEach(item => {
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
                itemPrice.textContent = `Price: ${item.price}`;
                content.appendChild(itemPrice);

                const quantityContainer = document.createElement('div');
                quantityContainer.classList.add('quantity-container');

                const minusButton = document.createElement('button');
                minusButton.textContent = '-';
                minusButton.addEventListener('click', function () {
                    updateQuantity(-1, quantityDisplay);
                });
                quantityContainer.appendChild(minusButton);

                const quantityDisplay = document.createElement('span');
                quantityDisplay.textContent = '0';
                quantityContainer.appendChild(quantityDisplay);

                const plusButton = document.createElement('button');
                plusButton.textContent = '+';
                plusButton.addEventListener('click', function () {
                    updateQuantity(1, quantityDisplay);
                });
                quantityContainer.appendChild(plusButton);

                content.appendChild(quantityContainer);

                const addToCartButton = document.createElement('button');
                addToCartButton.textContent = 'Add to Cart';
                addToCartButton.addEventListener('click', function () {
                    addToCart(item.name, item.price, quantityDisplay.innerText);
                });
                content.appendChild(addToCartButton);

                card.appendChild(content);

                menuList.appendChild(card);
            }
        });

            // Hapus kelas 'active' dari semua menu-options
            document.querySelectorAll('.menu-options a').forEach(link => {
                link.classList.remove('active');
            });

            // Tambahkan kelas 'active' ke menu-option yang dipilih
            const activeLink = document.querySelector(`.menu-options a[href="#"][onclick="showMenu('${category}')"]`);
            activeLink.classList.add('active');

            // Tambahkan kelas slide-out untuk menyembunyikan konten sebelum diubah
            menuList.classList.add('slide-out');

            // Set Timeout untuk memberikan waktu animasi slide-out selesai sebelum konten diganti
            setTimeout(() => {
                menuData[category].forEach(item => {
                    // ... (kode yang sudah ada) ...
                });

                // Hapus kelas slide-out dan tambahkan kelas slide-in untuk menampilkan konten baru
                menuList.classList.remove('slide-out');
                menuList.classList.add('slide-in');
            }, 500); 
        }
 function navigateToOrder() {
        // Convert the selected items to JSON and store it in a session or pass it to the server
        const selectedItemsJSON = JSON.stringify(selectedItems);
        // You may want to use AJAX to send this data to the server if needed

        // Set the session or send the data to the server (example using local storage)
        localStorage.setItem('selectedItems', selectedItemsJSON);

        // Redirect to the order page
        window.location.href = 'order';
    }
    function addToCart(itemName, itemPrice, quantity) {
        // Add the selected item to the global variable
        selectedItems.push({
            name: itemName,
            price: parseFloat(itemPrice.replace('$', '')), // Convert price to a number
            quantity: parseInt(quantity, 10),
        });

        // Save selected items to localStorage
        localStorage.setItem('selectedItems', JSON.stringify(selectedItems));

        // Provide feedback to the user (you can replace this with your desired UI)
        alert(`Added to Cart:\n${itemName}\nPrice: ${itemPrice}\nQuantity: ${quantity}`);
    }

        // Add an event listener to the search input
        document.querySelector('.search input').addEventListener('input', function () {
            const category = 'snack'; // Set the default category, you can change it as needed
            showMenu(category);
        });

        // Set the active menu option when the page loads
        document.addEventListener('DOMContentLoaded', function () {
            const defaultCategory = 'appetizer'; // Ganti dengan kategori default yang diinginkan
            showMenu(defaultCategory);

            // Atur menu options yang aktif (active)
            const menuOptions = document.getElementById('menu-options');
            const activeLink = menuOptions.querySelector(`a[href="#"][onclick="showMenu('${defaultCategory}')"]`);
            activeLink.classList.add('active');
        });

        function updateQuantity(change, display) {
        let quantity = parseInt(display.innerText, 10);
        quantity = Math.max(0, quantity + change);
        display.innerText = quantity;
    }

    

</script>
</body>
</html>