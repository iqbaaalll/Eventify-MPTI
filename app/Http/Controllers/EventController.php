<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('eventPrivate', [
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;

        $jamMulai = $request->jamMulai . ":00";
        $jamBerakhir = $request->jamBerakhir . ":00";

        if ($request->file('imagePath')) {
            $file = $request->file('imagePath');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/img/events'), $filename);
        }
        $file = $request->file('imagePath');
        $filename = $file->getClientOriginalName();

        $event->nama = $request->nama;
        $event->tanggalMulai = $request->tanggalMulai;
        $event->tanggalBerakhir = $request->tanggalBerakhir;
        $event->jamMulai = $jamMulai;
        $event->jamBerakhir = $jamBerakhir;
        $event->lokasi = $request->lokasi;
        $event->budget =  $request->budget;
        $event->kapasitas = $request->kapasitas;
        $event->imagePath = $filename;
        $event->save();
        return redirect("/");
    }

    public function getAll(Event $event)
    {
        $events = Event::all();
        return view('home', [
            'events' => $events
        ]);
    }

    public function showOne(Event $event)
    {
        return view('event', [
            'event' => $event,
            'title' => 'Eventify | ' . $event->nama,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
