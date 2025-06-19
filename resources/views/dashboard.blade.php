<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
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

  <!-- Header -->
  <header class="w-full bg-sky-100 shadow-md px-6 py-4 flex justify-between items-center fixed z-20 dark:tex-white dark:bg-black">
  <div class="text-lg font-bold text-sky-600 flex flex-col sm:flex-row sm:space-x-24 sm:ml-12 space-y-8 sm:space-y-0 mx-auto w-fit">
    <!-- Tambahan logo + teks dashboard -->
    <div class="flex items-center space-x-2">
      <span>MONITORING SYSTEM</span>
    </div>
  </div>

  <div class="relative flex items-center space-x-4">
    <!-- Notifikasi -->
    <a href="#" class="text-gray-600 hover:text-sky-500 transition">
      <i class="fa-solid fa-bell"></i> Notifications
    </a>

    <!-- Foto Profil -->
    <div class="relative">
      <button id="profileToggle" onclick="toggleDropdown()" class="flex items-center space-x-1 focus:outline-none">
        <img
          src="https://i.pravatar.cc/40"
          alt="Profile"
          class="w-10 h-10 rounded-full border-2 border-sky-500"
        >
      </button>

      <!-- Dropdown Menu -->
      <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-44 bg-sky-800 rounded-lg shadow-lg border-2 border-blue-800 z-0">
        <a href="#" class="block px-4 py-2 text-white hover:text-gray-800 hover:bg-white rounded">Edit Profile</a>
        <a href="#" class="block px-4 py-2 text-white hover:text-gray-800 hover:bg-white rounded">Settings</a>
        <form method="POST" action="{{ route('logout') }}">
  @csrf
  <button type="submit" class="block px-4 py-2 text-white hover:text-white hover:bg-red-500 rounded w-full text-left">
    Logout
  </button>
</form>


      </div>
    </div>
  </div>
</header>


<!-- JavaScript Toggle -->
  <div class="flex h-screen pt-14">
    <!-- Sidebar -->
      <!-- Burger Button -->
  <button id="burgerBtn" class="md:hidden p-3 text-sky-600 focus:outline-none fixed top-3 left-4 z-50">
    <i class="fas fa-bars text-2xl"></i>
  </button>

<!-- Sidebar -->
<aside id="sidebar" class="fixed border-r-4 border-indigo-200 inset-y-0 left-0 w-[16rem] bg-sky-800 text-gray-700 transform -translate-x-full md:translate-x-0 md:static md:inset-0 transition-transform duration-300 ease-in-out z-10">
  <div class="p-4 md:p-6 space-y-2">
  <div>
    <h3 class="text-xs uppercase text-white font-semibold mt-16 md:mt-4">Pages</h3>
      <ul class="mt-3 space-y-2">
        <li>
          <a href="#" class="flex items-center space-x-3 text-white hover:text-gray-900 hover:bg-white transition px-3 py-2 rounded">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center space-x-3 text-white hover:text-gray-900 hover:bg-white transition px-3 py-2 rounded">
            <i class="fas fa-calendar-alt"></i>
            <span>Calendar</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/hmi') }}" class="flex items-center space-x-3 text-white hover:text-gray-900 hover:bg-white transition px-3 py-2 rounded">
            <i class="fas fa-desktop"></i>
            <span>HMI Monitoring</span>
          </a>
        </li>
        <li>
          <a href="../landingpage.blade.php" class="flex items-center space-x-3 text-white hover:text-gray-900 hover:bg-white transition px-3 py-2 rounded">
            <i class="fas fa-box"></i>
            <span>Product Monitoring</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/mqttstatus') }}" class="flex items-center space-x-3 text-white hover:text-gray-900 hover:bg-white transition px-3 py-2 rounded">
            <i class="fas fa-comments"></i>
            <span>MQTT Status</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center space-x-3 text-white hover:text-gray-900 hover:bg-white transition px-3 py-2 rounded">
            <i class="fa-solid fa-people-group"></i>
            <span>Our Team</span>
          </a>
        </li>
      </ul>
    </div>
    <button id="theme-toggle" class="text-1xl p-2 rounded-full border border-gray-400 dark:border-white fixed top-4 right-4">
  <span id="theme-icon">🌙</span>
</button>
  </div>
  <!-- Toggle Button -->


</aside>


    <!-- Main Content -->
    <main class="flex-1 p-4 md:p-6 space-y-6 overflow-y-auto">
      <!-- Page Title -->
    <div class="relative flex-1 overflow-hidden">
  <!-- Slideshow Container -->
  <div id="slideshow" class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-cover bg-center transition-all duration-[1500ms] ease-in-out"
         style="background-image: url('../img/poli.jpg');"></div>
  </div>

  <!-- Overlay Transparan -->
  <div class="absolute inset-0 bg-gray-900/40 z-8"></div>

  <!-- Konten -->
  <div class="relative z-8 space-y-6 p-6">
    <div>
      <h1 class="text-xl text-white font-bold">Dashboard</h1>
      <p id="currentDate" class="text-white font-medium"></p>
    </div>

    <!-- Big Blue Box -->
    <div class="bg-gray-700/60 border-2 border-sky-800 rounded-lg h-36 w-full">
      <div class="text-white ml-3 mt-6 flex-col items-center sm:flex-col sm:space-x-2 space-y-2 sm:space-y-0 z-8">
        <h1 class="font-bold text-2xl">HOLLAA, ADMIN</h1>
        <p>This dashboard, developed as part of our final project, enables real-time monitoring of HMI and PLC systems</p>
      </div>
    </div>

    <!-- Info Boxes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
      <div id="weather" class="bg-sky-500 border-2 border-sky-800 text-center font-semibold px-4 py-6 rounded shadow text-3xl font-bold text-sky-800">
        <i class="fas fa-thermometer-half mr-2"></i>
      </div>
      <div id="weather1" class="bg-sky-600 border-2 border-sky-800 text-center font-semibold px-4 py-6 rounded shadow text-3xl font-bold text-sky-800">
        <i class="fas fa-tint mr-2"></i>
      </div>
      <div id="lokasi" class="bg-sky-700 border-2 border-sky-800 text-center font-semibold px-4 py-6 rounded shadow text-2xl font-bold text-sky-800">
        <i class="fas fa-location-dot mr-2"></i>
      </div>
      <div id="keadaan" class="bg-sky-800 border-2 border-sky-800 text-center font-semibold px-4 py-6 rounded shadow text-2xl font-bold text-sky-800">
        <i class="fas fa-cloud mr-2"></i>
      </div>
    </div>
  </div>
</div>
<div>
  <div class="flex justify-center mb-4">
    <div class="bg-indigo-500 px-6 py-3 rounded-full shadow-md">
      <h1 class="text-white text-1xl font-bold text-center">About</h1>
    </div>
</div>
  <!-- Content Cards -->
  <div class="space-y-6 z-0">
    <!-- Card 1 -->
     
    <div class="bg-gray-200 p-4 rounded shadow relative z-[-1]">
      <div class="flex flex-col sm:flex-row items-center sm:space-x-4 space-y-4 sm:space-y-0 z-0">
        <img src="../img/haiwell2.JPG" alt="User" class="w-16 h-16 object-cover">
        <div class="flex-1">
          <h2 class="font-semibold text-gray-800">PLC Haiwell</h2>
          <p class="text-sm text-gray-600">
            Lorem ipsum dolor sit amet, lorem isum dolor sit amt. PLC adalah PLC Haiwell, maulfakuf, meja putar dan stamping.
          </p>
        </div>
        <a href="/detail" class="text-sm text-white bg-sky-500 hover:bg-sky-600 px-3 py-1 rounded shadow">Learn More</a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-200 p-4 rounded shadow relative z-[-1]">
      <div class="flex flex-col sm:flex-row items-center sm:space-x-4 space-y-4 sm:space-y-0 ">
        <img src="../img/hmi.jpg" alt="User" class="w-16 h-16 object-cover">
        <div class="flex-1">
          <h2 class="font-semibold text-gray-800">Human Machine Interface (HMI)</h2>
          <p class="text-sm text-gray-600">
            Lorem ipsum dolor sit amet, lorem isum dolor sit amt. PLC adalah PLC Haiwell, maulfakuf, meja putar dan stamping.
          </p>
        </div>
        <a href="/detail" class="text-sm text-white bg-sky-500 hover:bg-sky-600 px-3 py-1 rounded shadow">Learn More</a>
      </div>
    </div>
  </div>

 <div class="overflow-hidden bg-white py-6">
   <div class="flex justify-center mb-8">
    <div class="bg-indigo-500 px-6 py-3 rounded-full shadow-md">
      <h1 class="text-white text-1xl font-bold text-center">Support System</h1>
    </div>
  </div>
  <div class="slider-track flex w-max animate-slide">
    <!-- Kumpulan logo (1) -->
    <div class="flex gap-8">
      <img src="../img/haiwell.png" alt="React" class="h-24 w-auto">
      <img src="../img/mps.png" alt="C#" class="h-24 w-auto">
      <img src="../img/laravel.jpg" alt="Sass" class="h-24 w-auto">
      <img src="../img/scada.png" alt="Tailwind" class="h-24 w-auto">
      <img src="../img/tailwind.png" alt="JS" class="h-24 w-auto">
      <img src="../img/mqttx.png" alt="GitHub" class="h-24 w-auto">
    </div>

    <!-- Kumpulan logo (2) = duplikat -->
    <div class="flex gap-8">
      <img src="../img/haiwell.png" alt="React" class="h-24 w-auto">
      <img src="../img/mps.png" alt="C#" class="h-24 w-auto">
      <img src="../img/laravel.jpg" alt="Sass" class="h-24 w-auto">
      <img src="../img/scada.png" alt="Tailwind" class="h-24 w-auto">
      <img src="../img/tailwind.png" alt="JS" class="h-24 w-auto">
      <img src="../img/mqttx.png" alt="GitHub" class="h-24 w-auto">
    </div>
  </div>
</div>

<footer class="bg-sky-800 w-full text-white font-bold text-center py-8">
  <div>
    <p>© 2025 Copyright</p>
    <p>Made by our Team TugasAkhir</p>
  </div>
</footer>


</main>

  </div>
  

  <script>
     document.addEventListener('DOMContentLoaded', () => {
  const burgerBtn = document.getElementById('burgerBtn');
  const sidebar = document.getElementById('sidebar');

  // Toggle sidebar saat tombol diklik
  burgerBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // supaya klik tombol gak dihitung sebagai klik di luar
    sidebar.classList.toggle('-translate-x-full');
  });

  // Tutup sidebar jika klik di luar sidebar dan tombol
  document.addEventListener('click', (e) => {
    const isClickInsideSidebar = sidebar.contains(e.target);
    const isClickOnButton = burgerBtn.contains(e.target);

    if (!isClickInsideSidebar && !isClickOnButton) {
      sidebar.classList.add('-translate-x-full');
    }
  });

  // Biar klik di dalam sidebar gak nutup sidebar
  sidebar.addEventListener('click', (e) => {
    e.stopPropagation();
  });
});



  document.addEventListener("DOMContentLoaded", function () {
    const dateElement = document.getElementById('currentDate');
    const today = new Date();

    // Format dengan bahasa Indonesia (optional bisa pakai 'en-US' juga)
    const options = { weekday: 'long', day: '2-digit', month: 'long', year: 'numeric' };
    const formattedDate = today.toLocaleDateString('en-US', options); // Ganti 'en-US' jika ingin Bahasa Inggris

    dateElement.textContent = formattedDate;
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

  // Tekan Escape juga nutup dropdown
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeDropdown();
    }
  });

  // suhu
  const apiKey = 'a361d37f21baa0adf59fb971412bc8c8';
  const city = 'Semarang'; // Ganti sesuai lokasi kamu

  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`)
    .then(response => response.json())
    .then(data => {
      const suhu = data.main.temp;
      const kelembapan = data.main.humidity;
      const kondisi = data.weather[0].description;
      
      document.getElementById('weather').innerHTML = `<i class="fas fa-thermometer-half mr-2"></i>${suhu}°C`;
      document.getElementById('weather1').innerHTML = `<i class="fas fa-tint mr-2"></i>${kelembapan}%`;
      document.getElementById('lokasi').innerHTML = `<i class="fas fa-location-dot mr-2"></i>${city}`;
      document.getElementById('keadaan').innerHTML = `<i class="fas fa-cloud mr-2"></i>${kondisi}`;
    
    })
    .catch(err => {
      console.error(err);
      document.getElementById('weather').innerText = 'Gagal mengambil data cuaca';
      document.getElementById('weather1').innerText = 'Gagal mengambil data cuaca';
      document.getElementById('lokasi').innerText = 'Gagal mengambil data cuaca';
      document.getElementById('keadaan').innerText = 'Gagal mengambil data cuaca';
    });

    // kelembapan

    const slideshow = document.querySelector('#slideshow div');
  const images = [
    "../img/poli.jpg",
    "../img/bg.jpg",
    "../img/fac.jpg"
  ];
  let index = 0;

  setInterval(() => {
    index = (index + 1) % images.length;
    slideshow.style.backgroundImage = `url('${images[index]}')`;
  }, 5000); // Ganti slide setiap 5 detik
    
  const toggleBtn = document.getElementById('theme-toggle');
  const themeIcon = document.getElementById('theme-icon');

  // Saat load, cek preferensi
  if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark');
    themeIcon.textContent = '🌞';
  } else {
    themeIcon.textContent = '🌙';
  }

  toggleBtn.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    const isDark = document.documentElement.classList.contains('dark');
    themeIcon.textContent = isDark ? '🌞' : '🌙';
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
  });

</script>

<style>
@keyframes slide {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

.animate-slide {
  animation: slide 15s linear infinite;
}
</style>


</body>
</html>
