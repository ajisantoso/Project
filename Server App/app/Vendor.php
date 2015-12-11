<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';
    protected $fillable = array('nama','alamat','telepon','fasilitas','peraturan','user_id');
    public $timestamps = true;

    public function lapangan() { 
		return $this->hasMany('App\Lapangan'); 
	} 

}
