<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
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
    background-image: url('/public/img/buil.JPG');
    background-repeat: no-repeat;
    background-position: bottom;
    opacity: 0.8; /* transparansi background */
    z-index: -1; /* biar di belakang konten */
  }
</style>

</head>
<body>
<div class="min-h-screen flex items-center justify-center px-4"> 
    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-5xl"  style="box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.1);">

      <!-- Left Panel -->
      <div class="w-full md:w-1/2 p-8">
        <div class="flex items-center space-x-2 mb-10 mt-20 -ml-8">
          <img src="/public/img/poll.JPG" alt="Polines" class="w-30 h-10 -mt-3">
          <span class="font-semibold text-sm"></span>
        </div>

        <h2 class="text-2xl font-bold text-gray-800">HOLLAA<br>WELCOME BACK!</h2>
        <p class="text-sm text-gray-500 mt-2 mb-6">Please enter Log In details below</p>

       <!-- Bagian dalam <form> -->
<form action="{{ route('login.post') }}" method="POST" class="space-y-4">
    @csrf

    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="w-full px-4 py-2 bg-sky-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    
    <input type="password" name="password" placeholder="Password" class="w-full px-4 py-2 bg-sky-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>

    @if ($errors->any())
        <div class="text-red-500 text-sm">
            {{ $errors->first() }}
        </div>
    @endif

    <!-- Tambahkan baris ini untuk "Forgot Password?" -->
    <div class="text-right">
        <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
    </div>

    <button type="submit" class="w-full bg-teal-900 text-white py-2 rounded-md hover:bg-teal-800 transition duration-200">Sign In</button>
</form>

        <div class="flex items-center justify-center my-4">
          <div class="border-t border-gray-300 w-1/4"></div>
          <span class="text-sm text-gray-500 mx-2">Or continue</span>
          <div class="border-t border-gray-300 w-1/4"></div>
        </div>

        <a href="{{ route('google.login') }}" class="w-full flex items-center bg-sky-100 justify-center border border-gray-300 py-2 rounded-md hover:bg-gray-100 transition duration-200">
    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2" alt="Google Logo">
    <span>Log in with Google</span>
</a>


        <p class="text-sm text-center text-gray-500 mt-4">Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign Up</a></p>
      </div>

      <!-- Right Panel -->
      <div class="hidden md:block w-1/2 bg-blue-100 flex items-center justify-center">
        <img src="/public/img/login.gif" alt="Illustration" class="object-contain w-full mt-20"> 
      </div>
    </div>
  </div>
</body>
</html>
