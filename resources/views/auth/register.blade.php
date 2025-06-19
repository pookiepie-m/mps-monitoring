<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
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
    <div class="bg-white w-full max-w-xl p-8 rounded-lg shadow-lg space-y-6">
      <div class="flex items-center space-x-2 mb-4">
        <img src="../img/logoo.PNG" alt="Logo" class="w-30 h-10 -mt-3">
      </div>
      <h2 class="text-2xl font-bold text-gray-800">CREATE YOUR ACCOUNT</h2>
      <p class="text-sm text-gray-500 mb-6">Fill in your details below</p>

      <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
          <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}" required
            class="w-full px-4 py-2 bg-sky-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          @error('name')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
            class="w-full px-4 py-2 bg-sky-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          @error('email')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <input type="password" name="password" placeholder="Password" required
            class="w-full px-4 py-2 bg-sky-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          @error('password')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required
            class="w-full px-4 py-2 bg-sky-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit"
          class="w-full bg-teal-900 text-white py-2 rounded-md hover:bg-teal-800 transition duration-200">
          Daftar
        </button>
      </form>

      <p class="text-sm text-center text-gray-500 mt-4">
        Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Masuk di sini</a>
      </p>
    </div>
  </div>
</body>
</html>
