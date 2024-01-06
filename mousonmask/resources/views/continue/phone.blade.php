<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue with Phone</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
   
    <style>
        .container {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 15px;
            width: 70%;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .logo-container img {
            width: 120px; /* Adjust the size as needed */
            height: auto;
            margin-bottom: 20px;
        }

        .title {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .subtitle {
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
        }

        .phone-input {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 20px;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        .continue-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
        }

        .continue-button:hover {
            background-color: darkkhaki;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('icons/phonee.png') }}" alt="Phone Logo">
        </div>
        <div class="title">Continue with Phone</div>
        <div class="subtitle">
            Enter your phone number to continue.
        </div>
        <input type="tel" class="phone-input" id="phoneInput" placeholder="Enter your phone number" required>
        
        <!-- Error Messages -->
        <div id="emptyError" class="error-message"></div>
        <div id="nonNumericError" class="error-message"></div>

        <!-- Disable the button initially and enable it only when the phone number is valid -->
        <button class="continue-button" id="continueButton" onclick="navigateTo('home', 'phone')" disabled>Continue</button>
    </div>

    <script>
        // Function to validate the phone number
        function validatePhoneNumber() {
            var phoneInput = document.getElementById('phoneInput');
            var continueButton = document.getElementById('continueButton');
            var emptyError = document.getElementById('emptyError');
            var nonNumericError = document.getElementById('nonNumericError');

            // Remove non-numeric characters
            var sanitizedPhoneNumber = phoneInput.value.replace(/\D/g, '');

            // Check if the sanitized phone number is not empty
            if (sanitizedPhoneNumber !== '') {
                emptyError.innerHTML = '';

                // Check if the sanitized phone number contains only numeric characters
                if (/^\d+$/.test(sanitizedPhoneNumber)) {
                    continueButton.disabled = false; // Enable the button
                    nonNumericError.innerHTML = ''; // Clear non-numeric error message
                } else {
                    continueButton.disabled = true; // Disable the button
                    nonNumericError.innerHTML = 'Please enter number format only.'; // Display non-numeric error message
                }
            } else {
                continueButton.disabled = true; // Disable the button
                emptyError.innerHTML = 'Please enter your phone number.'; // Display empty error message
                nonNumericError.innerHTML = ''; // Clear non-numeric error message
            }
        }

        // Attach the validation function to the input's input event
        document.getElementById('phoneInput').addEventListener('input', validatePhoneNumber);

        function navigateTo(page, accountType) {
            window.location.href = '{{ route('home') }}?account=' + accountType;
        }
    </script>
</body>
</html>