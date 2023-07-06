<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;


class userController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }
    
    public function index(){
        $user = User::orderBy('id', 'desc')->get();
        return view('dashboard.user', compact('user') );
    }

    public function cetak_pdf()
    {
    	$User = User::all();
    
    	$pdf = PDF::loadview('dashboard.cetakuser',['user'=>$User]);
    	return $pdf->stream();
    }

    

    public function store(Request $request){


        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'required',
            
        ],[
            'name.required' => 'name tidak boleh kosong',
            'level.required' => 'Nomor Telfon tidak boleh kosong',
            'email.required' => 'Tempat Tanggal Lahir tidak boleh kosong',
            
            
        ]);
        
        $data = new user;
        $data->name = $request->name;
        $data->level = $request->level;
        $data->email = $request->email;
        $data->save();
         

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil ditambahkan'
        );

    

        return Redirect()->back()->with($notification);

    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'required',
            
        ],[
            'name.required' => 'name tidak boleh kosong',
            'level.required' => 'Nomor Telfon tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            
        ]);
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->level = $request->level;
        $data->email = $request->email;
        $data->save();

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil diperbaharui'
        );
        
        

        return Redirect()->back()->with($notification);

    }

    public function destroy(Request $request){
        $data = User::find($request->id);
        $data->delete();

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil dihapus'
        );
        return Redirect()->back()->with($notification);
    }
}
