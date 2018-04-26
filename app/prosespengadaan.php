<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prosespengadaan extends Model
{
    public function getPpbj() {
    	return $this->belongsTo('App\pbbj', 'id_ppbj', 'id');
    }
}
