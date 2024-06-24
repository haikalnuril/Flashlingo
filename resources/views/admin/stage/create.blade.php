<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/regStyle.css') }}">
</head>
<body class="content" style="margin-top:1580px; margin-bottom:1450px;">
    <form action="/admin/stage" method="post" class="container" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h1 style="color:#efefef; text-align:center;">Buat Stage</h1>
        <hr class="text-light">
        <div class="user-details">
        <div class="input-box">
            <span class="details ">Level</span>
            <input type="text" id="level" name="level" placeholder="Masukkan Level">
            @error('level')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <span class="details ">subjek</span>
            <input type="text" id="subjek" name="subjek" placeholder="Buat Subjek" required>
            @error('jenis')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-bottom" style="width: 388%; " >
            <div class="input-box">
            <label for="gambar1" class="details">Cover</label>
                <input  class="form-control" type="file" id="image" name="image" style="width: 215%; " required>
                @error('cover')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="user-details" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 1</label>
                <input  class="form-control" type="text" id="item1" name="item1" style="width: 215%; " placeholder="Nama Kartu">
                @error('item1')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 1</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar1" name="gambar1">
            @error('gambar1')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 1 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar1_back" name="gambar1_back">
            @error('gambar1_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 2</label>
                <input  class="form-control" type="text" id="item2" name="item2" style="width: 215%; " placeholder="Nama Kartu">
                @error('item2')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 2</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar2" name="gambar2">
            @error('image2')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 2 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar2_back" name="gambar2_back">
            @error('imageBack2')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 3</label>
                <input  class="form-control" type="text" id="item3" name="item3" style="width: 215%; " placeholder="Nama Kartu">
                @error('item3')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 3</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar3" name="gambar3">
            @error('gambar3')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 3 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar3_back" name="gambar3_back">
            @error('gambar3_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 4</label>
                <input  class="form-control" type="text" id="item4" name="item4" style="width: 215%; " placeholder="Nama Kartu">
                @error('item4')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 4</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar4" name="gambar4">
            @error('gambar4')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 4 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar4_back" name="gambar4_back">
            @error('gambar4_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 5</label>
                <input  class="form-control" type="text" id="item5" name="item5" style="width: 215%; " placeholder="Nama Kartu">
                @error('item5')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 5</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar5" name="gambar5">
            @error('gambar5')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 5 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar5_back" name="gambar5_back">
            @error('gambar5_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 6</label>
                <input  class="form-control" type="text" id="item6" name="item6" style="width: 215%; " placeholder="Nama Kartu">
                @error('item6')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 6</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar6" name="gambar6" required>
            @error('gambar6')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 6 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar6_back" name="gambar6_back" required> 
            @error('gambar6_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 7</label>
                <input  class="form-control" type="text" id="item7" name="item7" style="width: 215%; " placeholder="Nama Kartu">
                @error('item7')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 7</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar7" name="gambar7" required>
            @error('gambar7')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 7 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar7_back" name="gambar7_back" required>
            @error('gambar7_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 8</label>
                <input  class="form-control" type="text" id="item8" name="item8" style="width: 215%; " placeholder="Nama Kartu">
                @error('item8')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 8</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar8" name="gambar8" required>
            @error('gambar8')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 8 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar8_back" name="gambar8_back" required>
            @error('gambar8_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 9</label>
                <input  class="form-control" type="text" id="item9" name="item9" style="width: 215%; " placeholder="Nama Kartu">
                @error('item9')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 9</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar9" name="gambar9" required>
            @error('gambar9')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 9 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar9_back" name="gambar9_back" required>
            @error('gambar9_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="user-details border-top pt-2" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Nama Kartu 10</label>
                <input  class="form-control" type="text" id="item10" name="item10" style="width: 215%; " placeholder="Nama Kartu">
                @error('item10')
                <div class="" style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 10</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar10" name="gambar10" required>
            @error('gambar10')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-box">
            <label for="gambar1" class="details">Card 10 Flip</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" id="frame">
            <input class="form-control" type="file" id="gambar10_back" name="gambar10_back" required>
            @error('gambar10_back')
            <div class="" style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        @foreach ( $quizs as $quiz)            
        <div class="user-details" style="width: 388%; " >
            <div class="input-box">
            <label class="details">Gambar Quiz {{$loop->iteration}}</label>
                <input  class="form-control" type="file" id="{{ $quiz }}" name="{{ $quiz }}" style="width: 215%; " required>
            </div>
        </div>
        @endforeach
    </div>
        <div class="button">
            <button type="submit">Daftar</button>
        </div>
    </form>
</body>
</html>