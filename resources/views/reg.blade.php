<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    
    <link rel="stylesheet" href="{{ asset('css/regStyle.css') }}">
</head>
<body class="content">
    <form action="{{ route('add') }}" method="post" class="container">
        @method('POST')
        @csrf
        <div class="user-details">
        <div class="input-box">
            <span class="details ">Nama</span>
            <input type="text" id="name" name="name" placeholder="Ketik nama Anda" required>
            @error('name')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <span class="details ">Username</span>
            <input type="text" id="username" name="username" placeholder="Buat username" required>
            @error('username')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <span class="details ">Email</span>
            <input type="email" id="email" name="email" placeholder="Ketik email Anda" required>
            @error('email')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <span class="details ">Nomor Telepon</span>
            <input type="tel" id="no_telepon" name="no_telepon" placeholder="Ketik nomor telepon Anda" required>
            @error('nomor_telepon')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <span class="details ">Password</span>
            <input type="password" id="password" name="password" placeholder="Buat password" required>
            @error('password')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <span class="details ">Konfirmasi Password</span>
            <input type="password" id="password" name="password_confirmation" placeholder="Konfirmasi password" required>
        </div>
    </div>
        <div class="button">
            <button type="submit">Daftar</button>
        </div>
    </form>
</body>
</html>