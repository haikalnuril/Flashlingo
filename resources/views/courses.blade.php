<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlashLingo</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- lightgallery css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/coursesStyle.css') }}">
</head>
<body>
    <div class="courses">
        <div class="heading">
            <h1>FLASHLINGO COURSES</h1>
            <h3>Let's Learn!</h3>
        </div>
        @foreach ($stages as $stage )            
        <div class="courses-list">
            <img src="{{ asset('image/'.$stage->cover)}}">
            <div class="details">
                <div class="details-sub">
                    <h5 style="text-transform:uppercase">{{ $stage->jenis }}</h5>
                </div>
                <a href="/course/level/{{ $stage->level }}" id="level1-button">Level {{ $stage->level }}</a>
            </div>
        </div>
        @endforeach

    </div>

</body>
</html>

