<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function dashboard(){
    return view('admin.dashboard');
}
public function Register(){
    return view('admin.register');
}
public function store(Request $request){
$request ->validate([
'name'=>'required|string',
'email'=>'required|email|unique:users',
'password'=>'required|string|min:6'
]);
User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>Hash::make($request->password)
]);
return redirect()
        ->route('login')
        ->with('success', 'Registration successful!');


}
public function Login(){
    return view('admin.login');
}
public function Login_check(Request $request){
    $request ->validate([

'email'=>'required|email',
'password'=>'required|string|min:6'
]);
if (Auth::attempt(['email'=>$request->email,'password'=>$request->password] )){
    return redirect()->route('dashboard');
}
else{
    return redirect()->route('login');
}
}


public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
}


}
