<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pbbj extends Model
{
    public function Barang() {
    	return $this->hasMany('App\barang', 'id', 'id');
    }

    protected $table = 'pbbjs';

    public function unitkerja() {
    	return $this->hasMany('App\unitkerja', 'id_unit', 'id_unit');
    }
}