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
   <button id="btn" class="btn btn-primary">Click Here</button>
    <div id="d1" style="width:100px; height:100px; background-color:red; border-style:solid; display:flex; flex-direction:column; justify-content:center; align-item:center; margin-left:auto; margin-right:auto;">0-0</div>
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
        }
        
    </script> 
</div>


</body>
<?php
include "view/footer.php";
?>

