<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talent;

class TalentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }
    
    public function index(){
        $talent = Talent::orderBy('id', 'desc')->get();
        return view('dashboard.talent', compact('talent') );
    }

    public function store(Request $request){


        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'sosmed' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'ktp' => 'required',
            
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Nomor Telfon tidak boleh kosong',
            'ttl.required' => 'Tempat Tanggal Lahir tidak boleh kosong',
            'sosmed.required' => 'Sosmed tidak boleh kosong',
            'no_tlp.required' => 'no_tlp tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            'ktp.required' => 'Kategori Doa tidak boleh kosong',

            
        ]);
        
        $data = new Talent;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->ttl = $request->ttl;
        $data->sosmed = $request->sosmed;
        $data->no_tlp = $request->no_tlp;
        $data->email = $request->email;
        $data->ktp = $request->ktp;
        $data->npwp = $request->npwp;
        $data->ket = $request->ket;
        $data->foto = $request->foto;

         

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil ditambahkan'
        );

        if($request->hasFile('foto')){
            $request->file('foto')->move('fototalent/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            
            if($request->hasFile('ktp')){
                $request->file('ktp')->move('fotoktptalent/', $request->file('ktp')->getClientOriginalName());
                $data->ktp = $request->file('ktp')->getClientOriginalName();
                

                if($request->hasFile('npwp')){
                    $request->file('npwp')->move('fotonpwptalent/', $request->file('npwp')->getClientOriginalName());
                    $data->npwp = $request->file('npwp')->getClientOriginalName();
                    $data->save();
                }
            }
        }

    

        return Redirect()->back()->with($notification);

    }

    public function update(Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'sosmed' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
       
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Nomor Telfon tidak boleh kosong',
            'ttl.required' => 'ttl tidak boleh kosong',
            'sosmed.required' => 'Sosmed tidak boleh kosong',
            'no_tlp.required' => 'no_tlp tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
         
        ]);
        $data = Talent::find($request->id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->ttl = $request->ttl;
        $data->sosmed = $request->sosmed;
        $data->no_tlp = $request->no_tlp;
        $data->email = $request->email;
        $data->ket = $request->ket;
  
      
        
       

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil diperbaharui'
        );
        
        if($request->hasFile('foto')){
            $request->file('foto')->move('fototalent/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
            
            if($request->hasFile('ktp')){
                $request->file('ktp')->move('fotoktptalent/', $request->file('ktp')->getClientOriginalName());
                $data->ktp = $request->file('ktp')->getClientOriginalName();
            }
                

                if($request->hasFile('npwp')){
                    $request->file('npwp')->move('fotonpwptalent/', $request->file('npwp')->getClientOriginalName());
                    $data->npwp = $request->file('npwp')->getClientOriginalName(); 
                }
        
        $data->save();

        return Redirect()->back()->with($notification);

    }

    public function destroy(Request $request){
        $data = Talent::find($request->id);
        $data->delete();

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil dihapus'
        );
        return Redirect()->back()->with($notification);
    }
}
