@extends('Auth.master')
@section('title', 'FlashLingo | Validasi Password')
@section('container')
<form action="{{ route('validasi-forgot-password-act') }}" method="post" class="container">
    @method('POST')
    @csrf
    <h1 style="color:#efefef; text-align:center;">Lupa Kata Sandi</h1>
    <hr>
    <h5 style="color:#efefef; text-align:center; margin-top:10px">Masukkan Kata Sandi Yang Baru</h5>
        <div class="user-details" style="display: block;">
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="input-box">
                <span class="details ">Email</span>
                <input type="email" id="email" name="email" style="width: 213%;" placeholder="Ketik email Anda" required>
                @error('email')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input-box">
                
                <span class="details ">Password Baru</span>
                <input type="password" id="password" name="password" placeholder="Ketik Password Baru Anda" style="width: 213%; " required>
                @error('password')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input-box">
                <span class="details ">Konfirmasi Password</span>
                <input type="password" id="password" name="password_confirmation" style="width: 213%;" placeholder="Konfirmasi password" required>
            </div>
        </div>
        <div class="button">
            <button type="submit">Kirim</button>
        </div>
        </form>
@endsection