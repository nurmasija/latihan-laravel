<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function siswa(Request $request){
        $search= $request->search;
        $dataSiswa=Siswa::where('nama','LIKE','%'.$search.'%')->paginate(5);;
        return view('siswa/index',['search'=>$search,'dataSiswa'=>$dataSiswa]);
        }
        public function tambahsiswa(){
            return view('siswa.tambah');
        }
        public function siswa_tambah(Request $request){
            Siswa::insert(['nama'=>$request->nama,'alamat'=>$request->alamat]);
            return redirect()->route('siswa');
        }
        public function editsiswa($id){
            $dataSiswa = Siswa::where('id',$id)->first();
            return view('siswa/edit',['dataSiswa'=>$dataSiswa]);
        }
        public function hapussiswa($id){
            Siswa::where('id',$id)->delete();
            return redirect()->route('siswa');
        }
}
