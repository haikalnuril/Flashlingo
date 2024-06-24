<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlashLingo | Quiz</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- lightgallery css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/coursesStyle.css') }}">
</head>
<body>
    <div class="courses">
        <div class="heading position-relative">
            <h1>FLASHLINGO COURSES</h1>
            <h3>Let's Learn!</h3>
            <a href="/admin/stage" class="position-absolute top-20 start-0 translate-middle btn btn-primary" style="margin-top:-40px; margin-left:1550px ">Back</a>
        </div>
        @foreach ($items as $item )
                    
        <div class="courses-list">
            <img src="{{ asset('image/quiz/'.$stage->$item.'.png')}}">
            <div class="details relative">
                <div class="details-sub">
                    <h5 style="text-transform:uppercase">Level {{ $stage->level }} </h5>
                </div>
                <div class="">
                    <h5 style="text-transform:uppercase" class="fw-bold fs-3 text-center btn btn-info position-absolute top-70 start-50 translate-middle">{{ $stage->$item }}</h5>
                </div>
                <!-- <a href="/course/level/{{ $stage->level }}" id="level1-button" style="text-transform:uppercase">{{ $stage->$item }}</a> -->
            </div>
        </div>
        @endforeach

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

