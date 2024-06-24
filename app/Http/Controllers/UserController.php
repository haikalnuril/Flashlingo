<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function store (request $request){
        $validateRegis = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'no_telepon' => 'required|numeric',
            'password' => 'required|min:5|confirmed',
        ]);

        $user = new User();
        $user->name = $validateRegis['name'];
        $user->username = $validateRegis['username'];
        $user->email = $validateRegis['email'];
        $user->no_telepon = $validateRegis['no_telepon'];
        $user->password = bcrypt($validateRegis['password']);
        $user->save();
        return redirect('/');
    }
    public function login (Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' =>'required'
        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
                if ($user->isAdmin == 1) {
                    $request->session()->regenerate();
                    return redirect()->intended('/admin');
                } else {
                    $request->session()->regenerate();
                    return redirect()->intended('/course');
                }
        } else {
            session()->flash('login_error', 'Login Failed');
            return redirect()->route('home') ;
        }
        
    }
    public function Logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function forgot_password() {
        return view('Auth.forgot-password');
    }
    public function forgot_password_act(Request $request){
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email yang anda masukkan tidak valid',
            'email.exists' => 'Email yang anda masukkan tidak terdaftar'
        ];
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], $customMessage);

        $token = \Str::random(60);

        PasswordResetToken::updateOrCreate(
        [
            'email' => $request->email
        ],
        [
            'email' =>$request->email,
            'token' => $token,
            'created_at' => now()
        ]);

        $email = $request->email;

        Mail::to($request->email)->send(new ResetPasswordMail($token, $email));

        
        return redirect()->route('forgot-password')->with('success', 'Kami telah mengirimkan link reset password ke email anda!');
    }

    public function validasi_forgot_password(Request $request, $token) {
        $getToken = PasswordResetToken::where('token', $token)->first();
        if(!$getToken) {
            return redirect('/')->with('failed', 'Token tidak valid!');
        }
        return view('Auth.validasi-token', compact('token'));
    }

    public function validasi_forgot_password_act(Request $request){
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email yang anda masukkan tidak valid',
            'email.exists' => 'Email yang anda masukkan tidak terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 5 karakter',
            'password.confirmed' => 'Password yang anda masukkan tidak cocok'
        ];

        $request->validate([
            'email' =>'required|email|exists:users,email',
            'password' => 'required|min:5|confirmed'
        ], $customMessage);

        $token = PasswordResetToken::where('token', $request->token)->first();

        if(!$token){
            return redirect('/')->with('failed', 'Token tidak valid!');
        }

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return redirect('/')->with('failed', 'Email tidak terdaftar!');
        }

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        $token->delete();

        return redirect('/')->with('success', 'Password Berhasil Direset!');
    }
}
