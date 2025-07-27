<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    // Menampilkan halaman kalender
    public function index()
    {
        return view('calendar');
    }

    // Mengambil semua event dalam format JSON
    public function fetchEvents()
    {
        $events = Event::all()->map(function ($event) {
            return [
                'id'    => $event->id,
                'title' => $event->title,
                'start' => $event->start,
                'end'   => $event->end,
            ];
        });

        return response()->json($events);
    }

    // Menyimpan event baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'start' => 'required|date',
            'end'   => 'nullable|date',
        ]);

        Event::create([
            'title' => $request->title,
            'start' => $request->start,
            'end'   => $request->end,
        ]);

        return response()->json(['message' => 'Event created']);
    }

    // Mengupdate event saat drag/resize
   public function update(Request $request)
{
    try {
        $request->validate([
            'id'    => 'required|exists:events,id',
            'start' => 'required|date',
            'end'   => 'nullable|date',
        ]);

        $event = Event::findOrFail($request->id);

        $event->update([
            'start' => $request->start,
            'end'   => $request->end,
        ]);

        return response()->json(['message' => 'Event updated']);
    } catch (\Exception $e) {
        // Tampilkan error detail di browser
        return response()->json([
            'message' => 'Update failed',
            'error' => $e->getMessage(), 
        ], 500);
    }
}

    // Menghapus event
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:events,id',
        ]);

        $event = Event::find($request->id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted']);
    }
}
