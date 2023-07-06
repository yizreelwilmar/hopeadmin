<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\DataDoa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datadoa = Datadoa::orderBy('id', 'desc')->get();
        return view('permintaandoa', compact('datadoa') );
    }

    public function guest()
    {
        $datadoa = Datadoa::orderBy('id', 'desc')->get();
        return view('permintaandoa', compact('datadoa') );
    }
    
}
