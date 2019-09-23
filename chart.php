<?php
//koneksi ke MySQL
$conn = new mysqli('localhost', 'root', '', 'db_hotel');

//Query ke database
$lima = $conn->query("SELECT * FROM  hotel WHERE bintang='5'");
$empat = $conn->query("SELECT * FROM  hotel WHERE bintang='4'");
$tiga = $conn->query("SELECT * FROM  hotel WHERE bintang='3'");
$dua = $conn->query("SELECT * FROM  hotel WHERE bintang='2'");
$satu = $conn->query("SELECT * FROM  hotel WHERE bintang='1'");
//$banci = $conn->query("SELECT * FROM  karyawan WHERE jenis_kelamin='banci'");
$jumlah_lima = mysqli_num_rows($lima);
$jumlah_empat = mysqli_num_rows($empat);
$jumlah_tiga = mysqli_num_rows($tiga);
$jumlah_dua = mysqli_num_rows($dua);
$jumlah_satu = mysqli_num_rows($satu);
//$jumlah_banci = mysqli_num_rows($banci);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

  var data = google.visualization.arrayToDataTable([
          ['jenis bintang', 'Jumlah'],
          ['Bintang 5',     <?php echo $jumlah_lima; ?>],
          ['Bintang 4',      <?php echo $jumlah_empat; ?>],
          ['Bintang 3',      <?php echo $jumlah_tiga; ?>],
          ['Bintang 2',      <?php echo $jumlah_dua; ?>],
          ['Bintang 1',      <?php echo $jumlah_satu; ?>]
          //['banci',      <?php //echo $jumlah_banci; ?>]
          
        ]);
        var piechart_options = {title:'jenis dan jumlah hotel berbintang di palembang tahun 2018',
                       width:400,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'jenis dan jumlah hotel berbintang di palembang tahun 2018',
                       width:400,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
      }
</script>
<body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
      </tr>  
    </table>
  </body>
</html>
