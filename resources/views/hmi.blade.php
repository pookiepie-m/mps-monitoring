<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMI Monitoring</title>
    <style>
        #status {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Monitoring HMI</h1>
    <p>IP Address yang dicek: <span id="ip-address">192.168.1.100</span></p>
    <p>Status koneksi: <span id="status">Mengecek...</span></p>

    <script>
        const ip = "172.20.10.2"; // Ganti dengan IP device lain
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
    <iframe src="http://172.20.10.2" width="100%" height="600px" frameborder="0"></iframe>
</body>
</html>
