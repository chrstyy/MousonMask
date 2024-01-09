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
    <form method="POST" action="{{ route('login') }}">
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

        <!-- Email Address -->
        <div class="input-container">
            <x-text-input id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Username"/>
            <x-input-error :messages="$errors->get('email')" class="error" />
        </div>

        <!-- Password -->
        <div class="input-container">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="error" />
                <span class="password-icon" onclick="togglePassword('password')"></span>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <button type="submit">
            {{ __('Log in') }}
        </button>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
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

    </script>
</body>
</html>
