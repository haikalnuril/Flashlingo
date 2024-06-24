<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Level {{ $stage->level }}: {{ $stage->jenis }}</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

      :root {
        --orange: #f9ba60;
        --pink: rgb(254, 99, 71);
        --black: #1d1c1c;
        --white: #fff;
        --grey: rgb(156, 175, 188);
        --queen-blue: #436B95;
        --blue-nova: #5B6D92;
        --purple-navy: #4E5180;
        --daring-indigo: #374874;
        --indigo-ink: #3B4354;
        --periwinkle: #97A3DA;
        --smoky-violet: #647E9E;
        --blue-bell: #9999CC;
        --indigo-sw: #5B6D92;
        --bluish-purple: #666699;
        --blue-calico: #5868AE;
        --light-ice: #C7FAF6;
        --freezin-blue: #9BDCED;
        --ice-blue: #AEE9E7;
        --frost-blue: #C7FAF6;
        --orange-summer: #EF7849;
        --penguin-grey: #3F3F41;
        --blue-sea: #216192;
        --sky-blue: #CCEDFE;
      }

      html,
      body {
        font-family: 'Poppins', sans-serif;
        height: 100%;
        margin: 0;
        padding: 0;
      }

      nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: var(--smoky-violet);
        padding: 1rem;
      }

      .image img {
        width: 20%;
        height: 10%;
      }

      .nav-title {
        color: var(--orange);
        font-weight: 600;
        font-size: 1.5rem;
        flex-grow: 1;
        margin-left: 100px;
      }

      nav ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      nav ul li {
        margin: 0 1rem;
      }

      nav ul li a {
        color: #fff;
        text-decoration: none;
      }

      section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        background-color: var(--ice-blue);
      }

      .card {
        perspective: 1000px;
        margin: 1rem;
        width: 200px;
        height: 300px;
      }

      .card-container {
        display: grid;
        grid-template-columns: 1fr;
        width: 100%;
        height: 100%;
        transition: transform 1s;
        transform-style: preserve-3d;
        border: 2px solid black;
      }

      .card-container:hover {
        transform: rotateY(180deg);
      }

      .card-front {
        grid-area: 1 / 1;
      }

      .card-front,
      .card-back {
        width: 100%;
        height: 100%;
        position: absolute;
        backface-visibility: hidden;
      }

      .card-back {
        grid-area: 1 / 1;
        transform: rotateY(180deg);
      }

      .card-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="image">
        <img src="{{ asset('image/logo.png') }}" alt="">
      </div>
      <div class="nav-title">Level {{ $stage->level }}: {{ $stage->jenis }}</div>
      <ul>
        <li><a href="/course">Back</a></li>
        <li><a href="/course/quiz/{{ $stage->level }}">Quiz</a></li>
      </ul>
    </nav>
    <section>
      <!-- CARD - 1 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar1) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar1_back) }}" />
          </div>
        </div>
      </div>

      <!-- CARD - 2 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar2) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar2_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 3 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar3) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar3_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 4 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar4) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar4_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 5 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar5) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar5_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 6 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar6) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar6_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 7 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar7) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar7_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 8 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar8) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar8_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 9 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar9) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar9_back) }}" />
          </div>
        </div>
      </div>
      <!-- CARD - 10 -->
      <div class="card">
        <div class="card-container">
          <div class="card-front">
            <img src="{{ asset('image/'. $stage->gambar10) }}" />
          </div>
          <div class="card-back">
            <img src="{{ asset('image/'. $stage->gambar10_back) }}" />
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
