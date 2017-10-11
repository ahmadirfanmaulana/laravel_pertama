<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    //
    protected $table = 'data_siswas';
    protected $fillable = ['nama','alamat'];
}
