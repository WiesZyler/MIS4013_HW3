<?php
$PageTitle = "Javascript";
include "view/header.php";
?>

<head>
      <h1>Javascript Examples</h1>
        <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Data table -->
    <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

    <!-- Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    <!-- Map -->
    <link href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" rel="stylesheet" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- sweetalert2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.all.min.js"></script>
</head>
<body>
<div>
      <div class="btn-group" role="group" aria-label="Basic example">
      <button id="btn" class="btn btn-primary">Move</button>
      <button id="btn1" class="btn btn-success">Grow</button>
      <button id="btn2" class="btn btn-danger">Shrink</button>
      <button id="btn3" class="btn btn-warning">Change Color</button>
      </div>
      <p>Hover over the block to rotate it!</p>
    <div id="d1" style="width:100px; height:100px; background-color:red; border-style:solid; display:flex; flex-direction:column; justify-content:center; align-item:center; margin-left:auto; margin-right:auto;"></div>
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
       <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
      </svg>
      <script>
    
        "use strict";
        {
            let x = 200
            let exBtn = document.querySelector('#btn');
            exBtn.addEventListener("click", () => {

            x = x * -1;
            let div = document.querySelector("#d1");
            let params = {
                        targets: div,
                        translateX: { value: x, duration: 3000 }
                         };
                    anime(params);

        
            })
              let degree = 0
               let exDiv = document.querySelector("#d1");
               exDiv.addEventListener("mouseover", () => {

            degree = degree + 10;
            let params = {
                        targets: exDiv,
                        rotate: { value: degree, duration: 3000 }
                         };
                    anime(params);
            })
              let w = 100;
              let h = 100;
               let Btn1 = document.querySelector('#btn1');
            Btn1.addEventListener("click", () => {
            w = w + 100;
            h = h + 100;
           document.querySelector('#d1').style.width = w + 'px';
           document.querySelector('#d1').style.height = h + 'px';
        })
               let Btn2 = document.querySelector('#btn2');
            Btn2.addEventListener("click", () => {
            w = w - 100;
            h = h - 100;
           document.querySelector('#d1').style.width = w + 'px';
           document.querySelector('#d1').style.height = h + 'px';
        })

                let Btn3 = document.querySelector('#btn3');
            Btn3.addEventListener("click", () => {
            if (document.querySelector('#d1').style.backgroundColor === 'red') {
            document.querySelector('#d1').style.backgroundColor = 'blue';
            } else if (document.querySelector('#d1').style.backgroundColor === 'blue') {
            document.querySelector('#d1').style.backgroundColor = 'red';
            }
                  
           
         
        })
      
        }
        
    </script> 
</div>
<div style="Width:500px; margin-top 100px;">
      <canvas  id="chart"></canvas>
      </div>
      <script>
       document.addEventListener('DOMContentLoaded', function () {
      let r = document.querySelector("#chart");
        new Chart(r, {
    type: 'pie',
    data: {
    datasets: [{
        data: [10, 40, 15,15,10,10]
    }],
    labels: [
        'Purrely',
        'Rescue Ace',
          'Tearlament',
          'Unchained',
          'Kashtira',
          'Other',
      ],
    },
        });
          });
          
      </script>
    
      <p style="font-weight:bold;">Psst, Scroll all the away to the bottom, do it!</p>
      <div style="height:4000px;"></div>
      <div id="elevator" class="elevator-button btn btn-primary" style="margin-right:auto; margin-left:auto;>
        <p style="font-size: 40px;">↑</p>
       </div>
      <script>
          
    var elevator = new Elevator({
        element: document.querySelector('#elevator'),
        mainAudio: 'elevator/elevator.mp3', // Optional: Specify a sound file
        endAudio: 'elevator/ding.mp3', // Optional: Specify a sound file for the end
        duration: 20000,
    });
</script>



</body>
<?php
include "view/footer.php";
?>

