pay:
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Catije</title>
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
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
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .order-container {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            width: 50%;
            border-radius: 20px;
        }

        .payment-summary {
            background-color: white;
            border-radius: 20px;
            padding: 5px;
            text-align: center;
            margin-bottom: 20px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.52);
        }

        .payment-summary h2 {
            margin-bottom: 20px;
            font-size: 30px;
        }

        .order-details {
            margin: 20px;
            color: white;
            text-align: center;
        }

        .order-details p {
            font-size: 20px;
        }

        .back-btn {
            text-align: center;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .back-btn a {
            background-color: #F7E0BE;
            color: black;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        .back-btn a:hover {
            background-color: #967C56;
            color: white;
            padding: 10px;
            border-radius: 10px;
        }

        .payment-btn {
            margin-top: 50px;
            text-align: center;
            cursor: pointer;
            margin-bottom: 20px;

        }

        .payment-btn button {
            background-color: #4F7251;
            color: white;
            padding: 10px;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Moul';
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.52);
        }

        .payment-btn button:hover {
            background-color: #C6F7C8;
            color: black;
            padding: 10px;
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
            <a href="order" id="order"  class="nav-link active">ORDER YOUR FOOD</a></div>
            <a href="myacc" id="myAccount">My Account</a></div>
        </nav>
    </header>
    <div class="container">
    <div class="order-container">
        <div class="payment-summary">
            <h2>Payment Summary</h2>
        </div>

        <div class="order-details">
            <p><b>Order Number :</b> <span id="orderNumber"></span></p>
            <p><b>Total Quantity :</b> <span id="totalQuantity"></span></p>
            <p><b>Subtotal : </b> <span id="subtotal"></span></p>
        </div>

        <div class="payment-btn">
            <button onclick="processPayment()">Process Payment</button>
        </div>
        <div class="back-btn">
                <a href="order">Back to Order</a>
        </div>
    </div>
    </div>
    <script>
        const queryParams = new URLSearchParams(window.location.search);
        const orderNumber = queryParams.get('orderNumber');
        const totalQuantity = queryParams.get('totalQuantity');
        const subtotal = queryParams.get('subtotal');

      
        document.getElementById('orderNumber').textContent = orderNumber;
        document.getElementById('totalQuantity').textContent = totalQuantity;
        document.getElementById('subtotal').textContent = subtotal;

        function processPayment() {
            const orderNumber = document.getElementById('orderNumber').textContent;
            const totalQuantity = document.getElementById('totalQuantity').textContent;
            const subtotal = document.getElementById('subtotal').textContent;

            const currentDate = new Date();
            const formattedDate = currentDate.toLocaleDateString();
            const formattedTime = currentDate.toLocaleTimeString();

           
            const orderDetails = {
                orderNumber: orderNumber,
                totalQuantity: totalQuantity,
                subtotal: subtotal,
                orderDate: formattedDate,
                orderTime: formattedTime
            };

            localStorage.setItem('orderDetails', JSON.stringify(orderDetails));

            alert('Payment processed successfully!');
        }

    </script>
</body>
</html>
