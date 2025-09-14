<?php

namespace App\Http\Controllers\Auth; 
use App\Http\Controllers\Controller; 
use App\Models\User; 
use Illuminate\Foundation\Auth\RegistersUsers; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request; 
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
   use RegistersUsers; 
    protected $redirectTo = '/dashboard'; 
    public function __construct() 
    { 
        $this->middleware('guest'); 
    } 
    protected function validator(array $data) 
    { 
        return Validator::make($data, [ 
            'name' => ['required', 'string', 'max:255'], 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
            'password' => ['required', 'string', 'min:8', 'confirmed'], 
        ]); 
    } 
    protected function create(array $data) 
    { 
        return User::create([ 
            'name' => $data['name'], 
            'email' => $data['email'], 
            'password' => Hash::make($data['password']), 
        ]); 
    } 
    public function register(Request $request) 
    { 
        $this->validator($request->all())->validate(); 
        event(new Registered($user = $this->create($request->all()))); 
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login 
        dengan akun Anda yang baru.'); 
    } 

}
