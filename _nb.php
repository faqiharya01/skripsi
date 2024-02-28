<link rel="stylesheet" href="jsacordeon/jquery-ui.css">
  <link rel="stylesheet" href="resources/demos/style.css">
<script src="jsacordeon/jquery-1.12.4.js"></script>
  <script src="jsacordeon/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>
  
  <script type="text/javascript"> 
function PRINT(q){ 
win=window.open('pengujian/dprint.php?q='+q,'win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>

  <script type="text/javascript"> 
function PRINTME(){ 
win=window.open('nbprint.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>

<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

  
<?php
$time_start = microtime(true);

$sql="select * from `$tbpengujian` order by `id_pengujian` desc";
if(isset($_GET["id"])){
	$id_pengujian=$_GET["id"];
	 $sql="select * from `$tbpengujian` where `id_pengujian`='$id_pengujian'";
}
	$d=getField($conn,$sql);
				$id_pengujian=$d["id_pengujian"];
				$nama=$d["nama"];
				$email=$d["email"];
				$tanggal=WKT($d["tanggal"]);
				$jam=$d["jam"];
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
				$rekapitulasi=$d["rekapitulasi"];
				$kategori=$d["kategori"];
				$keterangan=$d["keterangan"];

$k1=$kriteria1;
$k2=$kriteria2;
$k3=$kriteria3;
$k4=$kriteria4;
$k5=$kriteria5;
$k6=$kriteria6;
$k7=$kriteria7;
$k8=$kriteria8;
$k9=$kriteria9;
$k10=$kriteria10;


$data="<table class='table'>

<tr>
<td width='20%'><label for='nim'>Nama Penguji</label>
<td>:
<td colspan='2'>$nama</td>
</tr>

<tr>
<td><label for='nama_mahasiswa'>Email Penguji</label>
<td>:
<td colspan='2'><a href='mailto:$email'>$email</a></td>
</tr>

<tr>
<td height='24'><label for='email'>Waktu Pengujian</label>
<td>:<td colspan='2'>$tanggal $jam Wib
</td>
</tr>


<tr>
<td height='24'><label for='id_user'>Catatan</label>
<td>:<td colspan='2'>".$keterangan."
</tr>
</table>
<hr>";

echo $data;
$_SESSION["data"]=$data;
?>


<div id="accordion">
<h3>Info Data Training</h3>
<div>

<table class="table">
<tr bgcolor="#fff">
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
<th width="5%"><?php echo "<label title='Kriteria Data Latih'>Kategori</label>";?></td>
  </tr>
<?php  
  $sql="select * from `$tbdatalatih` order by `kategori` asc";
   $jum=getJum($conn,$sql);
		if($jum > 0){

	$batas   = 10;
	$page = $_GET['page'];
	if(empty($page)){$posawal  = 0;$page = 1;}
	else{$posawal = ($page-1) * $batas;}
	
	$sql2 = $sql." LIMIT $posawal,$batas";
	$no = $posawal+1;
									
	$arr=getData($conn,$sql2);
		foreach($arr as $d) {						
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
					$color="#dddddd";	
					if($no %2==0){$color="#eeeeee";}
echo"<tr bgcolor='$color'>
				<td><label title='$keterangan'>$no</label></td>
				<td><label><small>$kriteria1</label></td>
				<td><label><small>$kriteria2</label></td>
				<td><label><small>$kriteria3</label></td>
				<td><label><small>$kriteria4</label></td>
				<td><label><small>$kriteria5</label></td>
				<td><label><small>$kriteria6</label></td>
				<td><label><small>$kriteria7</label></td>
				<td><label><small>$kriteria8</label></td>
				<td><label><small>$kriteria9</label></td>
				<td><label><small>$kriteria10</small></label></td>
				<td><label title='$keterangan'><small>$kategori</label></td>
				</tr>";
			
		$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data Training belum tersedia...</blink></td></tr>";}
?>
</table>

<?php
//Langkah 3: Hitung total data dan page 
$jmldata = $jum;
if($jmldata>0){
	if($batas<1){$batas=1;}
	$jmlhal  = ceil($jmldata/$batas);
	echo "<div class=paging>";
	if($page > 1){
		$prev=$page-1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=nb&id=$id_pengujian'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=nb&id=$id_pengujian'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=nb&id=$id_pengujian'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
	?>
</table>
</div>

<?php
	$sql="select distinct(`kategori`) from `$tbdatalatih`  order by `kategori` asc";
	$arr=getData($conn,$sql);
	$i=0;
		foreach($arr as $d) {						
				$kategori=$d["kategori"];
				$ik[$i]=$kategori;
				$nhasil[$i]=$kategori;
				$i++;
		}
	
	$jumK1=getOut($conn,$ik[0]);
	$jumK2=getOut($conn,$ik[1]);
	$jumK3=getOut($conn,$ik[2]);
	$jumK4=getOut($conn,$ik[4]);
	
	$totK=$jumK1+$jumK2+$jumK3+$jumK4;

$jumG1A=getKK($conn,'kriteria1',$k1,$ik[0]);
$jumG1B=getKK($conn,'kriteria1',$k1,$ik[1]);
$jumG1C=getKK($conn,'kriteria1',$k1,$ik[2]);
$jumG1D=getKK($conn,'kriteria1',$k1,$ik[3]);

$jumG2A=getKK($conn,'kriteria2',$k2,$ik[0]);
$jumG2B=getKK($conn,'kriteria2',$k2,$ik[1]);
$jumG2C=getKK($conn,'kriteria2',$k2,$ik[2]);
$jumG2D=getKK($conn,'kriteria2',$k2,$ik[3]);

$jumG3A=getKK($conn,'kriteria3',$k3,$ik[0]);
$jumG3B=getKK($conn,'kriteria3',$k3,$ik[1]);
$jumG3C=getKK($conn,'kriteria3',$k3,$ik[2]);
$jumG3D=getKK($conn,'kriteria3',$k3,$ik[3]);

$jumG4A=getKK($conn,'kriteria4',$k4,$ik[0]);
$jumG4B=getKK($conn,'kriteria4',$k4,$ik[1]);
$jumG4C=getKK($conn,'kriteria4',$k4,$ik[2]);
$jumG4D=getKK($conn,'kriteria4',$k4,$ik[3]);

$jumG5A=getKK($conn,'kriteria5',$k5,$ik[0]);
$jumG5B=getKK($conn,'kriteria5',$k2,$ik[1]);
$jumG5C=getKK($conn,'kriteria5',$k5,$ik[2]);
$jumG5D=getKK($conn,'kriteria5',$k5,$ik[3]);

$jumG6A=getKK($conn,'kriteria6',$k6,$ik[0]);
$jumG6B=getKK($conn,'kriteria6',$k6,$ik[1]);
$jumG6C=getKK($conn,'kriteria6',$k6,$ik[2]);
$jumG6D=getKK($conn,'kriteria6',$k6,$ik[3]);

$jumG7A=getKK($conn,'kriteria7',$k7,$ik[0]);
$jumG7B=getKK($conn,'kriteria7',$k7,$ik[1]);
$jumG7C=getKK($conn,'kriteria7',$k7,$ik[2]);
$jumG7D=getKK($conn,'kriteria7',$k7,$ik[3]);

$jumG8A=getKK($conn,'kriteria8',$k8,$ik[0]);
$jumG8B=getKK($conn,'kriteria8',$k8,$ik[1]);
$jumG8C=getKK($conn,'kriteria8',$k8,$ik[2]);
$jumG8D=getKK($conn,'kriteria8',$k8,$ik[3]);

$jumG9A=getKK($conn,'kriteria9',$k9,$ik[0]);
$jumG9B=getKK($conn,'kriteria9',$k9,$ik[1]);
$jumG9C=getKK($conn,'kriteria9',$k9,$ik[2]);
$jumG9D=getKK($conn,'kriteria9',$k9,$ik[3]);

$jumG10A=getKK($conn,'kriteria10',$k10,$ik[0]);
$jumG10B=getKK($conn,'kriteria10',$k10,$ik[1]);
$jumG10C=getKK($conn,'kriteria10',$k10,$ik[2]);
$jumG10D=getKK($conn,'kriteria10',$k10,$ik[3]);


$HA=($jumK1/$totK)*($jumG1A/$jumK1)*($jumG2A/$jumK1)*($jumG3A/$jumK1)*($jumG4A/$jumK1)*($jumG5A/$jumK1)*($jumG6A/$jumK1)*($jumG7A/$jumK1)*($jumG8A/$jumK1)*($jumG9A/$jumK1)*($jumG10A/$jumK1);

$HB=($jumK2/$totK)*($jumG1B/$jumK2)*($jumG2B/$jumK2)*($jumG3B/$jumK2)*($jumG4B/$jumK2)*($jumG5B/$jumK2)*($jumG6B/$jumK2)*($jumG7B/$jumK2)*($jumG8B/$jumK2)*($jumG9B/$jumK2)*($jumG10B/$jumK2);

$HC=($jumK3/$totK)*($jumG1C/$jumK3)*($jumG2C/$jumK3)*($jumG3C/$jumK3)*($jumG4C/$jumK3)*($jumG5C/$jumK3)*($jumG6C/$jumK3)*($jumG7C/$jumK3)*($jumG8C/$jumK3)*($jumG9C/$jumK3)*($jumG10C/$jumK3);

$HD=($jumK4/$totK)*($jumG1D/$jumK3)*($jumG2D/$jumK3)*($jumG3D/$jumK3)*($jumG4D/$jumK3)*($jumG5D/$jumK3)*($jumG6D/$jumK3)*($jumG7D/$jumK3)*($jumG8D/$jumK3)*($jumG9D/$jumK3)*($jumG10D/$jumK3);


$SHA="($jumK1/$totK) x ($jumG1A/$jumK1) x ($jumG2A/$jumK1) x ($jumG3A/$jumK1) x ($jumG4A/$jumK1) x ($jumG5A/$jumK1) x ($jumG6A/$jumK1) x ($jumG7A/$jumK1) x ($jumG8A/$jumK1) x ($jumG9A/$jumK1) x ($jumG10A/$jumK1)";

$SHB="($jumK2/$totK) x ($jumG1B/$jumK2) x ($jumG2B/$jumK2) x ($jumG3B/$jumK2) x ($jumG4B/$jumK2) x ($jumG5B/$jumK2) x ($jumG6B/$jumK2) x ($jumG7B/$jumK2) x ($jumG8B/$jumK2) x ($jumG9B/$jumK2) x ($jumG10B/$jumK2)";

$SHC="($jumK3/$totK) x ($jumG1C/$jumK3) x ($jumG2C/$jumK3) x ($jumG3C/$jumK3) x ($jumG4C/$jumK3) x ($jumG5C/$jumK3) x ($jumG6C/$jumK3) x ($jumG7C/$jumK3) x ($jumG8C/$jumK3) x ($jumG9C/$jumK3) x ($jumG10C/$jumK3)";

$SHD="($jumK4/$totK) x ($jumG1D/$jumK3) x ($jumG2D/$jumK3) x ($jumG3D/$jumK3) x ($jumG4D/$jumK3) x ($jumG5D/$jumK3) x ($jumG6D/$jumK3) x ($jumG7D/$jumK3) x ($jumG8D/$jumK3) x ($jumG9D/$jumK3) x ($jumG10D/$jumK3)";


$jumKat1=$jumG1A+$jumG1B+$jumG1C+$jumG1D;
$jumKat2=$jumG2A+$jumG2B+$jumG2C+$jumG2D;
$jumKat3=$jumG3A+$jumG3B+$jumG3C+$jumG3D;
$jumKat4=$jumG4A+$jumG4B+$jumG4C+$jumG4D;
$jumKat5=$jumG5A+$jumG5B+$jumG5C+$jumG5D;
$jumKat6=$jumG6A+$jumG6B+$jumG6C+$jumG6D;
$jumKat7=$jumG7A+$jumG7B+$jumG7C+$jumG7D;
$jumKat8=$jumG8A+$jumG8B+$jumG8C+$jumG8D;
$jumKat9=$jumG9A+$jumG9B+$jumG9C+$jumG9D;
$jumKat10=$jumG10A+$jumG10B+$jumG10C+$jumG10D;

	$max=$HD;
	$smax=$SHD;
	$index=2;
if($HA>=$HB && $HA>=$HC  && $HA>=$HD ){
	$max=$HA;
	$smax=$SHA;
	$index=0;
	}
else if($HB>=$HA && $HB>=$HC  && $HB>=$HD   ){
	$max=$HB;
	$smax=$SHB;
	$index=1;
	}
else if($HC>=$HA && $HC>=$HB  && $HC>=$HD ){
	$max=$HC;
	$smax=$SHC;
	$index=2;
	}
else if($HD>=$HA && $HD>=$HB  && $HD>=$HC ){
	$max=$HD;
	$smax=$SHD;
	$index=3;
	}	
	
$nout=$nhasil[$index];
$iout=$ik[$index];
					
$gab="<h3>Perhitungan</h3><table width='98%' border='1'>";
$gab.= "<tr><td><b>$nhasil[0] <td>$SHA <td>".bul($HA)."</b></tr>";
$gab.= "<tr><td><b>$nhasil[1] <td>$SHB <td>".bul($HB)."</b></tr>";
$gab.= "<tr><td><b>$nhasil[2] <td>$SHC <td>".bul($HC)."</b></tr>";
$gab.= "<tr><td><b>$nhasil[3] <td>$SHD <td>".bul($HD)."</b></tr>";
$gab.="</table>";


$gab2= "
<table><tr>
<td><b>Analisa  Perhitungan Naive Bayes Tertinggi Adalah : $nout </b>
<br>Dengan Nilai Bobot: $max
<td>
<img src=\"ypathicon/print.png\" width=\"20\" height=\"20\" title=\"PRINT\" OnClick=\"PRINTME()\">
</tr>
</table>
";

$gab22= "
<table><tr>
<td><b>Analisa  Perhitungan Naive Bayes Tertinggi Adalah : $nout </b>
<br>Dengan Nilai Bobot: $max
</tr>
</table>
";
$rekapitulasi=  "$nhasil[0] => $SHA =$HA<br>";
$rekapitulasi.= "$nhasil[1] => $SHB =$HB<br>";
$rekapitulasi.= "$nhasil[2] => $SHC =$HC<br>";
$rekapitulasi.= "$nhasil[3] => $SHD =$HD<br>";
$rekapitulasi.="Nilai Tertinggi Adalah : $nout dengan Nilai Bobot: $max";

$gab0="<h3>Analisa Kecanduan Game AN $nama adalah</h3> 
<table width=\"98%\" border=\"1\">
<tr><td width=\"70%\">
	    <small><i>$kr1<td>:<td>$k1 ($jumKat1)</tr>
<tr><td><small><i>$kr2<td>:<td>$k2  ($jumKat2)</tr>
<tr><td><small><i>$kr3<td>:<td>$k3 ($jumKat3)</tr>
<tr><td><small><i>$kr4<td>:<td>$k4 ($jumKat4)</tr> 
<tr><td><small><i>$kr5<td>:<td>$k5 ($jumKat5)</tr>
<tr><td><small><i>$kr6<td>:<td>$k6 ($jumKat6)</tr>
<tr><td><small><i>$kr7<td>:<td>$k7 ($jumKat7)</tr>
<tr><td><small><i>$kr8<td>:<td>$k8 ($jumKat8)</tr>
<tr><td><small><i>$kr9<td>:<td>$k9 ($jumKat9)</tr>
<tr><td><small><i>$kr10</small></i><td>:<td>$k10 ($jumKat10)</tr>
</table>
";

$_SESSION["gab"]=$gab0;

echo "<h3>Perhitungan</h3><div>";
echo $gab0;
echo "<img src='ypathfile/nb.png' width='100%' height='400' title='Analisa Perhitungan Naive Bayes'>";
echo $gab;
echo $gab2;

$_SESSION["gab0"]=$gab0;
$_SESSION["gab"]=$gab;
$_SESSION["gab2"]=$gab22."<hr>Analisa Diagnosa Akan Kecanduan Game AN $nama Adalah : 
<br><>b$nout</b>
<br><i><u>dengan Nilai Bobot: $max</i></u>";

	
$kategori=$iout;
$keterangan_pengujian=$rekapitulasi;
	
	$sql="update `$tbpengujian` set `kategori`='$nout',`keterangan`='$max',
	`rekapitulasi`='$rekapitulasi' where `id_pengujian`='$id_pengujian'";
	$ubah=process($conn,$sql);

?>


</div>


<?php

$time_end = microtime(true);
$durasi = $time_end - $time_start;
echo"<br><i>Waktu Proses $durasi s</i>";

?>

<?php
function bul($v){
	$x=round($v,3);
	$x=$v;
	return $x;
}
function getKK($conn,$kolom,$data,$kat){
  $sql="select `id_datalatih` from `tb_datalatih` where `$kolom`='$data' and `kategori`='$kat'";
  $jum=getJum($conn,$sql)+0;
  if($jum<1){$jum=1;}
  return $jum;
}

function getOut($conn,$kat){
  $sql="select `id_datalatih` from `tb_datalatih` where `kategori`='$kat'";
  $jum=getJum($conn,$sql)+0;
  if($jum<1){$jum=1;}
  return $jum;
}
?>