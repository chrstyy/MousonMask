<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catije- Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-K7T/QD6IfRliU6AtN4gHvdaDR1KkEXPFYLNTm7ofVEK5wDuv2pCievZeaXioqP29V9b7s7I/InMduh+OtMUOMyQ==" crossorigin="anonymous" />

</head>
<body>

    <form method="POST" action="{{ route('home') }}">
        @csrf

        <div class="container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Catije Logo" class="logo">
            </div>
            <div class="content-container">
                <div class="title">Login</div>
                <div class="subtitle">
                    Don't have an account? <span class="signup-link" onclick="window.location.href='{{ route('register') }}'">Create your account</span>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-container">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <span class="password-icon" onclick="togglePassword('password')">

                        </span>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <div class="or">Or Login with</div>
                <div class="social-buttons">
                    <button class="social-button" onclick="window.location.href='{{ route('google') }}'">
                        <img src="{{ asset('icons/google.png') }}" alt="Google Logo">
                    </button>
                    <button class="social-button" onclick="window.location.href='{{ route('phone') }}'">
                        <img src="{{ asset('icons/phonee.png') }}" alt="Phone Logo">
                    </button>
                </div>
            </div>
        </div>

        <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const icon = document.querySelector(`#${inputId} + .password-icon i`);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
        </script>
    </form>

</body>
</html>

