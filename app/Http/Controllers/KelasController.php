<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
class KelasController extends Controller
{

    public function kelas(Request $request){
    $search= $request->search;

    $dataKelas=Kelas::where('kelas','LIKE','%'.$search.'%')->paginate(5);;
    return view('kelas/index',['search'=>$search,'dataKelas'=>$dataKelas]);
    }
    public function tambah(){
        return view('kelas.tambah');
    }
    public function aksi_tambah(Request $request){
        $request->validate(['kelas'=>'required'],['kelas.required'=>'kelas wajib di isi!']);
        Kelas::insert(['kelas'=>$request->kelas]);
        return redirect()->route('kelas');
    }
    public function editkelas($id){
        $dataKelas = Kelas::where('id',$id)->first();
        return view('kelas/edit',['dataKelas'=>$dataKelas]);
    }
    public function hapuskelas($id){
        Kelas::where('id',$id)->delete();
        return redirect()->route('kelas');
    }
    public function aksi_edit(Request $request,$id){
        Kelas::where('id',$id)->update($request->only(['kelas']));
        return redirect()->route('kelas');
        
        // echo $id;
        // dd($request->only(['kelas']));
    }
}
