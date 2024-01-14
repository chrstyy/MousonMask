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


        .left-container button {
            background-color: transparent;
            cursor: pointer;
            padding: 5px;
            font-family: 'Moul';
            font-size: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .right-container {
            flex: 1;
            padding: 20px;
            margin-top: 30px;
            border-radius: 20px;
            margin-right: 20px;
            width: 397px;
            height: 70px;
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
            background-color: rgba(16, 15, 15, 0.2);
            padding: 20px;
            border-radius: 0px;
        }

        .order-summary h2 {
            margin-bottom: 10px;
        }

        .order-summary-btn {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
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

        .order-summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 20px;
            background-color: white;
            border-radius: 20px;
        }

        .order-summary-table th,
        .order-summary-table td{
            padding: 10px;
            text-align: left;
        }

        #resetButton{
            color: #034E45;
            font-weight: bold;
            background-color: #ACCAF6;
            font-size: 20px;
            margin-top: 20px;
            box-shadow: 4px 5px 8px #D8F5C1;
            border: none;
        }

        .delete-button {
            margin-top: 20px;
            background-color: transparent;
            border: 2px solid red;
            cursor: pointer;
            padding: 5px;
            border-radius: 10px;
        }

        .delete-button:hover {
            background-color: honeydew;
            cursor: pointer;
        }

        .img-delete{
            width: 25px;
            height: 20px;
            padding-top: 5px;
            filter: brightness(550%);
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
            <a href="myacc" id="myAccount">My Account</a>
        </nav>
    </header>

    <div class="order-container">
    <div class="left-container">
        <h2>Selected Items</h2>
        <table class="order-table" id="selected-items-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price Total</th>
                    <th></th>
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
                        <td>
                            <button class="delete-button" onclick="deleteItem({{ $detail->id_detail }})">
                                <img class="img-delete" src="{{ asset('images/delete-icon.png') }}">
                            </button>
                        </td>
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

    <table class="order-summary-table">
        <tbody>
            <tr>
                <th>Orders</th>
                <td id="orderNumber">{{ $order ? $order->id_order : 'N/A' }}</td>
            </tr>
            @php
                $totalQuantity = 0;
                $subtotal = 0;

                if ($order) {
                    $detailPesanan = \App\Models\DetailPesanan::where('id_order', $order->id_order)->first();

                    if ($detailPesanan) {
                        $totalQuantity = $detailPesanan->sum('jumlah');
                        $subtotal = $totalHarga; // Assuming $totalHarga is defined elsewhere in your code
                    }
                }
            @endphp
            <tr>
                <th>Quantity</th>
                <td id="totalQuantity">{{ $totalQuantity }}</td>
            </tr>
            <tr>
                <th>Subtotal</th>
                <td id="subtotal">{{ $subtotal }}</td>
            </tr>
        </tbody>
    </table>

    <div class="order-summary-btn">
        <button onclick="continueToPayment()">Continue to Payment</button>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectedItemsJSON = localStorage.getItem('selectedItems');
        const selectedItems = selectedItemsJSON ? JSON.parse(selectedItemsJSON) : [];

        const orderTableBody = document.querySelector('.order-table tbody');
        selectedItems.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${item.image}" alt="${item.name}" width="50"></td>
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>$${(item.price * item.quantity).toFixed(2)}</td>
                <td><button class="delete-button" onclick="deleteItem(this)">
                    <img class="img-delete" src="{{ asset('images/delete-icon.png') }}"></button></td>
                `;
            orderTableBody.appendChild(row);
        });

        const orderNumber = Math.floor(10000 + Math.random() * 90000);

        const totalQuantity = selectedItems.reduce((total, item) => total + item.quantity, 0);
        const subtotal = selectedItems.reduce((total, item) => total + item.price * item.quantity, 0);

        document.querySelector('#orderNumber').textContent = orderNumber;
        document.querySelector('#totalQuantity').textContent = totalQuantity;
        document.querySelector('#subtotal').textContent = `$${subtotal.toFixed(2)}`;
    });


    function resetSelectedItems() {
        localStorage.removeItem('selectedItems');

        const orderTableBody = document.querySelector('.order-table tbody');
        orderTableBody.innerHTML = '';

        document.querySelector('#orderNumber').textContent = '00000';
        document.querySelector('#totalQuantity').textContent = '0';
        document.querySelector('#subtotal').textContent = '$0.00';
    }

    function continueToPayment() {
        const orderNumber = document.querySelector('#orderNumber').textContent;
        const totalQuantity = document.querySelector('#totalQuantity').textContent;
        const subtotal = document.querySelector('#subtotal').textContent;

        // Encode order summary information as query parameters
        const queryParams = `?orderNumber=${orderNumber}&totalQuantity=${totalQuantity}&subtotal=${subtotal}`;
        window.location.href = `payment${queryParams}`;
    }

    function deleteItem(button) {
    const row = button.parentNode.parentNode;
    const itemName = row.querySelector('td:nth-child(2)').textContent;

    // Remove the item from the selectedItems array in localStorage
    let selectedItems = JSON.parse(localStorage.getItem('selectedItems')) || [];
    selectedItems = selectedItems.filter(item => item.name !== itemName);
    localStorage.setItem('selectedItems', JSON.stringify(selectedItems));

    // Remove the row from the table
    row.parentNode.removeChild(row);

    // Recalculate order summary
    recalculateOrderSummary();
}


    function recalculateOrderSummary() {
        const orderTableBody = document.querySelector('.order-table tbody');
        const selectedItems = JSON.parse(localStorage.getItem('selectedItems')) || [];

        const totalQuantity = selectedItems.reduce((total, item) => total + item.quantity, 0);
        const subtotal = selectedItems.reduce((total, item) => total + item.price * item.quantity, 0);

        document.querySelector('#totalQuantity').textContent = totalQuantity;
        document.querySelector('#subtotal').textContent = `$${subtotal.toFixed(2)}`;
    }



</script>
</body>
</html>
