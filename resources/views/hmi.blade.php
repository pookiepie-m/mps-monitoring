@extends('layouts.app')

@section('title', 'Hmi Monitoring')

@section('content')
    <style>
        #status {
            font-weight: bold;
        }
    </style>

    <h1>Monitoring HMI</h1>
    <p>IP Address yang dicek: <span id="ip-address">10.122.222.95</span></p>
    <p>Status koneksi: <span id="status">Mengecek...</span></p>

    <script>
        const ip = "192.168.137.1"; // Ganti dengan IP device lain
        const port = ""; // Ganti dengan port jika berbeda
        const url = `http://${ip}:${port}/`;

        fetch(url, { method: "GET", mode: "no-cors" })
            .then(() => {
                document.getElementById("status").textContent = "Terkoneksi";
                document.getElementById("status").style.color = "green";
            })
            .catch(() => {
                document.getElementById("status").textContent = "Tidak terkoneksi";
                document.getElementById("status").style.color = "red";
            });
    </script>
    <iframe src="10.122.222.95" width="100%" height="600px" frameborder="0"></iframe>
@endsection