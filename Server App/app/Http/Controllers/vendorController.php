<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Lapangan;
use App\tipe_lap;
use App\vendor;

class VendorController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $vendor = DB::table('vendors')->get();
        $lap_jenis = tipe_lap::lists('tipe', 'id');
        $vendor_name = Vendor::lists('nama', 'id');
                return view('admin.views', ['vendor' => $vendor],compact('lap_jenis','vendor_name'));
    }
}