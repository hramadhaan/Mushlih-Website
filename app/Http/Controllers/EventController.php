<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $event = Event::all();
        return view('events\index',['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $new_events = new Event;
        $new_events->judul = $request->get('judul');
        $new_events->tanggal = $request->get('tanggal');
        $new_events->waktu = $request->get('waktu');
        $new_events->alamat = $request->get('alamat');
        $new_events->keterangan = $request->get('keterangan');

        if($request->file('poster')){
            $poster = $request->file('poster')->store('events','public');
            $new_events->poster = $poster;
        }

        $new_events->save();

        return redirect()->route('event.create')->with('status','Events Berhasil di Tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $event_edit =Event::findOrFail($id);
        return view('events.edit',['event'=>$event_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $event_delete = Event::findOrFail($id);
        $event_delete->delete();

        return redirect()->route('event.index')->with('status', 'Event Berhasil di hapus');
    }
}
