<?php

namespace App\Http\Controllers;

use App\Models\RegisUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesertaListController extends Controller
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
                $pesertaLists = RegisUser::where('no_registrasi','LIKE','%'.$request->cari.'%')->orderBy('id','desc')->get();
            }
            else{
                $pesertaLists = RegisUser::orderBy('id','desc')->get();
            }
            return view('admin.pesertaLists.index',compact('pesertaLists'),[
                "title" => "Daftar Peserta",
                "judul" => "Daftar Semua Peserta"
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function show(RegisUser $pesertaList)
    {
        return view('admin.pesertaLists.detail',compact('pesertaList'),[
            "title" => "Daftar Peserta",
            "judul" => "Detail Peserta"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisUser $regisUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisUser $regisUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisUser $pesertaList)
    {
        $pesertaList->delete();
        $pesertaList->user->delete();
        if($pesertaList->payment == NULL){
            
        }
        else{
            $pesertaList->payment->delete();
        }
        return "<script>
                    alert('Sukses Hapus Peserta!');
                    location.href = '/pesertaLists'
                </script>";
    }
}
