<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pbbj extends Model
{
    public function Barang() {
    	return $this->hasMany('App\barang', 'id', 'id');
    }

    public function Barang2() {
    	return $this->hasMany('App\barangrealisasi', 'id', 'id');
    }

    public function Barang3() {
    	return $this->hasMany('App\barangrealisasi2', 'id', 'id');
    }

    protected $table = 'pbbjs';

    public function unitkerja() {
    	return $this->hasMany('App\unitkerja', 'id_unit', 'id_unit');
    }
}
