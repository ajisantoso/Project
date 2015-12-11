<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vendor;
use Auth;
use Validator;
use Redirect;
use App\User;
use Input;
use App\Lapangan;
use DB;
use App\tipe_lap;

class AdminController extends Controller
{
     public function VendorRegister (Request $request){

      $rules = array(
        'nama'             => 'required',                      
        'alamat'            => 'required',     
        'telepon'         => 'required',   
      );

      $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
        // get the error messages from the validator
        $messages = $validator->messages();
        // redirect our user back to the form with the errors from the validator
        return view('admin')
            ->withErrors($validator);
       } else {
      
      $input = $request->all();
      $input['user_id'] =Auth::user()->id;
      $register = Vendor::create($input);
      $data = [
        'user_id' => $input['user_id'],
        'nama' =>$input['nama'],
        'alamat' =>$input['alamat'],
        'telepon' =>$input['telepon'],
        'fasilitas' =>$input['fasilitas'],
        'peraturan' =>$input['peraturan'],
      ];

      return view('admin')->withSuccess('Vendor Berhasil Ditambahkan');
    }
  }

  public function lapanganRegister (Request $request){

      $rules = array(
        'harga'             => 'required',                      
      );

      $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
        // get the error messages from the validator
        $messages = $validator->messages();
        // redirect our user back to the form with the errors from the validator
        return view('views')
            ->withErrors($validator);
       } else {
      
      $input = $request->all();

      $register = lapangan::create($input);
      $tipe_lapangan = $input['tipe_id'];
      $data = [
        'tipe_id' =>$input['tipe_id'],
        'harga' =>$input['harga'],
        'vendor_id' =>$input['vendor_id'],
      ];
      
       $vendor = DB::table('vendors')->get();
        $lap_jenis = tipe_lap::lists('tipe', 'id');
        $vendor_name = Vendor::lists('nama', 'id');
                return view('admin.views', ['vendor' => $vendor],compact('lap_jenis','vendor_name'))->withSuccess('Lapangan Berhasil Ditambahkan');
    }
  }

}
