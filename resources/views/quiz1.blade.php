<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Level 1 Quiz</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        --orange: #f9ba60;
        --pink: rgb(254, 99, 71);
        --black: #1d1c1c;
        --white: #fff;
        --grey: rgb(156, 175, 188);
        --queen-blue: #436b95;
        --blue-nova: #5b6d92;
        --purple-navy: #4e5180;
        --daring-indigo: #374874;
        --indigo-ink: #3b4354;
        --periwinkle: #97a3da;
        --smoky-violet: #647e9e;
        --blue-bell: #9999cc;
        --indigo-sw: #5b6d92;
        --bluish-purple: #666699;
        --blue-calico: #5868ae;
        --light-ice: #c7faf6;
        --freezin-blue: #9bdced;
        --ice-blue: #aee9e7;
        --frost-blue: #c7faf6;
        --orange-summer: #ef7849;
        --penguin-grey: #3f3f41;
        --blue-sea: #216192;
        --sky-blue: #ccedfe;
      }

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        background-color: var(--freezin-blue);
      }
      .container {
        width: 90%;
        height: 90%;
        background-color: #ffffff;
        padding: 3em 0.5em;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 0.8em;
      }
      h3 {
        text-align: center;
        width: 60%;
        margin: 0 auto 2em auto;
        font-size: 1.2em;
        font-weight: 600;
        letter-spacing: 0.03em;
        line-height: 1.8em;
        color: #010c39;
      }
      .draggable-objects,
      .drop-points {
        display: flex;
        justify-content: space-around;
        padding: 2em;
        text-align: center;
      }
      .draggable-image {
        display: center;
        cursor: move;
      }
      img {
        display: center;
        width: 8em;
        height: 8em;
        filter: drop-shadow(0 0.3em 0.9em rgba(0, 0, 0, 0.25));
      }
      .countries {
        display: center;
        width: 10em;
        height: 8em;
        display: grid;
        place-items: center;
        border: 0.25em dashed #010c39;
        border-radius: 0.8em;
      }
      .dropped {
        padding: 0;
        background-color: #e5ffc8;
      }
      .controls-container {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
        background-color: var(--smoky-violet);
        flex-direction: column;
        top: 0;
      }
      .controls-container button {
        font-size: 1.12em;
        padding: 0.8em 1em;
        border-radius: 0.2em;
        border: none;
        outline: none;
        color: #010c39;
        letter-spacing: 0.06em;
        cursor: pointer;
        margin: 0.5em 0; /* Add margin to create space between buttons */
      }
      .container-button {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .container-button button {
        font-size: 1.12em;
        padding: 0.8em 1em;
        border-radius: 0.2em;
        border: none;
        outline: none;
        color: #010c39;
        letter-spacing: 0.06em;
        cursor: pointer;
      }
      .controls-container p {
        color: #ffffff;
        font-size: 2em;
        margin-bottom: 1em;
      }
      .hide {
        display: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h3>Letakkan Gambar Sesuai Warna!</h3>
      <div class="draggable-objects"></div>
      <div class="drop-points"></div>
      <div class="container-button">
        <button id="submit">Check</button>
      </div>
    </div>
    <div class="controls-container">
      <p id="result"></p>
      <p id="score"></p>
      <button id="start">Start Game</button>
      <form action="{{ route('update-quiz', ['level'=>$stage->level]) }}" method="POST">
        @csrf
        <input id="hasilQuiz" type="hidden" value=""  name="nilai" >
        <button id="backToCourses" type="submit" class="hide">Level Berikutnya</button>
      </form>
    </div>
    <script>
      //Initial References
      let draggableObjects;
      let dropPoints;
      let draggedElementData;
      let droppableElementData;
      const startButton = document.getElementById("start");
      const checkButton = document.getElementById("submit");
      const result = document.getElementById("result");
      const score = document.getElementById("score");
      const controls = document.querySelector(".controls-container");
      const dragContainer = document.querySelector(".draggable-objects");
      const dropContainer = document.querySelector(".drop-points");
      const backToCoursesButton = document.getElementById("backToCourses");
      const data = [
        "{{ $stage->item1 }}",
        "{{ $stage->item2 }}",
        "{{ $stage->item3 }}",
        "{{ $stage->item4 }}",
        "{{ $stage->item5 }}",
        "{{ $stage->item6 }}",
        "{{ $stage->item7 }}",
        "{{ $stage->item8 }}",
        "{{ $stage->item9 }}",
        "{{ $stage->item10 }}",
      ];

      let deviceType = "";
      let initialX = 0,
        initialY = 0;
      let currentElement = "";
      let moveElement = false;

      //Detect touch device
      const isTouchDevice = () => {
        try {
          //We try to create Touch Event (It would fail for desktops and throw error)
          document.createEvent("TouchEvent");
          deviceType = "touch";
          return true;
        } catch (e) {
          deviceType = "mouse";
          return false;
        }
      };

      let count = 0;

      //Random value from Array
      const randomValueGenerator = () => {
        return data[Math.floor(Math.random() * data.length)];
      };

      //Win Game Display
      const stopGame = () => {
        controls.classList.remove("hide");
        startButton.classList.remove("hide");
        backToCoursesButton.classList.remove("hide");
      };

      //Drag & Drop Functions
      function dragStart(e) {
        if (isTouchDevice()) {
          initialX = e.touches[0].clientX;
          initialY = e.touches[0].clientY;
          //Start movement for touch
          moveElement = true;
          currentElement = e.target;
        } else {
          //For non touch devices set data to be transfered
          e.dataTransfer.setData("text", e.target.id);
        }
      }

      //Events fired on the drop target
      function dragOver(e) {
        e.preventDefault();
      }

      //For touchscreen movement
      const touchMove = (e) => {
        if (moveElement) {
          e.preventDefault();
          let newX = e.touches[0].clientX;
          let newY = e.touches[0].clientY;
          let currentSelectedElement = document.getElementById(e.target.id);
          currentSelectedElement.parentElement.style.top =
            currentSelectedElement.parentElement.offsetTop -
            (initialY - newY) +
            "px";
          currentSelectedElement.parentElement.style.left =
            currentSelectedElement.parentElement.offsetLeft -
            (initialX - newX) +
            "px";
          initialX = newX;
          initialY - newY;
        }
      };

      const drop = (e) => {
        e.preventDefault();
        //For touch screen
        if (isTouchDevice()) {
          moveElement = false;
          //Select country name div using the custom attribute
          const currentDrop = document.querySelector(
            `div[data-id='${e.target.id}']`
          );
          //Get boundaries of div
          const currentDropBound = currentDrop.getBoundingClientRect();
          //if the position of flag falls inside the bounds of the countru name
          if (
            initialX >= currentDropBound.left &&
            initialX <= currentDropBound.right &&
            initialY >= currentDropBound.top &&
            initialY <= currentDropBound.bottom
          ) {
            currentDrop.classList.add("dropped");
            //hide actual image
            currentElement.classList.add("hide");
            currentDrop.innerHTML = ``;
            //Insert new img element
            currentDrop.insertAdjacentHTML(
              "afterbegin",
              `<img src= {{ asset('image/quiz/${currentElement.id}.png') }}>`
            );
            count += 1;
          }
        } else {
          //Access data
          draggedElementData = e.dataTransfer.getData("text");
          //Get custom attribute value
          droppableElementData = e.target.getAttribute("data-id");

          const draggedElement = document.getElementById(draggedElementData);
          //dropped class
          e.target.classList.add("dropped");
          //hide current img
          draggedElement.classList.add("hide");
          //draggable set to false
          draggedElement.setAttribute("draggable", "false");
          e.target.innerHTML = ``;
          //insert new img
          e.target.insertAdjacentHTML(
            "afterbegin",
            `<img src="{{ asset('image/quiz/${draggedElementData}.png') }}"">`
          );
          if (draggedElementData === droppableElementData) {
            count += 1;
          }
        }
      };

      //Creates flags and countries
      const creator = () => {
        dragContainer.innerHTML = "";
        dropContainer.innerHTML = "";
        let randomData = [];
        //for string random values in array
        for (let i = 1; i <= 6; i++) {
          let randomValue = randomValueGenerator();
          if (!randomData.includes(randomValue)) {
            randomData.push(randomValue);
          } else {
            //If value already exists then decrement i by 1
            i -= 1;
          }
        }
        for (let i of randomData) {
          const flagDiv = document.createElement("div");
          flagDiv.classList.add("draggable-image");
          flagDiv.setAttribute("draggable", true);
          if (isTouchDevice()) {
            flagDiv.style.position = "absolute";
          }
          flagDiv.innerHTML = `<img src="{{ asset('image/quiz/${i}.png') }}" id="${i}">`;
          dragContainer.appendChild(flagDiv);
        }
        //Sort the array randomly before creating country divs
        randomData = randomData.sort(() => 0.5 - Math.random());
        for (let i of randomData) {
          const countryDiv = document.createElement("div");
          countryDiv.innerHTML = `<div class='countries' data-id='${i}'>
    ${i.charAt(0).toUpperCase() + i.slice(1).replace("-", " ")}
    </div>
    `;
          dropContainer.appendChild(countryDiv);
        }
      };

      let hasil = 0
      
      checkButton.addEventListener("click", function () {
        hasil = hasil + Math.round((count / 6) * 100);
        // console.log(hasil)
        if (count == 6) {
          result.innerText = `Kamu Menang!`;
          score.innerText = "Nilai kamu: " + Math.round((count / 6) * 100);
          document.getElementById('hasilQuiz').value = hasil;
          stopGame();
        } else {
          result.innerText = `Coba lagi ya!`;
          score.innerText = "Nilai kamu: " + Math.round((count / 6) * 100);
          document.getElementById('hasilQuiz').value = hasil;
          stopGame();
        }
      });
      //Start Game
      startButton.addEventListener(
        "click",
        (startGame = async () => {
          currentElement = "";
          controls.classList.add("hide");
          startButton.classList.add("hide");
          backToCoursesButton.classList.add("hide");
          //This will wait for creator to create the images and then move forward
          await creator();
          count = 0;
          dropPoints = document.querySelectorAll(".countries");
          draggableObjects = document.querySelectorAll(".draggable-image");

          //Events
          draggableObjects.forEach((element) => {
            element.addEventListener("dragstart", dragStart);
            //for touch screen
            element.addEventListener("touchstart", dragStart);
            element.addEventListener("touchend", drop);
            element.addEventListener("touchmove", touchMove);
          });
          dropPoints.forEach((element) => {
            element.addEventListener("dragover", dragOver);
            element.addEventListener("drop", drop);
          });
        })
      );

      const next = "<?php echo $next ?>";
      const nextlatest = "<?php echo $nextlatest ?>";
      if(next == nextlatest){
        backToCoursesButton.addEventListener("click", () => {
          window.location.href = "/course";
        });

      }
      else{
        backToCoursesButton.addEventListener("click", () => {
          window.location.href = "/course/level/{{ $next }}";
        });
      }
    </script>
  </body>
</html>
