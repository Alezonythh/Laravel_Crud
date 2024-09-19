<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Jurusan;
use Illuminate\view\view;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class JurusanController extends Controller
{
    public function index(){
    $jurusans = Jurusan::latest()->paginate(2);

    return view ('admin/jurusans/index', compact('jurusans'));
    }

    public function create():view{
        return view('admin/jurusans/create');
    }
    public function store(Request $request):RedirectResponse
    {


        //validate form
        $request->validate([

            'jurusan'         =>'required|min:5',
            'detail'          =>'required|min:10'

        ]);


        Jurusan::create([

            'jurusan'        =>$request->jurusan,
            'detail'         =>$request->detail
        ]);




        return redirect()->route('jurusans.index')->with(['success'=>'Data Berhasil Disimpan']);
    }

    public function show($id)
    {
        // Retrieve the jurusan data, assuming you have a Jurusan model
        $jurusan = Jurusan::findOrFail($id);
    
        // Return the view with the jurusan data
        return view('admin/jurusans/show', compact('jurusan'));
    }
   
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        if ($jurusan) {
            $jurusan->delete();
            return redirect()->route('jurusans.index')->with(['success' => 'Produk berhasil dihapus.']);
        }
        return redirect()->route('jurusans.index')->with(['error' => 'Produk tidak ditemukan.'], 404);
    }
}
