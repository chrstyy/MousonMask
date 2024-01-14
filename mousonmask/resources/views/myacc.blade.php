my acc:
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

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        color: white; 
        font-size: 18px; 
    }

    th {
        border-bottom: 1px solid white;
        font-size: 20px;
        color: white;
        padding: 5px 50px;
    }
    .reset-btn {
            background-color: maroon;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 20px auto;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .reset-btn:hover {
            background-color: darkred; 
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

        </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    showContent('');
});

function showContent(contentType) {
    const contentDiv = document.getElementById('content');

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
            '<th>Total Quantity</th>' +
            '<th>Subtotal</th>' +
            '<th>Status</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody id="orderDetailsBody">' +
            '</tbody>' +
            '</table>'+
            '<button class="reset-btn" onclick="resetOrderHistory()">Reset History</button>'; 

        const orderHistoryData = JSON.parse(localStorage.getItem('orderHistory')) || [];

        const orderTableBody = document.getElementById('orderDetailsBody');
        orderHistoryData.forEach(order => {
            const newRow = orderTableBody.insertRow();
            newRow.innerHTML =
                `<td>${order.orderNumber}</td>` +
                `<td>${order.orderDate}</td>` +
                `<td>${order.orderTime}</td>` +
                `<td>${order.totalQuantity}</td>` +
                `<td>${order.subtotal}</td>` +
                `<td>Processing</td>`;
        });

        if (orderHistoryData.length === 0) {
            contentDiv.innerHTML += '<p>No order history available.</p>';
        }
    } else if (contentType === 'wishlist') {
            contentDiv.innerHTML = '';
            contentDiv.innerHTML +=
                '<h2>WISHLIST</h2>';
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
    function resetOrderHistory() {
            localStorage.removeItem('orderHistory');

            showContent('order');
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

    const orderDetails = JSON.parse(localStorage.getItem('orderDetails'));

    if (orderDetails) {
    showContent('order');

    const orderTableBody = document.getElementById('orderDetailsBody');
    const newRow = orderTableBody.insertRow();
    newRow.innerHTML =
        `<td>${orderDetails.orderNumber}</td>` +
        `<td>${orderDetails.orderDate}</td>` +
        `<td>${orderDetails.orderTime}</td>` +
        `<td>${orderDetails.totalQuantity}</td>` +
        `<td>${orderDetails.subtotal}</td>` +
        `<td>Processing</td>`;

   
    const orderHistoryData = JSON.parse(localStorage.getItem('orderHistory')) || [];
    orderHistoryData.push(orderDetails);
    localStorage.setItem('orderHistory', JSON.stringify(orderHistoryData));
} else {
    showContent('');
}

    function removeFromWishlist(itemName) {
        let wishlistData = JSON.parse(localStorage.getItem('wishlist')) || [];
        wishlistData = wishlistData.filter(item => item.name !== itemName);
        localStorage.setItem('wishlist', JSON.stringify(wishlistData));

        showWishlist();
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
