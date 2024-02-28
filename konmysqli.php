<?php
require_once"koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}



$kr1="Berapakah umur orang yang anda kenal?";
$kr2="Berapa lama orang yang anda kenal bermain game setiap harinya?";
$kr3="Apakah orang yang anda kenal memiliki keinginan yang kuat untuk mencapai kemenangan?";
$kr4="Apakah orang yang anda kenal bermain game karena rasa bosan yang dia alami?";
$kr5="Apakah orang yang anda kenal pernah meninggalkan kewajiban sebagai pelajar/mahasiswa seperti tidak mengerjakan tugas dan memilih bermain game?";
$kr6="Apakah orang yang anda kenal pernah bermain Game terlalu lama dan melupakan hal hal lain dalam hidup?";
$kr7="Apakah orang yang anda kenal bermain game karena faktor lingkungan yang mempengaruhinya?";
$kr8="Apakah orang yang anda kenal lebih suka bermain game daripada berinteraksi sosial?";
$kr9="Apakah orang yang anda kenal menganggap game adalah aktivitas yang menyenangkan?";
$kr10="Apakah orang yang anda kenal dibatasi oleh orang tuanya untuk bermain game?";

$cr1="Faktor 1";
$cr2="Faktor 2";
$cr3="Faktor 3";
$cr4="Faktor 4";
$cr5="Faktor 5";
$cr6="Faktor 6";
$cr7="Faktor 7";
$cr8="Faktor 8";
$cr9="Faktor 9";
$cr10="Faktor 10";
?>



<?php function RPM($rupiah){return number_format($rupiah,"2",",",".");}?>
<?php
function WKTM($sekarang){
if($sekarang=="0000-00-00"){$sekarang=date("Y-m-d");}

$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,0,4);

$judul_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli", "Agustus", "September","Oktober", "November", "Desember");
$wk=$tanggal." ".$judul_bln[(int)$bulan]." ".$tahun;
return $wk;
} 
function processM($conn,$sql){
$s=false;
$conn->autocommit(FALSE);
try {
  $rs = $conn->query($sql);
  if($rs){
	    $conn->commit();
	    $last_inserted_id = $conn->insert_id;
 		$affected_rows = $conn->affected_rows;
  		$s=true;
  }
} 
catch (Exception $e) {
	echo 'fail: ' . $e->getMessage();
  	$conn->rollback();
}
$conn->autocommit(TRUE);
return $s;
}

function getJumM($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getFieldM($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$d= $rs->fetch_assoc();
	$rs->free();
	return $d;
}

function getDataM($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	//foreach($arr as $row) {
	//  echo $row['nama_kelas'] . '*<br>';
	//}
	
	$rs->free();
	return $arr;
}

function getAdminM($conn,$kode){
$field="nama_admin";
$sql="SELECT `$field` FROM `tb_admin` where `id_admin`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
	}
?>

