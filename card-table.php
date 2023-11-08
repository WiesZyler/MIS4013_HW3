<?php 
$PageTitle = "CardTable";
include "view/header.php";

require_once("util-db.php");
require_once("model-card.php");
?>

<?php
function selectCard() {
    $cards = [];
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cardID, cardnumber, cardname, packID, attribute, `spell/trap`, level, monstertype, rarity, cardtype FROM `card`");
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row = $result->fetch_assoc()) {
            $cards[] = $row;
        }
        
        $conn->close();
        
        return $cards; 
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

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

