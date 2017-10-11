<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSiswa;

class DataSiswaController extends Controller
{
    //
    public function tambah()
    {
      $new = new DataSiswa;
      $new->nama = "Ahmad Irfan";
      $new->alamat = "Subang";
      $new->save();
    }
}
