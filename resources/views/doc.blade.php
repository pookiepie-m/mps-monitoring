@extends('layouts.app')

@section('title', 'Documentation')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center">
            <img src="{{ asset('img/gambar1.jpg') }}" alt="Gambar 1" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 1</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/gambar2.jpg') }}" alt="Gambar 2" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 2</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/gambar3.jpg') }}" alt="Gambar 3" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 3</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center">
            <img src="{{ asset('img/gambar1.jpg') }}" alt="Gambar 1" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 1</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/gambar2.jpg') }}" alt="Gambar 2" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 2</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/gambar3.jpg') }}" alt="Gambar 3" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 3</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center">
            <img src="{{ asset('img/gambar1.jpg') }}" alt="Gambar 1" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 1</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/gambar2.jpg') }}" alt="Gambar 2" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 2</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/gambar3.jpg') }}" alt="Gambar 3" class="w-full h-48 object-cover rounded-lg shadow">
            <p class="mt-2 text-gray-700">Keterangan Gambar 3</p>
        </div>
    </div>
</div>
@endsection
