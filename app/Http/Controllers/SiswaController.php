<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Siswa;
use Illuminate\view\view;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    public function index(){
    $siswas = Siswa::latest()->paginate(1);

    return view ('admin/siswas/index', compact('siswas'));
    }

    public function create():view{
        return view('admin/siswas/create');
    }

    public function store(Request $request):RedirectResponse
    {


        //validate form
        $request->validate([

            'nama_lengkap'       =>'required|min:5',
            'tempat_lahir'      =>'required|min:5',
            'tanggal_lahir'     =>'required',
            'alamat'            =>'required|min:10',
            'asal_sekolah'      =>'required|min:10',
            'email'             =>'required|min:10',
            'foto'              =>'required|image|mimes:jepg,jpg,png|max:2048',
            'scan_kk'           =>'required|image|mimes:jepg,jpg,png|max:2048',

        ]);

        $foto = $request->file('foto');
        $foto->storeAs('siswas',$foto->hashName(),'public');
        Siswa::create([

            'nama_lengkap'        =>$request->nama_lengkap,
            'tempat_lahir'        =>$request->tempat_lahir,
            'tanggal_lahir'       =>$request->tanggal_lahir,
            'alamat'              =>$request->alamat,
            'asal_sekolah'        =>$request->asal_sekolah,
            'email'               =>$request->email,
            'foto'                =>$foto->hashName(),
            'scan_kk'             =>$foto->hashName()
        ]);




        return redirect()->route('siswas.index')->with(['success'=>'Data Berhasil Disimpan']);
    }

    public function show(string $id):view
    {



        $siswas = Siswa::findOrFail($id);

        return view('admin/siswas/show', compact('siswas'));
    }
   
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        if ($siswa) {
            $siswa->delete();
            return redirect()->route('siswas.index')->with(['success' => 'Produk berhasil dihapus.']);
        }
        return redirect()->route('siswas.index')->with(['error' => 'Produk tidak ditemukan.'], 404);
    }
}
