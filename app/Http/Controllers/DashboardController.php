<?php

namespace App\Http\Controllers;

use App\Models\Datadoa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }
    public function index(){
        $datadoa = Datadoa::orderBy('id', 'desc')->get();
        return view('dashboard.index', compact('datadoa') );
    }

}
