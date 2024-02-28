<?php
$tgl=date("Y-m-d");
$pro="simpan";
?>

<script type="text/javascript"> 
function PRINT(pk){ 
win=window.open('datalatih/datalatih_print.php?pk='+pk,'win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 

</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
if($_GET["pro"]=="ubah"){
	$id_datalatih=$_GET["kode"];
	$sql="select * from `$tbdatalatih` where `id_datalatih`='$id_datalatih'";
	$d=getField($conn,$sql);
				$id_datalatih=$d["id_datalatih"];
				$id_datalatih0=$d["id_datalatih"];
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
				$pro="ubah";		
}
?>

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
	
 <div id="accordion">
<?php if($_GET["pro"]=="import"){ ?>
  <h3>Masukan Data Latih</h3>
<div>
<form name="import_export_form" method="post" action="" enctype="multipart/form-data">
    <label>Pilih File Excel (.xls) : </label>
	<input type="file" name="excelfile"/><br>
    <input type="submit" id="import" value="IMPORT DATALATIH" name="IMPORT"/>
    </form>
</div>
<?php
}
?>
	
<?php if($_GET["pro"]=="tambah" ||$_GET["pro"]=="ubah" ){ ?>
  <h3>Masukan Data Latih</h3>
<div>
			
<form action="" method="post" enctype="multipart/form-data">
<table class="table" >
<tr>
<th width="35%"><label for="id_datalatih"><?php echo $kr1;?>
</label>
<th width="1%">:
<th colspan="2">
<input type="radio" name="kriteria1" id="kriteria1"  checked="checked" value="Dibawah 12 tahun" <?php if($kriteria1=="Dibawah 12 tahun"){echo"checked";}?>/> Dibawah 12 tahun<br>
<input type="radio" name="kriteria1" id="kriteria1" value="12 sampai 24 tahun" <?php if($kriteria1=="12 sampai 24 tahun"){echo"checked";}?>/> 12 sampai 24 tahun<br>
<input type="radio" name="kriteria1" id="kriteria1" value="Diatas 24 tahun" <?php if($kriteria1=="Diatas 24 tahun"){echo"checked";}?>/> Diatas 24 tahun
</tr>


<tr>
<td><label for="status"><?php echo $kr2;?>
</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria2" id="kriteria2"  checked="checked" value="Dibawah 4 jam" <?php if($kriteria2=="Dibawah 4 jam"){echo"checked";}?>/> Dibawah 4 jam<br> 
<input type="radio" name="kriteria2" id="kriteria2" value="4 sampai 8 jam" <?php if($kriteria2=="4 sampai 8 jam"){echo"checked";}?>/> 4 sampai 8 jam<br>
<input type="radio" name="kriteria2" id="kriteria2" value="Diatas 12 jam" <?php if($kriteria2=="Diatas 12 jam"){echo"checked";}?>/> Diatas 12 jam
</td></tr>

<tr>
<td><label for="status"><?php echo $kr3;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria3" id="kriteria3"  checked="checked" value="Ya" <?php if($kriteria3=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria3" id="kriteria3" value="Tidak" <?php if($kriteria3=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status"><?php echo $kr4;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria4" id="kriteria4"  checked="checked" value="Ya" <?php if($kriteria4=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria4" id="kriteria4" value="Tidak" <?php if($kriteria4=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status"><?php echo $kr5;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria5" id="kriteria5"  checked="checked" value="Ya" <?php if($kriteria5=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria5" id="kriteria5" value="Tidak" <?php if($kriteria5=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status"><?php echo $kr6;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria6" id="kriteria6"  checked="checked" value="Ya" <?php if($kriteria6=="Ya"){echo"checked";}?>/> Ya&emsp;
<input type="radio" name="kriteria6" id="kriteria6" value="Tidak" <?php if($kriteria6=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status"><?php echo $kr7;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria7" id="kriteria7"  checked="checked" value="Ya" <?php if($kriteria7=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria7" id="kriteria7" value="Tidak" <?php if($kriteria7=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status"><?php echo $kr8;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria8" id="kriteria8"  checked="checked" value="Ya" <?php if($kriteria8=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria8" id="kriteria8" value="Tidak" <?php if($kriteria8=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status"><?php echo $kr9;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria9" id="kriteria9"  checked="checked" value="Ya" <?php if($kriteria9=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria9" id="kriteria9" value="Tidak" <?php if($kriteria9=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status"><?php echo $kr10;?></label>
<td>:<td colspan="2">
<input type="radio" name="kriteria10" id="kriteria10"  checked="checked" value="Ya" <?php if($kriteria10=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria10" id="kriteria10" value="Tidak" <?php if($kriteria10=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah menurut anda orang yang anda kenal kecanduan game?</label>
<td>:<td colspan="2">
<input type="radio" name="kategori" id="kategori"  checked="checked" value="Tidak kecanduan game" <?php if($kategori=="Tidak kecanduan game"){echo"checked";}?>/> Tidak kecanduan game<br> 

<input type="radio" name="kategori" id="kategori" value="Sedikit kecanduan game" <?php if($kategori=="Sedikit kecanduan game"){echo"checked";}?>/> Sedikit kecanduan game<br>

<input type="radio" name="kategori" id="kategori"  checked="checked" value="Kecanduan game" <?php if($kategori=="Kecanduan game"){echo"checked";}?>/> Kecanduan game <br>

<input type="radio" name="kategori" id="kategori" value="Sangat kecanduan game" <?php if($kategori=="Sangat kecanduan game"){echo"checked";}?>/> Sangat kecanduan game<br>
</td></tr>


<tr>
<td height="24"><label for="keterangan">Catatan</label>
<td>:<td>
<textarea class="form-control" name="keterangan" cols="55" rows="2"><?php echo $keterangan;?></textarea>
</td>
</tr>

<tr>
<td>
<td>
<td colspan="2">
        <input name="Simpan" class="btn btn-success" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_datalatih0" type="hidden" id="id_datalatih0" value="<?php echo $id_datalatih0;?>" />
        <a href="?mnu=datalatih"><input class="btn btn-danger" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>
<br />
</div>



<?php  
} if(empty($_GET["pro"])){

  $sqlc="select distinct(`kategori`) from `$tbdatalatih` order by `kategori` asc";
  $jumc=getJum($conn,$sqlc);
		if($jumc <1){
		echo"<h1>Maaf data Kategori belum tersedia</h1>";
		}
	$arrc=getData($conn,$sqlc);
		foreach($arrc as $dc) {						
				$kategori=$dc["kategori"];
				?>
<h3>Kategori <?php echo strtoupper($kategori)?>:</h3>
<div>				
 
Cetak : <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $kategori;?>')"> |
<a href='?mnu=datalatih&pro=tambah'>Tambah Data</a>
|
<a href='?mnu=datalatih&pro=import'>Import Data</a>
<br>

<table class="table table-bordered">
  <tr bgcolor="#ADD8E6">
<th width="3%"><?php echo "<label>No</label>";?></td>
<th width="3%">IDL</td>

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
<th width="5%">Menu</td>
  </tr>
<?php  
  $sql="select * from `$tbdatalatih` where `kategori`='$kategori' order by `id_datalatih` asc";
  $jum=getJum($conn,$sql);
  		if($jum > 0){
			//--------------------------------------------------------------------------------------------
$batas   = 10;
$page = $_GET['page'];
if(empty($page)){$posawal  = 0;$page = 1;}
else{$posawal = ($page-1) * $batas;}

$sql2 = $sql." LIMIT $posawal,$batas";
$no = $posawal+1;
//--------------------------------------------------------------------------------------------									
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
				
				$color="#fff";		
					if($no %2==0){$color="#fff";}
echo"<tr bgcolor='$color'>
				<td><label title='$keterangan'>$no</label></td>
				<td><label title='$keterangan'>$id_datalatih</label></td>
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
				<td><div align='center'>
				<a href='?mnu=nb2&id=$id_datalatih'><img src='ypathicon/xls.png' title='cek validasi'></a>
<a href='?mnu=datalatih&pro=ubah&kode=$id_datalatih'><img src='ypathicon/ub.png' title='ubah'></a>
<a href='?mnu=datalatih&pro=hapus&kode=$id_datalatih&kategori=$kategori'><img src='ypathicon/ha.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $kategori pada Salah Satu Datalatih Anda?..\")'></a></div></td>
				</tr>";
				
			$no++;
			}//for dalam
		}//if
		else{echo"<tr><td colspan='6'><blink>Maaf, Datalatih belum tersedia...</blink></td></tr>";}
?>
</table>

<?php
$jmldata = $jum;
if($jmldata>0){
	if($batas<1){$batas=1;}
	$jmlhal  = ceil($jmldata/$batas);
	echo "<div class=paging>";
	if($page > 1){
		$prev=$page-1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=datalatih'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=datalatih'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=datalatih'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
echo "<p align=center>Total data <b>$jmldata</b> item</p>";

echo"</div>";
}//for atas
?>

<?php } ?>
</div>
<br>
<div>
<a href='?mnu=datalatih&pro=tambah' class="btn btn-primary btn-sm" >Tambah Data</a>
|
<a href='?mnu=datalatih&pro=import' class="btn btn-success btn-sm" >Import Data</a>
</div>	

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	
	$kriteria1=strip_tags($_POST["kriteria1"]);
	$kriteria2=strip_tags($_POST["kriteria2"]);
	$kriteria3=strip_tags($_POST["kriteria3"]);
	$kriteria4=strip_tags($_POST["kriteria4"]);
	$kriteria5=strip_tags($_POST["kriteria5"]);
	$kriteria6=strip_tags($_POST["kriteria6"]);
	$kriteria7=strip_tags($_POST["kriteria7"]);
	$kriteria8=strip_tags($_POST["kriteria8"]);
	$kriteria9=strip_tags($_POST["kriteria9"]);
	$kriteria10=strip_tags($_POST["kriteria10"]);
	$kategori=strip_tags($_POST["kategori"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
	
if($pro=="simpan"){
  $sql="INSERT INTO `tb_datalatih` (
	 `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`, `kriteria6`, `kriteria7`, `kriteria8`, `kriteria9`, `kriteria10`, `kategori`, `keterangan`) VALUES (
	 '$kriteria1', '$kriteria2', '$kriteria3', '$kriteria4', '$kriteria5', '$kriteria6', '$kriteria7', '$kriteria8', '$kriteria9', '$kriteria10', '$kategori', '$keterangan')";

	
$simpan=process($conn,$sql);
	if($simpan) {echo "<script>alert('Data Salah Satu Kategori $kategori berhasil disimpan !');document.location.href='?mnu=datalatih';</script>";}
		else{echo"<script>alert('Data Salah Satu Kategori $kategori gagal disimpan...');document.location.href='?mnu=datalatih';</script>";}
	}
	else{
	$id_datalatih=strip_tags($_POST["id_datalatih"]);
	$id_datalatih0=strip_tags($_POST["id_datalatih0"]);


	$sql="UPDATE `tb_datalatih` SET 
	`kriteria1` = '$kriteria1', 
	`kriteria2` = '$kriteria2', 
	`kriteria3` = '$kriteria3', 
	`kriteria4` = '$kriteria4', 
	`kriteria5` = '$kriteria5', 
	`kriteria6` = '$kriteria6', 
	`kriteria7` = '$kriteria7', 
	`kriteria8` = '$kriteria8', `kriteria9` = '$kriteria9', `kriteria10` = '$kriteria10', `kategori` = '$kategori', 
	`keterangan` = '$keterangan' WHERE `id_datalatih` = '$id_datalatih0'";
	$ubah=process($conn,$sql);
		if($ubah) {echo "<script>alert('Data Salah Satu Kategori $kategori berhasil diubah !');document.location.href='?mnu=datalatih';</script>";}
		else{echo"<script>alert('Data Salah Satu Kategori $kategori gagal diubah...');document.location.href='?mnu=datalatih';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_datalatih=$_GET["kode"];
$kategori=$_GET["kategori"];
$sql="delete from `$tbdatalatih` where `id_datalatih`='$id_datalatih'";
$hapus=process($conn,$sql);
	if($hapus) {echo "<script>alert('Data Salah Satu Kategori $kategori berhasil dihapus !');document.location.href='?mnu=datalatih';</script>";}
	else{echo"<script>alert('Data Salah Satu Kategori $kategori gagal dihapus...');document.location.href='?mnu=datalatih';</script>";}
}
?>

<?php
if(isset($_POST["IMPORT"])){
$sql="Truncate `$tbdatalatih`";
$hapus=process($conn,$sql);

require_once 'Excel/reader.php';
		$data = new Spreadsheet_Excel_Reader();
		$data->setOutputEncoding('CP1251');
		$filename = $_FILES['excelfile']['tmp_name'];
		$nf = $_FILES['excelfile']['name'];
	
	$data->read($filename);
	$n=0;  
	for($x =2; $x <=count ($data->sheets[0]["cells"]); $x++){
		$NO = $data->sheets[0]["cells"][$x][1];
		$kriteria1= $data->sheets[0]["cells"][$x][2];
		$kriteria2= $data->sheets[0]["cells"][$x][3];
		$kriteria3= $data->sheets[0]["cells"][$x][4];
		$kriteria4= $data->sheets[0]["cells"][$x][5];
		$kriteria5= $data->sheets[0]["cells"][$x][6];
		
		$kriteria6= $data->sheets[0]["cells"][$x][7];
		$kriteria7= $data->sheets[0]["cells"][$x][8];
		$kriteria8= $data->sheets[0]["cells"][$x][9];
		$kriteria9= $data->sheets[0]["cells"][$x][10];
		$kriteria10= $data->sheets[0]["cells"][$x][11];
		$kategori= $data->sheets[0]["cells"][$x][12];
		$keterangan="Import datalatih file $nf No $NO";


		$sql="INSERT INTO `$tbdatalatih` (
			`kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`, `kriteria6`, `kriteria7`, `kriteria8`, `kriteria9`, `kriteria10`, `kategori`, `keterangan`) VALUES (
			'$kriteria1', '$kriteria2', '$kriteria3', '$kriteria4', '$kriteria5', '$kriteria6', '$kriteria7', '$kriteria8', '$kriteria9', '$kriteria10', '$kategori', '$keterangan')";
		  $simpan=process($conn,$sql);$n++;
	}
	
	echo "<script>alert('DataLatih Sebanyak $n berhasil dihapus !');document.location.href='?mnu=datalatih';</script>";
}
		?>