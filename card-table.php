<?php 
$PageTitle = "CardTable";
include "view/header.php";

require_once("util-db.php");
require_once("model-card.php");
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

			let r = await fetch(<?php echo selectCard() ?>, { cache: "no-store" });
			let rj = await r.json();

			g = rj;

			let params = {
				data: rj,
				pagination: { limit: 10, },
				search: true,
				sort: true,
				width: 600,
				//columns: [{ id: "cardID", name: "Card ID" }, { id: "cardnumber", name: "Card Number" }, { id: "cardname", name: "Card Name" },{ id: "packID", name: "Pack ID" },]
			}

			grid = new gridjs.Grid(params);
			grid.render(table);

			
		}
		ShowTable();
	</script>

