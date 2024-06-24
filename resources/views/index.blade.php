

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlashLingo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css ')}}">
</head>

<body>

    <!-- header section starts -->
    
    <header class="header">
        
        <div class="image">
            <img src="{{ asset('image/logo.png') }}" alt="">
        </div>
    
        <nav class="navbar">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang Kami</a>
            <a href="#whatTheySay">Apa Kata Mereka</a>
            <a href="#contact">Kontak</a>
        </nav>
    
        <div class="icons">
            <div class="fas fa-user" id="login-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
    
        <form action="{{ route('login') }}" class="login-form" method="post">
            @method('POST')
            @csrf
            <h3>Login</h3>
            <input type="text" name="username" placeholder="Your Username" class="box" required>
            <input type="password" name="password" placeholder="Your Password" class="box" required>
            <p>Lupa password? <a href="{{ route('forgot-password') }}">Klik di sini</a></p>
            <p>Belum memiliki akun? <a href="/register">Buat sekarang</a></p>
            <input type="submit" name="login" value="Login Now" onclick="" class="btn">
        </form>

    
    </header>
    
    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>English Playtime, <span>Where Fun Meets Fluency!</span></h3>
            <a href="https://play.google.com/store/games?hl=id&gl=US&pli=1" class="btn">Unduh Aplikasinya</a>
        </div>

        <div class="image">
            <img src="{{ asset('image/SplashBG.png') }}" alt="">
        </div>

        <div class="custom-shape-divider-bottom-1708492091">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about us section starts -->

    <section class="about" id="about">

        <h1 class="heading"> <span>Tentang </span>Kami</h1>

        <div class="row">

            <div class="image">
                <img src="{{ asset('image/abt-us.png') }}" alt="">
            </div>

            <div class="content">
                <h3>Belajar kosakata dasar menggunakan flashcards</h3>
                <p>Dengan FlashLingo, anak-anak dapat memulai perjalanan bahasa Inggris mereka dengan mempelajari kosakata umum. Bersama kami, Anda dapat membantu melatih daya ingat anak Anda dengan kartu flash yang menyenangkan dan menarik. Flashcards kami terdiri dari gambar-gambar lucu.</p>
                <p>Modul FlashLingo terdiri dari sembilan level dengan mini kuis di akhir setiap level. Kesembilan level ini dipisahkan berdasarkan kategori: warna, bentuk, angka, hewan, anggota keluarga, pakaian, makanan, bagian tubuh, dan tempat. Mari mulai perjalanan bahasa Inggris anak Anda dengan FlashLingo!</p>
            </div>
            
        </div>

    </section>

    <!-- about us section ends -->

    <!-- what they say section starts -->

    <section class="whatTheySay" id="whatTheySay">

        <h1 class="heading">Apa <span>Kata</span> Mereka</h1>

        <div class="box-container">

            <div class="box">
                <img src="{{ asset('image/rev1.jpg') }}" alt="">
                <h3>Naomi, 9 tahun</h3>
                <p>FlashLingo adalah sahabatku! lebih mudah untuk belajar bahasa Inggris ketika melihat gambar-gambar yang menyenangkan. Level favoritku adalah angka karena sekarang aku bisa memamerkan kemampuan berhitung kepada teman-teman!</p>
            </div>

            <div class="box">
                <img src="{{ asset('image/rev2.jpg') }}" alt="">
                <h3>Amy, 6 tahun</h3>
                <p>Aktivitasku sepulang sekolah adalah belajar bahasa Inggris dengan FlashLingo. Aku suka mempelajari hal-hal baru dengan FlashLingo. Aku suka menulis kata-kata di buku sehingga aku dapat mengingatnya.</p>
            </div>

            <div class="box">
                <img src="{{ asset('image/rev3.jpg') }}" alt="">
                <h3>Lori, 4 tahun</h3>
                <p>Papa aku bekerja di Amerika. Jadi aku menggunakan FlashLingo untuk belajar bahasa Inggris dan aku berharap suatu hari nanti bisa mengunjungi papa dan bisa berbicara dengan orang-orang di sana!</p>
            </div>
        </div>

    </section>

    <!-- what they say section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Hubungi</span> Kami</h1>

        <div class="icons-container">

            <div class="icons">
                <i class="fab fa-instagram"></i>
                <h3>@flashlingo</h3>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>flashlingo@gmail.com</h3>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>+62-123-456-789</h3>
            </div>
        </div>
    </section>


    <!-- contact say section ends -->
</body>
@if (session()->has('login_error'))
    <script>
        alert("{{ session('login_error') }}");
    </script>
@elseif (session()->has('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@elseif (session()->has('failed'))
    <script>
        alert("{{ session('failed') }}");
    </script>
@endif
<script src="{{ asset('js/script.js') }}"></script>

</html>