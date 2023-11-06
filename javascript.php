<?php
$PageTitle = "Home";
include "view/header.php";
?>

<head>
      <h1>Javascript Examples</h1>
</head>
<body>
<div>
   <button id="btn" class="btn btn-primary">Click Here</button>
    <div id="d1" style="width:100px; height:100px; background-color:red; border-style:solid;">0-0</div>
    var g;
    <script>
        "use strict";
        {
            let exBtn = document.querySelector('#btn');
            exBtn.AddEventListener("click", () => {

            let div = document.querySelector("#d1");
            let params = {
                        targets: div,
                        translateX: { value: 200, duration: 3000 }
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

