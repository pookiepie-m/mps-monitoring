@extends('layouts.app')

@section('title', 'Documentation')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center text-sky-700 mb-10">Documentation</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center">
            <img src="{{ asset('/public/img/control.jpg') }}" alt="Gambar 1" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Control Panel</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('/public/img/panel.jpg') }}" alt="Gambar 2" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Control Panel 2</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('/public/img/kerkom.jpg') }}" alt="Gambar 3" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">kerja Kelompok</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
        <div class="text-center">
            <img src="{{ asset('/public/img/unit1.jpg') }}" alt="Gambar 1" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Unit 1 proses</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('/public/img/unit2.jpg') }}" alt="Gambar 2" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Unit 2 Proses</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('/public/img/unit3.jpg') }}" alt="Gambar 3" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">unit 3 proses</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
        <div class="text-center">
            <img src="{{ asset('/public/img/barcode.jpg') }}" alt="Gambar 1" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">unit 4 barcode</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('/public/img/unit4.jpg') }}" alt="Gambar 2" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Unit 4</p>
        </div>
        
    </div>
</div>
@endsection
