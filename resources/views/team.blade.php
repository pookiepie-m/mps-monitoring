@extends('layouts.app')

@section('title', 'Our Team')

@section('content')
<div class="container mx-auto px-4 py-8 ml-20"> {{-- ditambah ml-4 untuk geser kanan --}}
    <h1 class="text-3xl font-bold text-center text-sky-700 mb-10">Meet Our Team</h1>

    {{-- Unit 1 --}}
    <h2 class="text-2xl font-semibold text-sky-600 mb-4">Unit 1 - Filling box</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10 max-w-7xl mx-auto">
    {{-- Member khusus dengan gambar --}}
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/cin.jpg') }}" alt="cindy" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Cindy Meliana</h3>
            <p class="text-sm text-gray-600">3.32.22.2.04</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/parid.JPG') }}" alt="parid" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Farid Aziz</h3>
            <p class="text-sm text-gray-600">3.32.22.2.06</p>
        </div>
    </div>
       
</div>

    {{-- Unit 2 --}}
    <h2 class="text-2xl font-semibold text-sky-600 mb-4">Unit 2 - Packaging Box</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10 max-w-7xl mx-auto">
    {{-- Member khusus dengan gambar  --}}
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/nab.jpg') }}" alt="nabila" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Siti Alyanabila</h3>
            <p class="text-sm text-gray-600">3.32.22.2.03</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/nanum.jpg') }}" alt="hanum" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Hanum Berliana</h3>
            <p class="text-sm text-gray-600">3.32.22.2.06</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/dev.jpg') }}" alt="dhevana" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">dhevana</h3>
            <p class="text-sm text-gray-600">4.32.22.2.10</p>
        </div>
    </div>

   
</div>

    {{-- Unit 3 --}}
    <h2 class="text-2xl font-semibold text-sky-600 mb-4">Unit 3 - Stamping and Rotary Table</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10 max-w-7xl mx-auto">
    {{-- Member khusus dengan gambar firda.PNG --}}
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/azra.jpg') }}" alt="azra" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Azra Tiarani</h3>
            <p class="text-sm text-gray-600">3.32.22.2.03</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/fir.jpg') }}" alt="Firda" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Firda Pramesthi</h3>
            <p class="text-sm text-gray-600">3.32.22.2.06</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/irpin.jpg') }}" alt="irpan" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Irvan Hari Saputra</h3>
            <p class="text-sm text-gray-600">3.32.22.3.10</p>
        </div>
    </div>

   
</div>


    {{-- Unit 4 --}}
    <h2 class="text-2xl font-semibold text-sky-600 mb-4">Unit 4 - Barcode and Storage</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10 max-w-7xl mx-auto">
    {{-- Member khusus dengan gambar firda.PNG --}}
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/ren.jpg') }}" alt="rheno" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Rheno Alvaro</h3>
            <p class="text-sm text-gray-600">3.32.22.2.03</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/cyan.JPG') }}" alt="cyan" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Firda Pramesthi</h3>
            <p class="text-sm text-gray-600">3.32.22.2.06</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('/public/img/faa.jpg') }}" alt="fadil" class="w-full h-60 object-cover">
        <div class="p-4 text-center">
            <h3 class="text-lg font-semibold text-gray-800">Fadil</h3>
            <p class="text-sm text-gray-600">3.32.22.3.10</p>
        </div>
    </div>

   
</div>
@endsection
