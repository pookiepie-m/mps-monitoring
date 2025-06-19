<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bellefair&display=swap" rel="stylesheet">

    <style type="text/tailwindcss">
    
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="absolute z-10 fixed top-0 w-full bg-rose-200">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                    Icon when menu is closed.

                    Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                    Icon when menu is open.

                    Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
            <div class="flex shrink-0 items-center">
                <h2 class="rounded-md px-3 py-2 text-lg font-bold text-blue-500"></h2>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-center">

                
                <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-6">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="rounded-md bg-blue-500 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-zinc-700 hover:bg-blue-500 hover:text-white">About Me</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-zinc-700 hover:bg-blue-500 hover:text-white">Skills</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-zinc-700 hover:bg-blue-500 hover:text-white">Projects</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-zinc-700 hover:bg-blue-500 hover:text-white">Contact</a>
                </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                <div>
                    <button type ="button" class="rounded-md px-3 py-2 text-sm font-medium text-grey-900 hover:bg-white hover:text-black hover:border-2 border-blue-500">Log In

                    </button>
                    <button type ="button" class="bg-blue-500 rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white hover:text-black hover:border-2 border-blue-500">Sign Up

                    </button>
                </div>              
                </div>
            </div>
            </div>
        </div>      
    </nav>
    <!-- end navbar -->

    <!-- home -->
    <div class=" bg-gradient-to-r from-pink-100 via-white to-sky-100 py-10">
    <div class="flex flex-col md:flex-row items-center justify-between px-8 md:px-20 mt-10 font-bellefair">
    <!-- Kiri: Teks -->
        <div class="text-left space-y-2 mb-8 md:mb-0 md:mr-10 -mt-50">
            <p class="text-gray-600 tracking-widest">──── Hello</p>
            <h1 class="text-3xl md:text-4xl font-bold">
            I'm <span class="text-pink-500">Firda</span> Pramesthi
            </h1>
            <h2 class="text-xl md:text-2xl font-semibold text-sky-500">
            Undergraduate Electrical Engineering
            </h2>
            <p class="text-gray-700 max-w-md">
            I'm a student who loves working on innovations in IoT (Internet of Things), industrial automation, and I enjoy creating simple websites too.
            </p>
            <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded shadow hover:bg-pink-600 transition">
            Hire Me
            </button>
        </div>

        <!-- Kanan: Gambar -->
        <div class="text-right">
            <div class="relative w-[700px] h-auto">
        <!-- Gambar kotak biru -->
            <img src="../img/kotak.PNG" alt="kotak biru" class="w-full h-full object-cover mt-0">

        <!-- Gambar di atasnya -->
            <img src="../img/gambar1.PNG" alt="foto firda" class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[475px] h-auto mp-4">
        </div>
    </div>
    </div>

    <!-- end home -->

    <!-- about me -->
    <section class="bg-gradient-to-b from-white to-blue-100 py-16 px-4 md:px-20 font-bellefair">
  <!-- Judul -->
  <div class="text-center -mb-10">
    <h2 class="text-3xl font-bold">About Me</h2>
    <p class="text-lg text-gray-700">Let me Introduce my self :)</p>
  </div>

  <!-- Konten utama -->
  <div class="-mt-20 flex flex-col md:flex-row items-center justify-between gap-12">
    <!-- Gambar di kiri -->
    <div class="relative w-[300px] md:w-[700px] h-auto">
      <img src="../img/kotak2.PNG" alt="kotak biru" class="w-full h-auto object-cover">
      <img src="../img/gambar2.PNG" alt="foto firda"
        class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[250px] md:w-[500px] h-auto">
    </div>

    <!-- Deskripsi di kanan -->
    <div class="bg-pink-100 p-6 md:p-8 rounded-2xl shadow-md max-w-lg text-left">
      <p class="text-sm md:text-base text-gray-800 mb-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sapien ipsum, aliquam porta egestas sed, imperdiet et velit.
        Aliquam eget lacinia nibh. Morbi dictum augue ut bibendum egestas. Phasellus eget erat tincidunt, bibendum turpis eget, 
        varius ante. Aliquam ullamcorper nulla sed elementum condimentum.
      </p>
      <div class="flex space-x-4">
        <button class="bg-pink-500 text-white px-4 py-2 rounded shadow hover:bg-pink-600 transition">Hire Me</button>
        <button class="bg-teal-400 text-white px-4 py-2 rounded shadow hover:bg-teal-500 transition">Download CV</button>
      </div>
    </div>
  </div>
</section>



    <!-- end about me -->
</body>
</html>