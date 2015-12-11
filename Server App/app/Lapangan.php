<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangan';
    protected $fillable = array('harga','ketersediaan','harga','tipe_id','vendor_id');
    public $timestamps = true;

    public function tipe_lap() { 
		return $this->hasOne('App\tipe_lap','tipe_id','id'); 
	} 
}
