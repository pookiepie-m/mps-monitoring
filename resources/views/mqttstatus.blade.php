<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MQTT Status</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
</head>
<body class="bg-yellow-400 min-h-screen flex flex-col items-center justify-start py-10">
    <h1 class="text-white text-4xl font-bold mb-8">MQTT STATUS</h1>

    <div class="flex flex-col space-y-4 w-full max-w-4xl px-10">
        <!-- Status connection -->
        <div id="status" class="p-4 rounded shadow-lg bg-white text-3xl font-bold text-center">
            Connecting...
        </div>

        <!-- Messages container -->
        <div id="messages" class="p-4 rounded shadow-lg bg-white text-3xl font-sans min-h-[100px] flex items-center justify-center">
            <p class="text-gray-500 italic" id="message-content">Waiting for message...</p>
        </div>
    </div>

    <script>
        const mqttServer = 'ws://broker.hivemq.com:8000/mqtt';
        const mqttUser = '';
        const mqttPassword = '';
        const topic = 'topik/data';

        const client = mqtt.connect(mqttServer, {
            username: mqttUser,
            password: mqttPassword,
            reconnectPeriod: 1000,
        });

        function updateStatus(message, colorClass) {
            const statusElement = document.getElementById('status');
            statusElement.textContent = message;
            statusElement.className = `p-4 rounded shadow-lg bg-white text-3xl font-bold text-center ${colorClass}`;
        }

        client.on('connect', () => {
            console.log('Connected to MQTT Broker');
            updateStatus('Connected to MQTT broker', 'text-green-600');

            client.subscribe(topic, (err) => {
                if (!err) {
                    console.log(`Subscribed to topic ${topic}`);
                } else {
                    console.error('Subscription error:', err);
                    updateStatus('Subscription error', 'text-red-600');
                }
            });
        });

        client.on('reconnect', () => {
            updateStatus('Reconnecting...', 'text-yellow-600');
        });

        client.on('error', (error) => {
            console.error('Connection error:', error);
            updateStatus('Connection error', 'text-red-600');
        });

        client.on('message', (topic, message) => {
            const msg = message.toString();
            console.log('Received message:', msg);

            // Tampilkan pesan terbaru saja, tanpa kurung kurawal atau tambahan
            const messageContent = document.getElementById('message-content');
            messageContent.textContent = msg;
            messageContent.classList.remove('text-gray-500', 'italic');
        });
    </script>
</body>
</html>
