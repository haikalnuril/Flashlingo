<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlashLingo | UPDATE STAGE</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- lightgallery css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/coursesStyle.css') }}">
</head>
<body>
    <div class="w-12">
        <div class="heading">
            <h1>FLASHLINGO COURSES</h1>
            <h3>Let's Learn!</h3>
        </div>
        <form action="{{ route('admin-stage.update', $stage->id) }}" method="post" enctype="multipart/form-data" class="row mx-5 justify-content-center my-5">
            @method('PUT')
            @csrf
            @foreach ($gambars as $gambar )        
            <div class="courses-list col-4 mx-5 mt-4">
                <img src="{{ asset('image/'.$stage->$gambar)}}">
                <input type="hidden" name="old{{ $gambar }}" id="old{{ $gambar }}" value="{{ $stage->$gambar}}">
                <div class="details">
                    <div class="details-sub">
                        <input class="form-control" type="file" id="{{ $gambar }}" name="{{ $gambar }}">
                    </div>
                </div>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary mt-3 mx-5">Perbarui</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

