<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catije- Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
                input.type = "password";
                icon.innerHTML = "&#x1F576;"; 
            } else {
                input.type = "text";
                icon.innerHTML = "&#x1F441;";
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
