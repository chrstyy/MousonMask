<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Catije - Sign Up</title>
    
  
</head>

<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Catije Logo" class="logo">
        </div>
        <div class="content-container">
            <div class="title">Sign Up</div>
            <div class="subtitle">
                Already have an account? <span class="login-link"
                    onclick="window.location.href='{{ route('login') }}'">Log in</span>
            </div>
            <form action="{{ route('signup') }}" method="post">
                @csrf
                <div class="input-container">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="input-container">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <span class="password-icon" onclick="togglePassword('password')"></span>
                </div>
                <div class="input-container">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"
                        required>
                    <span class="password-icon" onclick="togglePassword('confirm_password')"></span>
                </div>
                <button type="submit">Sign Up</button>
            </form>
            <div class="or">Or Sign Up with</div>
            <div class="social-buttons">
                <button class="social-button" onclick="window.location.href='{{ route('google') }}'">
                    <img src="{{ asset('icons/google.png') }}" alt="Google Logo">
                </button>
                <button class="social-button" onclick="window.location.href='{{ route('phone') }}'">
                    <img src="{{ asset('icons/phone.png') }}" alt="Phone Logo">
                </button>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(id) {
            var input = document.getElementById(id);
            var icon = document.getElementById("icon_" + id);

            if (input.type === "password") {
                input.type = "text";
                icon.innerHTML = "&#x1F441;"; // Unicode for open eye
            } else {
                input.type = "password";
                icon.innerHTML = "&#x1F576;"; // Unicode for hidden eye
            }
        }
    </script>
</body>
</html>