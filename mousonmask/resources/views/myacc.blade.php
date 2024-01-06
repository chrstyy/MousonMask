<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Catije Bar & Restaurant</title>

    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
</head>
<style>
    body {
        margin: 0;
        background-color: #BAE8DA;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        position: relative;
    }

    .container {
        display: flex;
        margin: 50px;
    }

    .profile-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 20px;
        align-self: flex-start;
        margin-right: 50px;

    }

    .profile-info p{
        font-size: 25px;
        color: white;
        text-align: center;
        font-family: 'Book Antiqua';
        font-weight: bold;
    }

    .profile-image {
        border-radius: 50%;
        width: 200px;
        height: 200px;
        object-fit: cover;
        border: 10px solid #B4D8CB;
    }

    .log-out-button {
        margin-top: 50px;
        display: flex;
        flex-direction: column;

    }

    .log-out-button button{
        border-radius: 20px;
        padding: 10px;
        font-size: 20px;
        background-color: #B4D8CB;
        color: #AD0000;
        transition: color 0.3s;
        font-family: 'Moul';
    }

    .log-out-button button:hover,
    .profile-buttons button:hover{
        background-color: #234D3E;
        color: white;

    }

    .profile-buttons {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 400px;

    }

    .profile-buttons img {
        width: 30px;
        height: 30px;

    }
    .profile-buttons button {
        font-size: 20px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px;
        background-color: #B4D8CB;
        transition: color 0.3s;
        font-family: 'Moul';
    }

    #content {
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        width:100%;
    }

    #content h2{
        font-size: 25px;
        color: white;
        font-family: 'Book Antiqua';
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        border-bottom: 1px solid white;
        font-size: 20px;
        color: white;
        padding: 5px 50px;
    }

    /* #wishlist-container{
        margin-top: 100px;
        margin-bottom: 50px;
        background-color: white;
        border-radius: 20px;
    }

    #wishlist-container img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin-top: -100px;
        margin-left: 50px;
        margin-right: 45px;
        margin-bottom: 10px;
        object-fit: cover;
    }

    #wishlist-container-content {
        color: white;
        margin-left: 40px;
        margin-right: 40px;
        margin-bottom: 10px;
        text-align: center;
    }

    #wishlist-container-content h3 {
        font-family: 'Barlow';
        font-size: 20px;
    }

    #wishlist-container-content p {
        margin-top: 10px;
        font-family: 'Barlow';
        font-size: 20px;
    } */

    .wishlist-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .wishlist-table th, .wishlist-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        color: white;
        font-size: 20px;
    }

    .wishlist-image {
        width: 100px; 
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
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
            <a href="about">ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <a href="order" id="order">ORDER YOUR FOOD</a>
            <a href="myacc" id="myAccount" class="nav-link active">My Account</a>
        </nav>
    </header>

    <div class="container">
        <div class="profile-container">
            <img src="images/smurf.jpeg" alt="Profile Image" class="profile-image">
            <div class="profile-info">
                @auth
                    <p>{{ Auth::user()->name }}</p>
                @endauth
                <div class="profile-buttons">
                    <button onclick="showContent('personal')"><img src="icons/account.png" alt="Account Icon"> Personal Details</button>
                    <button onclick="showContent('order')"><img src="icons/cart.png" alt="Cart Icon"> My Orders</button>
                    <button onclick="showContent('wishlist')"><img src="icons/fav.png" alt="Favorite Icon"> Wishlist</button>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="log-out-button">
                        <button type="submit">Log Out</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="content">
                <h2>MY ORDERS</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Order Total</th>
                            <th>Subtotal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="orderDetailsBody">
                    </tbody>
                </table>
            </div>
        </div>
<script>
        function showContent(contentType) {
            const contentDiv = document.getElementById('content');
            const orderTableBody = document.getElementById('orderDetailsBody');
            
            if (contentType === 'order') {
                const orderDetails = JSON.parse(localStorage.getItem('orderDetails'));

                if (orderDetails) {
                    const newRow = orderTableBody.insertRow();

                    newRow.innerHTML =
                        `<td style="color: white;">${orderDetails.orderNumber}</td>` +
                        `<td style="color: white;">${orderDetails.orderDate}</td>` +
                        `<td style="color: white;">${orderDetails.orderTime}</td>` +
                        `<td style="color: white;">${orderDetails.totalQuantity}</td>` +
                        `<td style="color: white;">${orderDetails.subtotal}</td>` +
                        '<td style="color: white;">Complete</td>';
                } else {
                    // Handle the case where there are no order details
                    contentDiv.innerHTML = '<p>No order details available.</p>';
                }
            } else if (contentType === 'wishlist') {
                contentDiv.innerHTML = '';
                contentDiv.innerHTML +=
                    '<h2>WISHLIST</h2>' ;
                    const separator = document.createElement('hr');
                    contentDiv.appendChild(separator);
                    const wishlistContainer = document.createElement('div');
                    wishlistContainer.id = 'wishlist-container';
                    contentDiv.appendChild(wishlistContainer);
                    showWishlist();
            } else if (contentType === 'personal') {
                contentDiv.innerHTML = '';
                contentDiv.innerHTML +=
                    '<h2>PERSONAL DETAILS</h2>';
                    const separator = document.createElement('hr');
                    contentDiv.appendChild(separator);
              }
        }
        function showWishlist() {
    const wishlistContainer = document.getElementById('wishlist-container');
    wishlistContainer.innerHTML = '';
    const wishlistData = JSON.parse(localStorage.getItem('wishlist')) || [];

    if (wishlistData.length === 0) {
        wishlistContainer.innerHTML = '<p>Your wishlist is empty.</p>';
        return;
    }

    const wishlistTable = document.createElement('table');
    wishlistTable.classList.add('wishlist-table');

    const headerRow = wishlistTable.insertRow();
    const headerName = document.createElement('th');
    headerName.textContent = 'Item Name';
    headerRow.appendChild(headerName);

    const headerPrice = document.createElement('th');
    headerPrice.textContent = 'Price';
    headerRow.appendChild(headerPrice);

    const headerImage = document.createElement('th');
    headerImage.textContent = 'Image';
    headerRow.appendChild(headerImage);

    wishlistData.forEach(item => {
        const itemRow = wishlistTable.insertRow();

        const itemNameCell = itemRow.insertCell();
        itemNameCell.textContent = item.name;

        const itemPriceCell = itemRow.insertCell();
        itemPriceCell.textContent = `$${item.price}`;

        const itemImageCell = itemRow.insertCell();
        const itemImage = document.createElement('img');
        itemImage.src = item.image;
        itemImage.alt = item.name;
        itemImage.classList.add('wishlist-image');
        itemImageCell.appendChild(itemImage);
    });

    wishlistContainer.appendChild(wishlistTable);
}

        // Call the function to display order details when the page is loaded
        document.addEventListener('DOMContentLoaded', function () {
            showContent(''); // Automatically show order details on page load
        });


</script>



</body>

</html>
