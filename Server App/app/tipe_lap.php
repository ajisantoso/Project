<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\lapangan;
class tipe_lap extends Model
{
	public $table = 'tipe_lap';
    protected $fillable =['tipe','description','image'];
     public function tipe_lap()
    {
        return $this->belongsTo('lapangan', 'id');
    }

}

