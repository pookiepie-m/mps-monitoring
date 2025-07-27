@extends('layouts.app')

@section('title', 'Calendar Activity')

@section('content')
    <h1 class="text-3xl font-bold mb-6 mt-4 text-center text-sky-500">Calendar Activity</h1>

    <div class="w-full px-4">
  <div id="calendar" class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 w-full h-[500px]"></div>
</div>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <script src="https://cdn.tailwindcss.com"></script>
     <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!-- FullCalendar CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        axios.defaults.headers.common['X-CSRF-TOKEN'] =
            document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/calendar/events',
                selectable: true,
                editable: true,
                eventResizableFromStart: true,
                displayEventTime: false, // tidak tampil "12a"

                select: function (info) {
                    const title = prompt('Masukkan judul acara:');
                    if (title) {
                        axios.post('/calendar/store', {
                            title: title,
                            start: info.startStr,
                            end: info.endStr,
                        }).then(() => {
                            calendar.refetchEvents();
                        });
                    }
                },

                eventDrop: function (info) {
                    updateEvent(info.event);
                },

                eventResize: function (info) {
                    updateEvent(info.event);
                },

                eventClick: function(info) {
                    if (confirm(`Hapus acara "${info.event.title}"?`)) {
                        axios.post('/calendar/delete', {
                            id: info.event.id
                        }).then(() => {
                            info.event.remove();
                            alert('Acara dihapus!');
                        }).catch(err => {
                            alert('Gagal hapus!');
                            console.error(err);
                        });
                    }
                },

                eventDidMount: function(info) {
                    info.el.style.backgroundColor = '#1D4ED8';  // biru
                    info.el.style.color = '#FFFFFF';            // putih
                    info.el.style.borderColor = '#1D4ED8';
                }
            });

            calendar.render();
        });

        function updateEvent(event) {
            axios.post('/calendar/update', {
                id: event.id,
                title: event.title,
                start: event.startStr,
                end: event.endStr,
            }).then(() => {
                alert('Acara diperbarui!');
            }).catch(err => {
                alert('Gagal memperbarui!');
                console.error(err);
            });
        }
    </script>
@endsection
