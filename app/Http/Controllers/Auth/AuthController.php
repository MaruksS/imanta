<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\CreateUser;
use App\Http\Requests\LoginUser;
use \Auth;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }


    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(CreateUser $request){
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request['password']);
        $user->save();
        return redirect('admin');
    }
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(LoginUser $data){
        $password = $data['password'];
        $email=$data['email'];
        if(Auth::attempt(array('email' => $email, 'password' => $password))){
            return redirect('zinas');
        } else {
            return redirect('admin');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect('zinas');
    }

}
