<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Event;
use App\Konsultasi;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $event = Event::count();
        $konsultasi = Konsultasi::count();
        $artikel = Artikel::count();
        return view('home', compact('user','event','konsultasi','artikel'));
    }
}
