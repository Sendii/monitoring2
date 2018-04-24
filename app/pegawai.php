<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawais";
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'id_pegawai';
}
