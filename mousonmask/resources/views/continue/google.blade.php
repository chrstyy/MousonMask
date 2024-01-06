<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up with Google</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    
    <style>
        .account-options {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            margin-right: 50px;
            font-size: 20px;
        }

        .account-option {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .account-option:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('icons/google.png') }}" alt="Google Logo">
        </div>
        <div class="content-container">
            <div class="title">Sign Up with Google</div>
            <div class="subtitle">
                Join millions of users who trust Catije with their accounts.
            </div>
            
            <div class="account-options">
                <div class="account-option" onclick="navigateTo('home', 'callista')">Callista@gmail.com</div>
                <div class="account-option" onclick="navigateTo('home', 'christy')">Christy@gmail.com</div>
                <div class="account-option" onclick="navigateTo('home', 'jennifer')">Jennifer@gmail.com</div>
            </div>
        </div>
    </div>

    <script>
        function navigateTo(page, accountType) {
            // Redirect to the home page with the selected account type
            window.location.href = '{{ route('home') }}?account=' + accountType;
        }
    </script>
</body>
</html>
