<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catije- Sign Up</title>
    <style>
        body {
        background-color: #BAE8DA;
        margin: 0;
        font-family: 'Moulpali';
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        }

        .container {
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-radius: 15px;
        width: 110%;
        height: auto;
        }

        .logo-container{
        margin-right: 20px;
        margin-left: 10px;
        margin-top: 10px;
        margin-bottom: 5px;
        }

        .logo-container img{
        border-radius: 15px;
        }

        .content-container {
        flex-grow: 1;
        flex-direction: column;
        display: flex;
        margin-right: 10px;
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

        .input-container input {
            width: calc(100% - 30px);
        margin-top: 10px;
        margin-bottom: 20px;
        border: none;
        border-bottom: 2px solid black;
        outline: none;
        background-color: white;
        padding: 10px;
        font-size: 18px;
        font-family: 'Moulpali';
        }

        .password-icon {
        position: absolute;
        top: 50%;
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
        font-family: 'Moul', regular;
        font-size: 18px;
        font-weight: bold;
        }

        button:hover {
        background-color: darkkhaki;
        }

        .or {
        position: fixed;
        margin-top: 500px;
        margin-left: 600px;
        font-size: 18px;
        font-family: 'Moul', regular;
        }

        .social-buttons {
        position: fixed;
        justify-content: space-between;
        margin-top: 580px;
        margin-left: 600px;
        }
        .social-button {
        background-color: #D9D9D9;
        border-radius: 5px;
        padding: 5px;
        cursor: pointer;
        margin-right: 10px;
        }
        .social-button img {
        width: 30px;
        height: 30px;
        }

        .login-link {
        color: #1F27E8;
        text-decoration: underline;
        cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Catije Logo">
            </div>
            <div class="content-container">
                <div class="title">Sign Up</div>
                <div class="subtitle">
                    Already have an account? <span class="login-link"
                        onclick="window.location.href='{{ route('login') }}'">Log in</span>
                </div>

        <!-- Name -->
        <div class="input-container">
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Username"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="input-container">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email Address"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-container">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />
                            <span class="password-icon" onclick="togglePassword('password')"></span>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="input-container">
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm Password"
                            required autocomplete="new-password" />
            <span class="password-icon" onclick="togglePassword('confirm_password')"></span>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
            <button type="submit">
                {{ __('Sign Up') }}
            </button>
        </div>
        <div class="or">Or Sign Up with</div>
        <div class="social-buttons">
            <button class="social-button" onclick="window.location.href='{{ route('google') }}'">
                <img src="{{ asset('icons/google.png') }}" alt="Google Logo">
            </button>
            <button class="social-button" onclick="window.location.href='{{ route('phone') }}'">
                <img src="{{ asset('icons/phonee.png') }}" alt="Phone Logo">
            </button>
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

        function navigateTo(page) {
            switch (page) {
                case 'google':
                    window.location.href = '{{ route('google') }}';
                    break;
                case 'phone':
                    window.location.href = '{{ route('phone') }}';
                    break;
            }
        }
    </script>
    </form>
</body>
</html>
