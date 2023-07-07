<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    public function index(){
        return view('admin/kriteria', [
            'krt' => Kriteria::all()
        ]);
    }

}
