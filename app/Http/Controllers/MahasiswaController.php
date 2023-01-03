<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use PDF;

class MahasiswaController extends Controller
{
    public function index(Request $reqeust){
        
        if($reqeust->has('search')){
            $data = Mahasiswa::where('nama','LIKE','%' .$reqeust->search.'%')->paginate(5);
        } else {
            $data = Mahasiswa::paginate(5);
        }

        return view('IndexMahasiswa', compact('data'));
    }

    public function tambahmahasiswa() {
        return view('TambahDataMahasiswa');
    }

    public function insertdatamahasiswa(Request $request) {
        $data = Mahasiswa::create($request->all());
        
        if ($request->hasFile('foto')){
            $request->file('foto')->move('MahasiswaImg/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    public function readdata($id) {
        $data = Mahasiswa::find($id);
        return view('EditDataMahasiswa', compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = Mahasiswa::find($id);
        $data->update($request->all());

        if ($request->hasFile('foto')){
            $request->file('foto')->move('MahasiswaImg/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Update!');
    }

    public function deletedata($id) {
        $data = Mahasiswa::find($id);
        $data->delete();

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Hapus!');
    }

    // public function detail() {
    //     $data = Mahasiswa::all();
    //     return view('DetailDataMahasiswa', compact('data'));
    // }


    // Export PDF
    public function exportpdf() {
        $data = Mahasiswa::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('DataMahasiswa-pdf');
        return $pdf->download('Data_Mahasiswa.pdf');
    }
}