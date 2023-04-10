<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PetugasController extends Controller
{
    public function index()
    {
        $data['petugas'] = Petugas::all();

        dd($data);
    }

}
