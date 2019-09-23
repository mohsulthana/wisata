<?php
//koneksi ke MySQL
$conn = new mysqli('localhost', 'root', '', 'db_hotel');

//Query ke database
$tari = $conn->query("SELECT * FROM  seni WHERE jenis='tari'");
$musik = $conn->query("SELECT * FROM  seni WHERE jenis='musik'");
$kudalumping = $conn->query("SELECT * FROM  seni WHERE jenis='kuda_lumping'");
$keroncong = $conn->query("SELECT * FROM  seni WHERE jenis='keroncong'");
$silat = $conn->query("SELECT * FROM  seni WHERE jenis='silat'");
$rebana = $conn->query("SELECT * FROM  seni WHERE jenis='rebana'");
$teater = $conn->query("SELECT * FROM  seni WHERE jenis='teater'");
//$banci = $conn->query("SELECT * FROM  karyawan WHERE jenis_kelamin='banci'");


//$jumlah_ogankomeringulu = (empty($ogankomeringulu)) ? 0 : mysqli_num_rows($ogankomeringulu);
$jumlah_tari = (empty($tari)) ? 0 : mysqli_num_rows($tari);
//$jumlah_musik = mysqli_num_rows($musik);
$jumlah_musik = (empty($musik)) ? 0 : mysqli_num_rows($musik);
//$jumlah_kudalumping = mysqli_num_rows($kudalumping);
$jumlah_kudalumping = (empty($kudalumping)) ? 0 : mysqli_num_rows($kudalumping);
//$jumlah_keroncong = mysqli_num_rows($keroncong);
$jumlah_keroncong = (empty($keroncong)) ? 0 : mysqli_num_rows($keroncong);
//$jumlah_silat = mysqli_num_rows($silat);
$jumlah_silat = (empty($silat)) ? 0 : mysqli_num_rows($silat);
//$jumlah_rebana = mysqli_num_rows($rebana);
$jumlah_rebana = (empty($rebana)) ? 0 : mysqli_num_rows($rebana);
//$jumlah_teater = mysqli_num_rows($teater);
$jumlah_teater = (empty($teater)) ? 0 : mysqli_num_rows($teater);

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
          ['Jenis Seni', 'Jumlah'],
          ['Seni Tari',     <?php echo $jumlah_tari; ?>],
          ['Seni Musik',      <?php echo $jumlah_musik; ?>],
          ['Seni Kudalumping',      <?php echo $jumlah_kudalumping; ?>],
          ['Seni Keroncong',      <?php echo $jumlah_keroncong; ?>],
          ['Seni Silat',      <?php echo $jumlah_silat; ?>],
          ['Seni Rebana',      <?php echo $jumlah_rebana; ?>],
          ['Seni Teater',      <?php echo $jumlah_teater; ?>]
          //['banci',      <?php //echo $jumlah_banci; ?>]
          
        ]);
        var piechart_options = {title:'Jenis dan Jumlah Sanggar Seni di Sumatera Selatan Tahun 2018',
                       width:400,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Jenis dan Jumlah Sanggar Seni di Sumatera Selatan tahun 2018',
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
