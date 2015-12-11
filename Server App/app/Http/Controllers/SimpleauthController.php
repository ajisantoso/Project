<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\RegistrationRequest;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Mail;
use Redirect;
use View;
use App\Http\Requests\LoginRequest;
use Validator;
use Input;

class SimpleauthController extends Controller
{
    public function register(){
      return view('registration.registration');
    }

    public function userRegister (RegistrationRequest $request){
      $rules = array(
        'name'             => 'required',                      
        'email'            => 'required',     
        'password'         => 'required',   
      );

      $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
        // get the error messages from the validator
        $messages = $validator->messages();
        // redirect our user back to the form with the errors from the validator
        return view('registration')
            ->withErrors($validator);
       } else {
      
      $input = $request->all();
      $password = bcrypt($request->input('password'));
      $input['password'] = $password;
      $input['activation_code']=str_random(60).$request->input('email');
      $register = User::create($input);
      $data= [
        'name' =>$input['name'],
        'activation_code' =>$input['activation_code']
      ];
      //$this->sendEmail($data,$input);
      return view('registration.registration')->withSuccess('Pendaftaran Berhasil');;
    }
  }

    public function sendEmail($data,$input){
      Mail::send('emails.register',$data,function($message) use ($input){
        $message->from('ajitrisantoso@gmail.com','RAI');
        $message->to($input['email'],$input['name'])->subject('Please verifiy your account registration!');
      });
    }

    public function activate($code, User $user){

    if ($user->activateAccount($code)) {
 
        return 'Activated!';
      }
    return 'Fail';
   }

    public function login(LoginRequest $request){
 
     $credentials = $request->only('email', 'password');
     if(Auth::attempt($credentials)){

       if (Auth::user()->active == 0) {

         Auth::logout();
         return 'Please activate your account';
       }
       else{
        if(Auth::user()->role =="user"){
           $nama = Auth::user()->name;
          return View('user');
        }else{
          $nama = Auth::user()->name;
          return View::make('admin')->with('nama',$nama);
        }
     }
   }
     else{
      return 'The username and password do not match';
    }
  }
    
  public function logout()
  {

    Auth::logout();
    return redirect()->route('index');
  }

   public function landing()
  {
    return redirect()->route('landing');
  }


}

