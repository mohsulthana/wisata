<?php
//koneksi ke MySQL
$conn = new mysqli('localhost', 'root', '', 'db_hotel');

//Query ke database
$ogankomeringulu = $conn->query("SELECT * FROM  restoran WHERE kabupaten='ogankomeringulu'");
$ogankomeringilir = $conn->query("SELECT * FROM  restoran WHERE kabupaten='ogankomeringilir'");
$muaraenim = $conn->query("SELECT * FROM  restoran WHERE kabupaten='muaraenim'");
$lahat = $conn->query("SELECT * FROM  restoran WHERE kabupaten='lahat'");
$musirawas = $conn->query("SELECT * FROM  restoran WHERE kabupaten='musirawas'");
$musibanyuasin = $conn->query("SELECT * FROM  restoran WHERE kabupaten='musibanyuasin'");
$banyuasin = $conn->query("SELECT * FROM  restoran WHERE kabupaten='banyuasin'");
$ogankomeringulutimur = $conn->query("SELECT * FROM  restoran WHERE kabupaten='ogankomeringulutimur'");
$ogankomeringuluselatan = $conn->query("SELECT * FROM  restoran WHERE kabupaten='ogankomeringuluselatan'");
$oganilir = $conn->query("SELECT * FROM  restoran WHERE kabupaten='oganilir'");
$empatlawang = $conn->query("SELECT * FROM  restoran WHERE kabupaten='empatlawang'");
$penukalabablematangilir = $conn->query("SELECT * FROM  restoran WHERE kabupaten='penukalabablematangilir'");
$musirawasutara = $conn->query("SELECT * FROM  restoran WHERE kabupaten='musirawasutara'");
$palembang = $conn->query("SELECT * FROM  restoran WHERE kabupaten='Palembang'");
$pagaralam = $conn->query("SELECT * FROM  restoran WHERE kabupaten='pagaralam'");
$lubuklinggau = $conn->query("SELECT * FROM  restoran WHERE kabupaten='lubuklinggau'");
$prabumulih = $conn->query("SELECT * FROM  restoran WHERE kabupaten='prabumulih'");
//$banci = $conn->query("SELECT * FROM  karyawan WHERE jenis_kelamin='banci'");



$jumlah_ogankomeringulu = (empty($ogankomeringulu)) ? 0 : mysqli_num_rows($ogankomeringulu);
$jumlah_ogankomeringilir = (empty($ogankomeringilir)) ? 0 : mysqli_num_rows($ogankomeringilir);
$jumlah_muaraenim = (empty($muaraenim)) ? 0 : mysqli_num_rows($muaraenim);
$jumlah_lahat = (empty($lahat)) ? 0 : mysqli_num_rows($lahat);
$jumlah_musirawas = (empty($musirawas)) ? 0 : mysqli_num_rows($musirawas);
$jumlah_musibanyuasin = (empty($musibanyuasin)) ? 0 : mysqli_num_rows($musibanyuasin);
$jumlah_banyuasin = (empty($banyuasin)) ? 0 : mysqli_num_rows($banyuasin);
$jumlah_ogankomeringulutimur = (empty($ogankomeringulutimur)) ? 0 : mysqli_num_rows($ogankomeringulutimur);
$jumlah_ogankomeringuluselatan = (empty($ogankomeringuluselatan)) ? 0 : mysqli_num_rows($ogankomeringuluselatan);
$jumlah_oganilir = (empty($oganilir)) ? 0 : mysqli_num_rows($oganilir);
$jumlah_empatlawang = (empty($empatlawang)) ? 0 : mysqli_num_rows($empatlawang);
$jumlah_penukalabablematangilir = (empty($penukalabablematangilir)) ? 0 : mysqli_num_rows($penukalabablematangilir);
$jumlah_musirawasutara = (empty($musirawasutara)) ? 0 : mysqli_num_rows($musirawasutara);
$jumlah_palembang = (empty($palembang)) ? 0 : mysqli_num_rows($palembang);
$jumlah_pagaralam = (empty($pagaralam)) ? 0 : mysqli_num_rows($pagaralam);
$jumlah_lubuklinggau = (empty($lubuklinggau)) ? 0 : mysqli_num_rows($lubuklinggau);
$jumlah_prabumulih = (empty($prabumulih)) ? 0 : mysqli_num_rows($prabumulih);


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
          [' Kabupaten/kota', 'Jumlah'],
          ['Ogan Komering Ulu',     <?php echo $jumlah_ogankomeringulu; ?>],
          ['Ogan Komering Ilir',      <?php echo $jumlah_ogankomeringilir; ?>],
          ['Muaraenim',      <?php echo $jumlah_muaraenim; ?>],
          ['Lahat',      <?php echo $jumlah_lahat; ?>],
          ['Musirawas',      <?php echo $jumlah_musirawas; ?>],
          ['Musibanyuasin',      <?php echo $jumlah_musibanyuasin; ?>],
          ['Banyuasin',      <?php echo $jumlah_banyuasin; ?>],
          ['Ogan Komering Ulu Timur',      <?php echo $jumlah_ogankomeringulutimur; ?>],
          ['Ogan Komering Ulu Selatan',      <?php echo $jumlah_ogankomeringuluselatan; ?>],
          ['Ogan Ilir',      <?php echo $jumlah_oganilir; ?>],
          ['Empat Lawang',      <?php echo $jumlah_empatlawang; ?>],
          ['Penukalabablematangilir',      <?php echo $jumlah_penukalabablematangilir; ?>],
          ['MusirawasUtara',      <?php echo $jumlah_musirawasutara; ?>],
          ['Palembang',      <?php echo $jumlah_palembang; ?>],
          ['Pagaralam',      <?php echo $jumlah_pagaralam; ?>],
          ['LubukLinggau',      <?php echo $jumlah_lubuklinggau; ?>],
          ['Prabumulih',      <?php echo $jumlah_prabumulih; ?>]


          //['banci',      <?php //echo $jumlah_banci; ?>]
          
        ]);
        var piechart_options = {title:'Jumlah Restoran di Sumatera Selatan tahun 2017',
                       width:400,
                       height:500};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Jumlah Restoran di Sumatera Selatan tahun 2017',
                       width:700,
                       height:500,
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