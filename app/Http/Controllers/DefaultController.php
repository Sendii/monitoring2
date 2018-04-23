<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\pegawai;
use Auth;


class DefaultController extends Controller
{
	public function test() {
		$data = pegawai::all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
}
