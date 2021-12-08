<!DOCTYPE html>
<html lang="en">

<?php
  include '../include/header.php';
?>
<body>
  <h1>Hello 😬</h1>
  <p>typography test</p>
  <style>
    #chart {
      max-width: 650px;
      margin: 35px auto;
    }
  </style>
  <div id="chart"></div>
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/aphexCharts/dist/apexcharts.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    var options = {
      chart: {
        type: 'bar'
      },
      series: [{
        name: 'sales',
        data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
      }],
      xaxis: {
        categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
      }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
  </script>
</body>

</html>