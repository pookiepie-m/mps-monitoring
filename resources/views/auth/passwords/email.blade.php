<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            position: relative;
            min-height: 100vh;
            margin: 0;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url('../img/buil.JPG');
            background-repeat: no-repeat;
            background-position: bottom;
            opacity: 0.8;
            z-index: -1;
        }
    </style>
</head>
<body>
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-8">
        <div class="text-center mb-6">
            <img src="../img/logoo.PNG" alt="Logo" class="mx-auto w-28">
            <h2 class="text-2xl font-bold mt-4 text-gray-800">Reset Password</h2>
            <p class="text-sm text-gray-500">Enter your email and we'll send you a link to reset your password.</p>
        </div>

        @if (session('status'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf
            <input type="email" name="email" value="{{ old('email') }}" required autofocus
                   class="w-full px-4 py-2 bg-sky-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="Email Address">

            @error('email')
                <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror

            <button type="submit" class="w-full bg-teal-900 text-white py-2 rounded-md hover:bg-teal-800 transition duration-200">
                Send Password Reset Link
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="text-sm text-blue-500 hover:underline">Back to Login</a>
        </div>
    </div>
</div>
</body>
</html>
