<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Lapangan;
use App\tipe_lap;
use App\vendor;
use App\user;

class userController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        //$lapanganList = lapangan::all();
        //$tipeList = tipe_lap::all();
        $vendor = DB::table('vendors')->get();
        $lapangan = DB::table('lapangan')->get();
  
                return view('user.views', ['vendor' => $vendor, 'lapangan' => $lapangan]);
    }
}