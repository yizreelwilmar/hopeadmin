<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\DataDoa;
use App\Models\Permintaan;
use App\Models\Acara;
use App\Models\Kategori;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $permintaan = DB::table('permintaan')->get();
        $acaras = DB::table('acaras')->get();
        $kategoris = DB::table('kategoris')->get();

        return view('permintaandoaform', compact('kategoris','acaras','permintaan'));

        
    }

 
    
 
   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $request->validate([
            'nama'=>'required',
            'notlp'=>'required',
            'agama'=>'required',
            'kategori_id'=>'required',
            'doa'=>'required',
            'acara_id'=>'required',

        ],[
                'nama.required' => 'Nama tidak boleh kosong',
                'notlp.required' => 'Nomor Telfon tidak boleh kosong',
                'agama.required' => 'Agama tidak boleh kosong',
                'kategori_id.required' => 'Kategori Doa tidak boleh kosong',
                'doa.required' => 'Isi Doa tidak boleh kosong',
                'acara_id.required' => 'Acara Yang Sedang Berlangsung tidak boleh kosong',
               
                
            ]);

        $permintaan = Permintaan::create([
            'nama' => $request->input('nama'),
            'notlp' => $request->input('notlp'),
            'email' => $request->input('email'),
            'domisili' => $request->input('domisili'),
            'agama' => $request->input('agama'),
            'kategori_id' => $request->input('kategori_id'),
            'doa' => $request->input('doa'),
            'acara_id' => $request->input('acara_id'),
            'ket' => $request->input('ket'),
            'status' => $request->input('status'),
            ]);

            $notification = array(
                'status' => 'success',
                'title' => 'Proses berhasil',
                'message' => 'Data berhasil ditambahkan'
            );
    
            return redirect('/Formdoa')->with('success','Data Doa Anda Sudah Dikirim!');

    
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
