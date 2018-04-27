<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prosespengadaan extends Model
{
    public function getPpbj() {
    	return $this->belongsTo('App\pbbj', 'id_ppbj', 'id');
    }

    public function Barang() {
        return $this->hasMany('App\barang', 'id', 'id');
    }

    public function Barang2() {
        return $this->hasMany('App\barangrealisasi', 'id', 'id');
    }

    public function Barang3() {
        return $this->hasMany('App\barangrealisasi2', 'id', 'id');
    }
}
