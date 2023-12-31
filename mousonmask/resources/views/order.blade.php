<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Catije</title>
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

        .order-container {
            display: flex;
        }

        .left-container {
            flex: 1;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            color: white;
            margin-top: 50px;
            margin-left: 50px;
            border-radius: 20px;
            margin-right: 50px;
            width: 40%;
            align-self: flex-start;
        }

        .left-container h2{
            font-family: 'Moul';
            font-size: 30px;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 20px;
        }

        .order-table th {
           
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid white;
        }


        .order-table td {
            
            padding: 10px;
            text-align: left;
        }


        .right-container {
            flex: 1;
            padding: 20px;
            margin-top: 30px;
            border-radius: 20px;
            margin-right: 20px;
            width: 40%;
            align-self: flex-start;
        }

        .right-container h2{
            font-family: 'Moul';
            font-size: 30px;
        }

        .order-summary-title {
            background-color: white;
            border-radius: 20px;
            padding: 5px;
            text-align: center;
            margin-bottom: 20px;
        }

        .order-summary {
            background-color: white;
            padding: 20px;
            border-radius: 20px;
        }

        .order-summary h2 {
            margin-bottom: 10px;
        }

        .order-summary-btn {
            margin-top: 20px;
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            height: 100%;
        }

        .order-summary-btn button{
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 5px;
            font-family: 'Moul';
            font-size: 20px;
            border-radius: 10px;
        }

        .left-container button {
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 5px;
            font-family: 'Moul';
            font-size: 20px;
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
            <a href="menu">MENU</a>
            <a href="about">ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <a href="order" id="order" class="nav-link active">ORDER YOUR FOOD</a>
            <a href="#myacc" id="myAccount">My Account</a>
        </nav>
    </header>

    <div class="order-container">
    <div class="left-container">
    <h2>Selected Items</h2>
    <table class="order-table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $selectedItems = session('selectedItems') ?? [];
            @endphp

            @foreach($selectedItems as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] * $item['quantity'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button id="resetButton" onclick="resetSelectedItems()">Reset Selected Items</button>
</div>


        <div class="right-container">
            <div class="order-summary-title">
                <h2>Order Summary</h2>
            </div>
            <div class="order-summary">
                <p>Order Number: 12345</p>
                <p>Total Quantity: 3</p>
                <p>Subtotal: $15.00</p>
            </div>

            <div class="order-summary-btn">
                <button>Continue to Payment</button>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Retrieve the selected items from the session or local storage
        const selectedItemsJSON = localStorage.getItem('selectedItems');
        const selectedItems = selectedItemsJSON ? JSON.parse(selectedItemsJSON) : [];

        // Display the selected items in the table
        const orderTableBody = document.querySelector('.order-table tbody');
        selectedItems.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>$${item.price * item.quantity.toFixed(2)}
                    ${((item.price * item.quantity) % 1 !== 0) ? '' : '.00'}
                </td>
            `;
            orderTableBody.appendChild(row);
        });

        // Calculate the order summary based on the selected items
        const totalQuantity = selectedItems.reduce((total, item) => total + item.quantity, 0);
        const subtotal = selectedItems.reduce((total, item) => total + item.price * item.quantity, 0);

        // Update the order summary
        document.querySelector('.order-summary p:nth-child(2)').textContent = `Total Quantity: ${totalQuantity}`;
        document.querySelector('.order-summary p:nth-child(3)').textContent = `Subtotal: $${subtotal.toFixed(2)}`;
    });

    function resetSelectedItems() {
            // Clear the selected items in session or local storage
            localStorage.removeItem('selectedItems');

            // Clear the content of the table
            const orderTableBody = document.querySelector('.order-table tbody');
            orderTableBody.innerHTML = '';

            // Reset the order summary
            document.querySelector('.order-summary p:nth-child(2)').textContent = 'Total Quantity: 0';
            document.querySelector('.order-summary p:nth-child(3)').textContent = 'Subtotal: $0.00';
        }
</script>
</body>
</html>
