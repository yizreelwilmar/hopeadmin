<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\DataDoa;
use App\Models\Permintaan;
use App\Models\Acara;
use App\Models\Kategori;
use Barryvdh\DomPDF\Facade as PDF;


class PermintaanViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $permintaan = Permintaan::orderBy('id', 'desc')->get();
        $acaras = DB::table('acaras')->get();
        $kategoris = DB::table('kategoris')->get();

        return view('dashboard.permintaancrud', compact('kategoris','acaras','permintaan'));
    }

    public function store(Request $request){

        $request->validate([
            'nama' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kat_doa' => 'required',
            'bible_study' => 'required',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'no_tlp.required' => 'Nomor Telfon tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'agama.required' => 'Agama tidak boleh kosong',
            'kat_doa.required' => 'Kategori Doa tidak boleh kosong',
            'bible_study.required' => 'Bible Study tidak boleh kosong',
            
        ]);
        
        $data = new Datadoa;
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->kat_doa = $request->kat_doa;
        $data->acara_id = $request->acara_id;
        $data->note = $request->note;
        $data->bible_study = $request->bible_study;
        $data->status = $request->status;
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
            'nama' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kat_doa' => 'required',
            'bible_study' => 'required',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'no_tlp.required' => 'Nomor Telfon tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'agama.required' => 'Agama tidak boleh kosong',
            'kat_doa.required' => 'Kategori Doa tidak boleh kosong',
            'bible_study.required' => 'Bible Study tidak boleh kosong',
        ]);
        $data = Datadoa::find($request->id);
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->kat_doa = $request->kat_doa;
        $data->note = $request->note;
        $data->bible_study = $request->bible_study;
        $data->status = $request->status;
        $data->save();

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil diperbaharui'
        );

        return Redirect()->back()->with($notification);

    }

    public function destroy(Request $request){
        $data = Permintaan::find($request->id);
        $data->delete();

        $notification = array(
            'status' => 'success',
            'title' => 'Proses berhasil',
            'message' => 'Data berhasil dihapus'
        );
        return Redirect()->back()->with($notification);
    }
}
