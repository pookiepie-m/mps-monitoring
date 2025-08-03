@extends('layouts.app')

@section('title', 'Our Team')

@section('content')
<div class="container mx-auto px-4 py-8 ml-20"> {{-- ditambah ml-4 untuk geser kanan --}}
    <h1 class="text-3xl font-bold text-center text-sky-700 mb-10">Meet Our Team</h1>

    {{-- Unit 1 --}}
    <h2 class="text-2xl font-semibold text-sky-600 mb-4">Unit 1 - Filling and sealing of packaged products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10 max-w-7xl">
        @foreach ([1, 2] as $i)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('/public/img/team' . $i . '.jpg') }}" alt="Team Member {{ $i }}" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Member {{ $i }}</h3>
                <p class="text-sm text-gray-600">Unit 1 - Operator</p>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Unit 2 --}}
    <h2 class="text-2xl font-semibold text-sky-600 mb-4">Unit 2 - Quality Check</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10 max-w-7xl">
        @foreach ([3, 4, 5] as $i)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('img/team' . $i . '.jpg') }}" alt="Team Member {{ $i }}" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Member {{ $i }}</h3>
                <p class="text-sm text-gray-600">Unit 2 - QC Staff</p>
            </div>
        </div>
        @endforeach
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
            <h3 class="text-lg font-semibold text-gray-800">Irfan Hari Saputra</h3>
            <p class="text-sm text-gray-600">4.32.22.2.10</p>
        </div>
    </div>

   
</div>


    {{-- Unit 4 --}}
    <h2 class="text-2xl font-semibold text-sky-600 mb-4">Unit 4 - Barcode Scan And Placement</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-7xl">
        @foreach ([9, 10, 11] as $i)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('../img' . $i . '.jpg') }}" alt="Team Member {{ $i }}" class="w-full h-60 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Member {{ $i }}</h3>
                <p class="text-sm text-gray-600">Unit 4 - Finishing Staff</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
