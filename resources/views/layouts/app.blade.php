<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css' rel='stylesheet' />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js'></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
    }
    #weather, #weather1, #lokasi, #keadaan {
      font-family: 'Quicksand', sans-serif;
      color: white;
      text-shadow: 1px 1px 0 blue,
                   -1px 1px 0 blue,
                   1px -1px 0 blue,
                   -1px -1px 0 blue;
      font-size: 1.3rem;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }
  </style>
</head>
<body class="dark:bg-black">
  <header class="w-full bg-sky-100 shadow-md px-6 py-4 flex justify-between items-center fixed z-20 dark:text-white dark:bg-black">
    <div class="text-lg font-bold text-sky-600 flex flex-col sm:flex-row sm:space-x-24 sm:ml-12 space-y-8 sm:space-y-0 mx-auto w-fit">
      <div class="flex items-center space-x-2">
        <span>MONITORING SYSTEM</span>
      </div>
    </div>
    <div class="relative flex items-center space-x-4">
      <a href="#" class="text-gray-600 hover:text-sky-500 transition">
        <i class="fa-solid fa-bell"></i> Notifications
      </a>
      <div class="relative">
        <button id="profileToggle" onclick="toggleDropdown()" class="flex items-center space-x-1 focus:outline-none">
          <img src="https://i.pravatar.cc/40" alt="Profile" class="w-10 h-10 rounded-full border-2 border-sky-500">
        </button>
        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-44 bg-sky-800 rounded-lg shadow-lg border-2 border-blue-800 z-0">
          <a href="#" class="block px-4 py-2 text-white hover:text-gray-800 hover:bg-white rounded">Edit Profile</a>
          <a href="#" class="block px-4 py-2 text-white hover:text-gray-800 hover:bg-white rounded">Settings</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block px-4 py-2 text-white hover:text-white hover:bg-red-500 rounded w-full text-left">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </header>
  <div class="flex pt-14 h-screen overflow-hidden">
    <button id="burgerBtn" class="md:hidden p-3 text-sky-600 focus:outline-none fixed top-3 left-4 z-50">
      <i class="fas fa-bars text-2xl"></i>
    </button>
    <aside id="sidebar" class="fixed border-r-4 border-indigo-200 inset-y-0 left-0 w-[16rem] bg-sky-800 text-gray-700 transform -translate-x-full md:translate-x-0 md:static md:inset-0 transition-transform duration-300 ease-in-out z-10">
      <div class="p-4 md:p-6 space-y-2">
        <div>
          <h3 class="text-xs uppercase text-white font-semibold mt-16 md:mt-4">Pages</h3>
          <ul class="mt-3 space-y-2">
            <li>
              <a href="{{ url('/dashboard') }}" class="group flex items-center space-x-3 text-white hover:bg-white transition px-3 py-2 rounded">
                <i class="fas fa-home group-hover:text-gray-900"></i>
                <span class="group-hover:text-gray-900">Home</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/calendar') }}" class="group flex items-center space-x-3 text-white hover:bg-white transition px-3 py-2 rounded">
                <i class="fas fa-calendar-alt group-hover:text-gray-900"></i>
                <span class="group-hover:text-gray-900">Calendar Activity</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/hmi') }}" class="group flex items-center space-x-3 text-white hover:bg-white transition px-3 py-2 rounded">
                <i class="fas fa-desktop group-hover:text-gray-900"></i>
                <span class="group-hover:text-gray-900">HMI Monitoring</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/produk') }}" class="group flex items-center space-x-3 text-white hover:bg-white transition px-3 py-2 rounded">
                <i class="fas fa-box group-hover:text-gray-900"></i>
                <span class="group-hover:text-gray-900">Product Monitoring</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/mqttstatus') }}" class="group flex items-center space-x-3 text-white hover:bg-white transition px-3 py-2 rounded">
                <i class="fas fa-comments group-hover:text-gray-900"></i>
                <span class="group-hover:text-gray-900">MQTT Status</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/doc') }}" class="group flex items-center space-x-3 text-white hover:bg-white transition px-3 py-2 rounded">
                 <i class="fa-solid fa-folder group-hover:text-gray-900"></i>
                <span class="group-hover:text-gray-900">Documentation</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/team') }}" class="group flex items-center space-x-3 text-white hover:bg-white transition px-3 py-2 rounded">
                <i class="fa-solid fa-people-group group-hover:text-gray-900"></i>
                <span class="group-hover:text-gray-900">Our Team</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <main class="flex-1 p-4 md:p-6 space-y-6 overflow-y-auto">
      @yield('content')
    </main>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const burgerBtn = document.getElementById('burgerBtn');
      const sidebar = document.getElementById('sidebar');
      burgerBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        sidebar.classList.toggle('-translate-x-full');
      });
      document.addEventListener('click', (e) => {
        const isClickInsideSidebar = sidebar.contains(e.target);
        const isClickOnButton = burgerBtn.contains(e.target);
        if (!isClickInsideSidebar && !isClickOnButton) {
          sidebar.classList.add('-translate-x-full');
        }
      });
      sidebar.addEventListener('click', (e) => {
        e.stopPropagation();
      });
    });
    function toggleDropdown() {
      const dropdown = document.getElementById('profileDropdown');
      dropdown.classList.toggle('hidden');
    }
    function closeDropdown() {
      document.getElementById('profileDropdown').classList.add('hidden');
    }
    document.addEventListener('click', function (e) {
      const dropdown = document.getElementById('profileDropdown');
      const toggleBtn = document.getElementById('profileToggle');
      if (!dropdown.contains(e.target) && !toggleBtn.contains(e.target)) {
        dropdown.classList.add('hidden');
      }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        closeDropdown();
      }
    });
  </script>
</body>
</html>
