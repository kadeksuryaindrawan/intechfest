<?php

namespace App\Http\Controllers;

use App\Models\RegisUser;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = RegisUser::where(['user_id' => Auth::user()->id])->first();
        $status = '';
        if ($user !=null) {
           $status = $user->status_pembayaran;
        }
        return view('peserta.dashboard',[
            'data' => 'pnbwdc',
            'status' => $status,
            'regisuser' => $user
        ]);
    }
    
    public function indexPnbdc()
    {
        $user = RegisUser::where(['user_id' => Auth::user()->id])->first();
        $status = '';
        if ($user !=null) {
           $status = $user->status_pembayaran;
        }
        return view('peserta.dashboard',[
            'data' => 'pnbdc',
            'status' => $status,
            'regisuser' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data)
    {
        return view('peserta.form_pendaftaran',['data'=>$data]);
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
            'nama_lengkap' => 'required',
            'nim_nisn_nik' => 'required',
            'ktm_kts_ktp' => 'required|mimes:jpeg,jpg,png|max:5000',
            'jurusan' => 'nullable',
            'jenis_kelamin' => 'required',
            'telepon' => 'required',
            'social' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'asal_sekolah_perguruan' => 'nullable',
            'lomba' => 'required',
            'submit' => 'required'
        ]);

        date_default_timezone_set('Asia/Singapore');
        $nama_foto = Str::replace(' ', '_', $request->nama_lengkap).date('_d_m_Y-H_i_s').".jpg";
        $no_registrasi = 'INTECH'.$request->lomba.date('His');

        RegisUser::create([
            'user_id' => Auth::user()->id,
            'competition_id' => $request->lomba,
            'no_registrasi' => $no_registrasi,
            'nama_lengkap' => $request->nama_lengkap,
            'nim_nis_nik' => $request->nim_nisn_nik,
            'nim_nis_nik' => $request->nim_nisn_nik,
            'foto_ktm_ks_ktp' => $nama_foto,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->telepon,
            'line_telegram' => $request->social,
            'email' => Auth::user()->email,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'instansi' => $request->asal_sekolah_perguruan,
        ]);

        $request->file('ktm_kts_ktp')->move(public_path('img_pendaftaran'),$nama_foto);
        User::where('id',Auth::user()->id)->update(['status' => 'sudah daftar']);
        
        return "<script>
                    alert('Sukses daftar!');
                    location.href = '/peserta'
                </script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function show(RegisUser $regisUser)
    {
        //
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
    public function destroy(RegisUser $regisUser)
    {
        //
    }
}
