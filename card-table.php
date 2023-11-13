<?php 
$PageTitle = "CardTable";
include "view/header.php";
?>

<div id="table"></div>
<script>
    "use strict";
    var grid = null; 

    async function ShowTable() {
        if (grid != null) {
            grid.destroy();
        }
        let table = document.querySelector("#table");
        table.innerHTML = "";

        try {
            let r = await fetch("getCardData.php", { cache: "no-store" });
            let rj = await r.json();

            let params = {
                data: rj,
                pagination: { limit: 10 },
                search: true,
                sort: true,
                width: 600,
            }

            grid = new gridjs.Grid(params);
            grid.render(table);
       
    }

    ShowTable();
</script>
