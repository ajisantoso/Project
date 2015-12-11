<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Lapangan;
use App\tipe_lap;
use App\vendor;

class lapController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $tipe_lap = DB::table('tipe_lap')->get();
                return view('admin.viewJenisLap',['tipe_lap' => $tipe_lap]);
    }
}