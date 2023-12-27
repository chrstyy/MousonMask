<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Catije - Sign Up</title>
    
    <style>
        body {
    background-color: #BAE8DA;
    margin: 0;
    font-family: 'Moulpali';
}
.container {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 576px;
    
    margin: 200px auto;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo-container {
    flex-shrink: 0;
    color: #fff;
}
.logo {
    width: 400px;
    height: 500px;
    margin-right: 20px;
}
.content-container {
    flex-grow: 1;
    margin-left: 20px;
}
.title {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 10px;
    font-family: 'Moul';
}
.subtitle {
    font-size: 20px;
    color: #555;
    margin-bottom: 20px;
    font-family: 'Moulpali';
}
.input-container {
    position: relative;
}
input {
    width: calc(100% - 30px);
    padding: 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding-right: 30px;
    /* Untuk memberi ruang bagi ikon mata (eye) */
}
.password-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
button {
    background-color: #65AB96;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.or {
    margin: 20px 0;
}
.social-buttons {
    display: flex;
    justify-content: space-between;
}
.social-button {
    background-color: #D9D9D9;
    border-radius: 5px;
    padding: 5px;
    flex-grow: 1;
    margin: 0 5px;
    width: 50px;
    /* Ubah sesuai kebutuhan */
    height: 30px;
    /* Ubah sesuai kebutuhan */
    cursor: pointer;
}
.social-button img {
    width: 30px;
    /* Ubah sesuai kebutuhan */
    height: 30px;
    /* Ubah sesuai kebutuhan */
}
.login-link {
    color: #1F27E8;
    text-decoration: underline;
    cursor: pointer;
}
    </style>
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
                    <img src="{{ asset('images/google.png') }}" alt="Google Logo">
                </button>
                <button class="social-button" onclick="window.location.href='{{ route('phone') }}'">
                    <img src="{{ asset('images/phone.png') }}" alt="Phone Logo">
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