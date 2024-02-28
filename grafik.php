     <link rel="stylesheet" href="accordion/js_biasa/jquery-ui.css">
      <link rel="stylesheet" href="resources/demos/style.css">
      <script src="accordion/js_biasa/jquery-1.12.4.js"></script>
      <script src="accordion/js_biasa/jquery-ui.js"></script>
      <script>
	  var index=1;
      $( function() {
        $( "#accordion" ).accordion({
          collapsible: true
        });
      } );
      </script>	
	  <!-- Accordion -->

<div id="accordion">
<h2>Grafik Jumlah Kategori</h2>
<div>
<?php  
$mydata="";
$nom=0;
 $sqlc="select distinct(`kategori`) from `$tbdatalatih` order by `kategori` asc";
 	$arrc=getData($conn,$sqlc);
		foreach($arrc as $dc) {	
		$nom++;
		$kategori=$dc["kategori"];
			 $sql="select * from `$tbdatalatih` where  `kategori`='$kategori'";
				$jum=getJum($conn,$sql);	
			$mydata.="['$kategori',$jum],";
		}
$mydata=substr($mydata,0,strlen($mydata)-1);

?> 
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Kategori', 'Jumlah'],
          <?php echo $mydata;?>
        ]);

        var options = {
          title: 'Datalatih Kategori Deteksi Dini Kecanduan Game',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>

</div>
</div>