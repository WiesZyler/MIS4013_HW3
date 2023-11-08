<?php 
require_once("util-db.php");
require_once("model-card.php");
?>
<div class="row">
  <div class="col">
    <h1>Card Info</h1>
  </div>
    <div class="col-auto">
        <?php
include "view-card-newform.php"
?>
  </div>
</div>
<div id="table"></div>
	<script>
		"use strict";
		var grid = null; 
		var g;

		async function ShowTable() {
			if (grid != null) {
				grid.destroy
			}

			let table = document.querySelector("#table");
			table.innerHTML = ""; 

			let r = await fetch(selectCard(), { cache: "no-store" });
			let rj = await r.json();

			g = rj;

			let params = {
				data: rj,
				pagination: { limit: 10, },
				search: true,
				sort: true,
				width: 600,

			}

			grid = new gridjs.Grid(params);
			grid.render(table);

			
		}
		ShowTable();
	</script>

