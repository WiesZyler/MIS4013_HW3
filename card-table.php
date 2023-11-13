async function ShowTable() {
    if (grid != null) {
        grid.destroy();
    }
    let table = document.querySelector("#table");
    table.innerHTML = "";

    try {
        let r = await fetch("<?php echo selectCard(); ?>", { cache: "no-store" });
        let rj = await r.json();

        console.log("Fetched Data:", rj); // Log the fetched data to the console

        let params = {
            data: rj,
            pagination: { limit: 10 },
            search: true,
            sort: true,
            width: 600,
            // columns: [{ id: "cardID", name: "Card ID" }, { id: "cardnumber", name: "Card Number" }, { id: "cardname", name: "Card Name" },{ id: "packID", name: "Pack ID" },]
        }

        grid = new gridjs.Grid(params);
        grid.render(table);
    } catch (error) {
        console.error("Error fetching data:", error); // Log any errors to the console
    }
}

ShowTable();
