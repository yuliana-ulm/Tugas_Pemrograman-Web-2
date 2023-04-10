<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $data['name'] = 'Yuliana';
        $data['email'] = '2110131220001@gmail.com';

        return view('about', $data);
    }
}
