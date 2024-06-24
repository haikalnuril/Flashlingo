@extends('Auth.master')
@section('title', 'FlashLingo | Forgot Password')
@section('container')
<form action="{{ route('forgot-password-act') }}" method="post" class="container">
    @method('POST')
    @csrf
    <h1 style="color:#efefef; text-align:center;">Lupa Kata Sandi</h1>
    <hr>
    <h5 style="color:#efefef; text-align:center; margin-top:10px">Masukkan E-mail Anda Yang Telah Terdaftar</h5>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
        <div class="user-details">
            <div class="input-box">
                <span class="details ">Email</span>
                <input type="email" id="email" name="email" placeholder="Ketik email Anda"style="width: 213%; " required>
                @error('email')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="button">
            <button type="submit">Kirim</button>
        </div>
        </form>
@endsection