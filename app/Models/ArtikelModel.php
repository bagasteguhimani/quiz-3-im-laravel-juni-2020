<?php

namespace App\models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
	public static function get_all(){
		$artikel = DB::table('artikel')->get();
		return $artikel;
	}

	public static function simpan($data){
		unset($data["_token"]);
		$new_artikel = DB::table('artikel')->insert($data);
		return $new_artikel;
	}
}