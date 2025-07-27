@extends('layouts.app')

@section('title', 'Product Monitoring')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center text-sky-700 mb-10">Product Monitoring</h1>

    <p class="text-center text-gray-700 mb-8">
        This page monitors the number of boxes that have passed through each process in Unit 1 to Unit 4.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Unit 1 -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold text-sky-600 mb-2">Unit 1 - Filling and sealing</h2>
            <p class="text-4xl font-bold text-gray-800">120</p>
            <p class="text-sm text-gray-500">Box has been processed</p>
        </div>

        <!-- Unit 2 -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold text-sky-600 mb-2">Unit 2 - Box</h2>
            <p class="text-4xl font-bold text-gray-800">118</p>
            <p class="text-sm text-gray-500">Box has been processed</p>
        </div>

        <!-- Unit 3 -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold text-sky-600 mb-2">Unit 3 - Stamping & Rotary Table</h2>
            <p class="text-4xl font-bold text-gray-800">115</p>
            <p class="text-sm text-gray-500">Box has been processed</p>
        </div>

        <!-- Unit 4 -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold text-sky-600 mb-2">Unit 4 - Barcode Scan</h2>
            <p class="text-4xl font-bold text-gray-800">112</p>
            <p class="text-sm text-gray-500">Box has been processed</p>
        </div>
    </div>
</div>
@endsection
