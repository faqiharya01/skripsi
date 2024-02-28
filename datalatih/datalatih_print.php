<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
$YPATH="../ypathfile/";
$pk="";
$field="kategori";
$TB=$tbdatalatih;
$item="Datalatih";



  $sql="select * from `$TB` order by `$field` asc";
  if(isset($_GET["pk"])){
	$pk=$_GET["pk"];
		$sql="select * from `$TB` where `$field`='$pk' order by `$field` asc";
  }

  echo "<h3><center>Laporan $item $pk</h3>";
  ?>


 

<table width="98%" border="0">
<tr>
<th width="3%"><?php echo "<label>No</label>";?></td>
<th width="15%"><?php echo "<label title='$kr1'>$cr1</label>";?></td>
<th width="15%"><?php echo "<label title='$kr2'>$cr2</label>";?></td>
<th width="5%"><?php echo "<label title='$kr3'>$cr3</label>";?></td>
<th width="5%"><?php echo "<label title='$kr4'>$cr4</label>";?></td>
<th width="5%"><?php echo "<label title='$kr5'>$cr5</label>";?></td>
<th width="5%"><?php echo "<label title='$kr6'>$cr6</label>";?></td>
<th width="5%"><?php echo "<label title='$kr7'>$cr7</label>";?></td>
<th width="5%"><?php echo "<label title='$kr8'>$cr8</label>";?></td>
<th width="5%"><?php echo "<label title='$kr9'>$cr9</label>";?></td>
<th width="5%"><?php echo "<label title='$kr10'>$cr10</label>";?></td>

  </tr>
<?php  
  $jum=getJumM($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getDataM($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_datalatih=$d["id_datalatih"];
			$kriteria1=$d["kriteria1"];
			$kriteria2=$d["kriteria2"];
			$kriteria3=$d["kriteria3"];
			$kriteria4=$d["kriteria4"];
			$kriteria5=$d["kriteria5"];
			$kriteria6=$d["kriteria6"];
			$kriteria7=$d["kriteria7"];
			$kriteria8=$d["kriteria8"];
			$kriteria9=$d["kriteria9"];
			$kriteria10=$d["kriteria10"];
			$kategori=$d["kategori"];
			$keterangan=$d["keterangan"];
				$color="#fff";		
					if($no %2==0){$color="#fff";}
echo"<tr bgcolor='$color'>
				<td><label title='$keterangan'>$no</label></td>
				<td><label>$kriteria1</label></td>
				<td><label>$kriteria2</label></td>
				<td><label>$kriteria3</label></td>
				<td><label>$kriteria4</label></td>
				<td><label>$kriteria5</label></td>
				<td><label>$kriteria6</label></td>
				<td><label>$kriteria7</label></td>
				<td><label>$kriteria8</label></td>
				<td><label>$kriteria9</label></td>
				<td><label>$kriteria10</label></td>
				</tr>";
				}
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data $item belum tersedia...</blink></td></tr>";}
	
	echo"</table>";
	?>