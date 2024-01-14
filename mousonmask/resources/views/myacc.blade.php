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

    .wishlist-table th{
        border-bottom: 1px solid white;
        border-top: 1px solid white;
        padding: 8px;
        text-align: center;
        color: white;
        font-size: 20px;
    }
    .wishlist-table td {
        border: none;
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
    .remove-button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .remove-button img {
        width: 40px;
        height: 40px;
    }

    .form-container {
        padding-top: 40px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 300px;
        margin: auto;
    }

    .form-container label {
        color: white;
        font-size: 18px;
    }

    .form-container input {
        padding: 8px;
        border: 1px solid #B4D8CB;
        border-radius: 5px;
    }

    .form-container select {
        padding: 8px;
        border: 1px solid #B4D8CB;
        border-radius: 5px;
    }

    .form-container button {
        padding: 10px;
        background-color: #B4D8CB;
        color: #AD0000;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        margin-top: 20px;
    }

    .form-container button:hover {
        background-color: #234D3E;
        color: white;
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

        <div id="content"></div>
<script>
        function showContent(contentType) {
            const contentDiv = document.getElementById('content');
            const orderTableBody = document.getElementById('orderDetailsBody');

            if (contentType === 'order') {
                    contentDiv.innerHTML = '';
                    contentDiv.innerHTML +=
                        '<h2>MY ORDERS</h2>' +
                        '<table>' +
                        '<thead>' +
                        '<tr>' +
                        '<th>Order ID</th>' +
                        '<th>Date</th>' +
                        '<th>Time</th>' +
                        '<th>Order Total</th>' +
                        '<th>Subtotal</th>' +
                        '<th>Status</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody id="orderDetailsBody">' +
                        '</tbody>' +
                        '</table>';

                    // Ambil data riwayat pesanan dari backend
                    fetch('/api/orders', {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            // Jika diperlukan, tambahkan header Authorization untuk otentikasi
                            // 'Authorization': 'Bearer <token>'
                        },
                    })
                    .then(response => response.json())
                    .then(orderHistoryData => {
                        const orderTableBody = document.getElementById('orderDetailsBody');
                        orderHistoryData.forEach(order => {
                            const newRow = orderTableBody.insertRow();
                            newRow.innerHTML =
                                `<td>${order.orderId}</td>` +
                                `<td>${order.date}</td>` +
                                `<td>${order.time}</td>` +
                                `<td>${order.orderTotal}</td>` +
                                `<td>${order.subtotal}</td>` +
                                `<td>${order.status}</td>`;
                        });

                        if (orderHistoryData.length === 0) {
                            contentDiv.innerHTML += '<p>No order history available.</p>';
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching order history:', error);
                        contentDiv.innerHTML += '<p>Error fetching order history. Please try again later.</p>';
                    });
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
                contentDiv.innerHTML = '<h2>PERSONAL DETAILS</h2>';

                const separatorAboveForm = document.createElement('hr');
                contentDiv.appendChild(separatorAboveForm);

                @auth
                    const username = "{{ Auth::user()->name }}";
                @endauth

                contentDiv.innerHTML +=
                '<div class="form-container" id="personalDetailsForm">' +
                '<label for="firstName">First Name:</label>' +
                '<input type="text" id="firstName" name="firstName" required>' +

                '<label for="lastName">Last Name:</label>' +
                '<input type="text" id="lastName" name="lastName" required>' +

                '<label for="username">Username:</label>' +
                `<input type="text" id="firstName" name="firstName" value="${username ? username : ''}" ${username ? 'readonly' : ''} required>` +

                '<label for="gender">Gender:</label>' +
                '<select id="gender" name="gender">' +
                '<option value="male">Male</option>' +
                '<option value="female">Female</option>' +
                '</select>' +

                '<button onclick="submitPersonalDetails()">Save Changes</button>' +
                '<button onclick="enableEdit()">Edit All</button>' +
                '</div>';
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

        const headerAction = document.createElement('th');
        headerAction.textContent = '';
        headerRow.appendChild(headerAction);

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

        const removeButtonCell = itemRow.insertCell();
        const removeButton = document.createElement('button');
        removeButton.classList.add('remove-button'); // Add a class for styling
        const removeButtonImage = document.createElement('img');
        removeButtonImage.src = 'icons/removeWishlist.png'; // Provide the correct path to your remove image
        removeButtonImage.alt = 'Remove';
        removeButton.appendChild(removeButtonImage);
        removeButton.addEventListener('click', () => removeFromWishlist(item.name));
        removeButtonCell.appendChild(removeButton);

        });


        wishlistContainer.appendChild(wishlistTable);
    }

    // Call the function to display order details when the page is loaded
    document.addEventListener('DOMContentLoaded', function () {
        showContent(''); // Automatically show order details on page load
    });

    function removeFromWishlist(itemName) {
        let wishlistData = JSON.parse(localStorage.getItem('wishlist')) || [];
        wishlistData = wishlistData.filter(item => item.name !== itemName);
        localStorage.setItem('wishlist', JSON.stringify(wishlistData));

        showWishlist(); // Refresh the wishlist table
    }

    function submitPersonalDetails() {
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const username = document.getElementById('username').value;
            const gender = document.getElementById('gender').value;

            // Lakukan sesuatu dengan data yang telah diisi, misalnya simpan ke database atau tampilkan di halaman
            console.log("First Name:", firstName);
            console.log("Last Name:", lastName);
            console.log("Username:", username);
            console.log("Gender:", gender);

    }

    function toggleEdit(field) {
        const displayElement = document.getElementById(`${field}Display`);
        const inputElement = document.getElementById(field);

        displayElement.style.display = displayElement.style.display === 'none' ? 'inline' : 'none';
        inputElement.style.display = inputElement.style.display === 'none' ? 'inline' : 'none';
    }

    function enableEdit() {
        const editableElements = document.querySelectorAll('.editable');
        const inputElements = document.querySelectorAll('.form-container input');

        editableElements.forEach(element => {
            element.style.display = 'inline';
        });

        inputElements.forEach(input => {
            input.style.display = 'inline';
        });
    }



</script>



</body>

</html>
