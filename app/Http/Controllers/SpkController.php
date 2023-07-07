<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembobotan;
use App\Models\Admin;


class SpkController extends Controller
{
    public function test(){
        return view ('test');
    }

    public function hasil(){
        $rslt = $this->saw();
        return view('hasil', ['results' => collect($rslt)->sortByDesc('hasil')->values()->all()]);


    }

    //validasi
   public function storeSpk(Request $request){
        $validated = $request->validate([
            'nama' => ['required'],
            'nisn' => ['required','numeric'],
            'tempatlahir' => ['required'],
            'tanggallahir' => ['required'],
            'email' => ['required','email:rfc,dns'],
            'hp' => ['required','numeric'],
            'nr' => ['required','numeric'],
            'no' => ['required','numeric'],
            'js' => ['required','numeric'],
            'to' => ['required','numeric']
        ], [
            'required' => 'Tidak boleh kosong',
            'numeric' => 'Masukkan angka!'
        ]);


        //kriteria
        $c1 = $request->input('nr');
        $c2 = $request->input('po');
        $c3 = $request->input('no');
        $c4 = $request->input('js');
        $c5 = $request->input('to');

        //add tabel kedatabase
        $be = new Siswa;
        $be->nis = $request->input('nisn');
        $be->nama_siswa = $request->input('nama');
        $be->tempat_lahir = $request->input('tempatlahir');
        $be->tanggal_lahir = $request->input('tanggallahir');
        $be->jk = $request->input('jk');
        $be->alamat = $request->input('alamat');
        $be->email = $request->input('email');
        $be->no_hp = $request->input('hp');
        $be->c1 = $c1;
        $be->c2 = $c2;
        $be->c3 = $c3;
        $be->c4 = $c4;
        $be->c5 = $c5;
        $be->save();
        
        $rslt = $this->saw();
        return view('hasil', ['results' => collect($rslt)->sortByDesc('hasil')->values()->all()]);
    }

    public function saw(){
        $alternatives = Siswa::all();
        $weights = [0.25, 0.2, 0.15, 0.15, 0.25]; // Bobot kriteria
        $pbg1 = Siswa::max('c1');
        $pbg2 = Siswa::min('c2');
        $pbg3 = Siswa::max('c3');
        $pbg4 = Siswa::max('c4');
        $pbg5 = Siswa::max('c5');

        $rslt = [];
        $nomor = 0;

        foreach ($alternatives as $alt) {
            $c1 = $alt->c1;
            $c2 = $alt->c2;
            $c3 = $alt->c3;
            $c4 = $alt->c4;
            $c5 = $alt->c5;

            // Normalisasi setiap nilai kriteria
            $norm_c1 = $c1/$pbg1;
            $norm_c2 = $pbg2/$c2 ;
            $norm_c3 = $c3/$pbg3;
            $norm_c4 = $c4/$pbg4;
            $norm_c5 = $c5/$pbg5;


            // Hitung hasil SAW
            $hasil = ($weights[0] * $norm_c1)+ ($weights[1] * $norm_c2)  + ($weights[2] * $norm_c3)
                + ($weights[3] * $norm_c4) + ($weights[4] * $norm_c5);

            $nomor++;

            $nama_alt = $alt->nama_siswa;
            $jk = $alt->jk;
            $alamat = $alt->alamat;
            $rslt[] = ['nomor' => $nomor, 'nama_alt' => $nama_alt, 'jk' => $jk, 'alamat' => $alamat,'hasil'=>$hasil];
            arsort($rslt);

        }

        return $rslt;
    }
}