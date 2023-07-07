<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        return view('user/dataSiswa', [
            'siswaa' => Siswa::all()
        ]);
    }

    public function dashboard(){
        return view('user/index3');
    }

    public function add() {
        return view('user/create');
    }

    public function store(Request $request){
        $nis = $request->input('nisn');
        $nama = $request->input('namaSiswa');
        $tempat = $request->input('tempats');
        $tanggal = $request->input('tanggals');
        $jk = $request->input('jk');
        $alamat = $request->input('alamats');
        $email = $request->input('emails');
        $no_hp = $request->input('hp');
        $rata = $request->input('nilaiRaport');
        $penghasilan = $request->input('penghasilanOrtu');
        $keaktifan = $request->input('nilaiKeaktifan');
        $sertif = $request->input('sertifikat');
        $tang = $request->input('ortu');
        // $tang = request('ortu', $default = 4);


        
        $siswa = new Siswa;
        $siswa->nis = $nis;
        $siswa->nama_siswa = $nama;
        $siswa->tempat_lahir = $tempat;
        $siswa->tanggal_lahir = $tanggal;
        $siswa->jk = $jk;
        $siswa->alamat = $alamat;
        $siswa->email = $email;
        $siswa->no_hp = $no_hp;
        $siswa->c1 = $rata;
        $siswa->c2 = $penghasilan;
        $siswa->c3 = $keaktifan;
        $siswa->c4 = $sertif;
        $siswa->c5 = $tang;
        $siswa->save();

        return redirect('siswa');
    }

    public function edit($id){
        $siswa = Siswa::where('id', $id)->first();
        
        return view('user/update',[
            'siswa' => $siswa
        ]);
    }

    public function update(Request $request, $id){
        $nis = $request->input('nisn');
        $nama = $request->input('namaSiswa');
        $tempat = $request->input('tempats');
        $tanggal = $request->input('tanggals');
        $jk = $request->input('jk');
        $alamat = $request->input('alamats');
        $email = $request->input('emails');
        $no_hp = $request->input('hp');
        $c1 = $request->input('nilaiRaport');
        $c2 = $request->input('penghasilanOrtu');
        $c3 = $request->input('nilaiKeaktifan');
        $c4 = $request->input('sertifikat');
        $c5 = $request->input('ortu');
        
        // $request = request();

        $siswa = Siswa::where('id', $id)->first();

        $siswa->nis = $nis;
        $siswa->nama_siswa = $nama;
        $siswa->tempat_lahir = $tempat;
        $siswa->tanggal_lahir = $tanggal;
        $siswa->jk = $jk;
        $siswa->alamat = $alamat;
        $siswa->email = $email;
        $siswa->no_hp = $no_hp;
        $siswa->c1 = $c1;
        $siswa->c2 = $c2;
        $siswa->c3 = $c3;
        $siswa->c4 = $c4;
        $siswa->c5 = $c5;
        


        // cek($siswa,'nama_siswa');
        $siswa->save();

        return redirect('siswa');
    }

   

    public function delete($id) {
        $siswa = Siswa::where('id', $id)->first();
        $siswa->delete();

        return redirect('siswa');
    }


}
