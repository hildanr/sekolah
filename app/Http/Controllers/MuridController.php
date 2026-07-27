<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{

    public function index(){
        $data = murid::get();
        return view('pages.DaftarMurid',[
            'data_murid' => $data,
        ]);
    }
    public function add(){
        return view('pages.AddMurid');
    }
    public function store(request $request){
        // dd($request);
       $request->validate([
           'nama' => 'required',
           'alamat' => 'required',
           
       ]);
       murid::create([
           'nama' => $request->nama,
           'alamat' => $request->alamat,
           'umur' => $request->umur,
           'hadir' => false,
           'kelas' => $request->kelas,
           'gender' => $request->gender
       ]);
       return redirect('/murid');
    }
        public function absen(){
        return view('pages.AbsenMurid');
    }
}
