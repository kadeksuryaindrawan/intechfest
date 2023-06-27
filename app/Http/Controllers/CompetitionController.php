<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->level == 'admin'){
            if($request->has('cari')){
                $competitions = Competition::where('nama_lomba','LIKE','%'.$request->cari.'%')->orderBy('id','desc')->get();
            }
            else{
                $competitions = Competition::orderBy('id','desc')->get();
            }
            return view('admin.competitions.Index',compact('competitions'),[
                "title" => "Lomba",
                "judul" => "Daftar Semua Lomba"
            ])
                ->with('i',(request()->input('page',1) - 1) * 5);
        }
        else{
            return view('peserta.dashboard',[
                "title" => "Error",
                "judul" => "Error"
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competitions.create',[
            "title" => "Lomba",
            "judul" => "Tambah Lomba"
        ]);
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
            'nama_lomba' => 'required',
            'deskripsi' => 'required',
        ]);

        Competition::create($request->all());

        return "<script>
                    alert('Sukses Tambah!');
                    location.href = '/competitions'
                </script>";

        // return redirect()->route('competitions.index')
        //     ->with('success','Sukses menambah Lomba!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        return view('admin.competitions.edit',compact('competition'),[
            "title" => "Lomba",
            "judul" => "Edit Lomba"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        $request->validate([
            'nama_lomba' => 'required',
            'deskripsi' => 'required',
        ]);

        $competition->update($request->all());
        
        return "<script>
                    alert('Sukses Edit!');
                    location.href = '/competitions'
                </script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        $competition->delete();

        return "<script>
                    alert('Sukses Hapus Lomba!');
                    location.href = '/competitions'
                </script>";
    }
}
