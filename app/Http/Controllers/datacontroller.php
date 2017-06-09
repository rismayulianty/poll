<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;

class datacontroller extends Controller
{
    //
    public function test()
    {
    	$a = data::all();
    	return $a;
    }
    public function uji($id)
    {
    	$a = data::find($id);
    	return $a;
    }
    public function index()
    {
    	$tampilan = data::all();
    	return view('index', compact('tampilan'));   

    }
    public function test3($data)
    {
        $koplak = ['binatang'=> ['kucing','macan'],
              'kendaraan'=> ['motor','mobil'],
              'laptop'=> ['aser','asus']];
        $haha = $koplak [$data];
        return view('tugas', compact('haha'));   

    }
}