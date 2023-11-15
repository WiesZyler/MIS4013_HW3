<div style="Width:500px;">
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
