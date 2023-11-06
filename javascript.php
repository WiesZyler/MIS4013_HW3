<?php
$PageTitle = "Home";
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


</body>
<?php
include "view/footer.php";
?>

