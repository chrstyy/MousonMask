<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Catije</title>
    <style>
        body {
            margin: 0;
            background-color: #BAE8DA;
            font-family: 'Arial', sans-serif;
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
            font-size: 18px;
            font-weight: bold;
            margin: 0 20px;
        }

        .order-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-summary {
            background-color: white;
            padding: 20px;
            border-radius: 20px;
            width: 60%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .payment-summary h2 {
            margin-bottom: 20px;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 18px;
        }

        .order-details th,
        .order-details td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .payment-total {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
        }

        .back-btn {
            margin-top: 20px;
            text-align: center;
        }

        .back-btn a {
            background-color: black;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
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
            <a href="order" id="order">ORDER YOUR FOOD</a>
            <a href="myacc">My Account</a>
        </nav>
    </header>

    <div class="order-container">
        <div class="payment-summary">
            <h2>Payment Summary</h2>

            <div class="order-details">
                <h3>Order Details</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through order items and display them -->
                        @foreach($selectedItems as $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ $item['price'] * $item['quantity'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="payment-total">
                <p>Total Quantity: {{ $totalQuantity }}</p>
                <p>Subtotal: ${{ $subtotal }}</p>
                <!-- You may add more details such as tax, delivery fee, etc. here -->
            </div>

            <div class="back-btn">
                <a href="order">Back to Order</a>
            </div>
        </div>
    </div>
</body>
<script>
public function showPaymentPage() {
    $selectedItems = session('selectedItems') ?? [];

    // Hitung totalQuantity dan subtotal
    $totalQuantity = 0;
    $subtotal = 0;
    foreach ($selectedItems as $item) {
        $totalQuantity += $item['quantity'];
        $subtotal += $item['price'] * $item['quantity'];
    }

    return view('payment', compact('selectedItems', 'totalQuantity', 'subtotal'));
}


</script>
</html>
