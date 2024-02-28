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
  
  <h3>Form Pengujian</h3>
<form action="" method="post" enctype="multipart/form-data">
<table class="table" >

<tr>
<td height="16"><label for="nama">Nama Penguji</label>
<td>:<td>
<input required  style="width: 450px;" name="nama" type="text" id="nama"  size="45" />
</td>
</tr>

<tr>
<td height="16"><label for="email">Email Penguji</label>
<td>:<td>
<input required  style="width: 450px;" name="email" type="text" id="email"  size="45" />
</td>
</tr>

<tr>
<th width="35%"><label for="id_datalatih">Berapakah umur anda?
</label>
<th width="1%">:
<th colspan="2">
<input type="radio" name="kriteria1" id="kriteria1"  checked="checked" value="Dibawah 12 tahun" <?php if($kriteria1=="Dibawah 12 tahun"){echo"checked";}?>/>Dibawah 12 tahun<br>
<input type="radio" name="kriteria1" id="kriteria1" value="12 sampai 24 tahun" <?php if($kriteria1=="12 sampai 24 tahun"){echo"checked";}?>/>12 sampai 24 tahun<br>
<input type="radio" name="kriteria1" id="kriteria1" value="Diatas 24 tahun" <?php if($kriteria1=="Diatas 24 tahun"){echo"checked";}?>/>Diatas 24 tahun
</tr>


<tr>
<td><label for="status">Berapa lama anda bermain game setiap harinya?
</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria2" id="kriteria2"  checked="checked" value="Dibawah 4 jam" <?php if($kriteria2=="Dibawah 4 jam"){echo"checked";}?>/>Dibawah 4 jam<br> 
<input type="radio" name="kriteria2" id="kriteria2" value="4 sampai 8 jam" <?php if($kriteria2=="4 sampai 8 jam"){echo"checked";}?>/>4 sampai 8 jam<br>
<input type="radio" name="kriteria2" id="kriteria2" value="8 sampai 12 jam" <?php if($kriteria2=="8 sampai 12 jam"){echo"checked";}?>/>8 sampai 12 jam<br>
<input type="radio" name="kriteria2" id="kriteria2" value="Diatas 12 jam" <?php if($kriteria2=="Diatas 12 jam"){echo"checked";}?>/>Diatas 12 jam
</td></tr>

<tr>
<td><label for="status">Apakah anda memiliki keinginan yang kuat untuk mencapai kemenangan?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria3" id="kriteria3"  checked="checked" value="Ya" <?php if($kriteria3=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria3" id="kriteria3" value="Tidak" <?php if($kriteria3=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah anda  bermain game karena rasa bosan yang dia alami?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria4" id="kriteria4"  checked="checked" value="Ya" <?php if($kriteria4=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria4" id="kriteria4" value="Tidak" <?php if($kriteria4=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah anda  pernah meninggalkan kewajiban sebagai pelajar/mahasiswa seperti tidak mengerjakan tugas dan memilih bermain game?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria5" id="kriteria5"  checked="checked" value="Ya" <?php if($kriteria5=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria5" id="kriteria5" value="Tidak" <?php if($kriteria5=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah anda  pernah bermain Game terlalu lama dan melupakan hal hal lain dalam hidup?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria6" id="kriteria6"  checked="checked" value="Ya" <?php if($kriteria6=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria6" id="kriteria6" value="Tidak" <?php if($kriteria6=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah anda bermain game karena faktor lingkungan yang mempengaruhinya?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria7" id="kriteria7"  checked="checked" value="Ya" <?php if($kriteria7=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria7" id="kriteria7" value="Tidak" <?php if($kriteria7=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah anda lebih suka bermain game daripada berinteraksi sosial?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria8" id="kriteria8"  checked="checked" value="Ya" <?php if($kriteria8=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria8" id="kriteria8" value="Tidak" <?php if($kriteria8=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah anda menganggap game adalah aktivitas yang menyenangkan?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria9" id="kriteria9"  checked="checked" value="Ya" <?php if($kriteria9=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria9" id="kriteria9" value="Tidak" <?php if($kriteria9=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>

<tr>
<td><label for="status">Apakah anda dibatasi oleh orang tuanya untuk bermain game?</label>
<td>:<td colspan="2">
<input type="radio" name="kriteria10" id="kriteria10"  checked="checked" value="Ya" <?php if($kriteria10=="Ya"){echo"checked";}?>/> Ya &emsp;
<input type="radio" name="kriteria10" id="kriteria10" value="Tidak" <?php if($kriteria10=="Tidak"){echo"checked";}?>/> Tidak
</td></tr>



<tr>
<td>
<td>
<td colspan="2">
        <input name="Simpan" class="btn btn-success" type="submit" id="Simpan" value="Kirim" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_pengujian0" type="hidden" id="id_pengujian0" value="<?php echo $id_pengujian0;?>" />
        <a href="?mnu=_pengujian"><input class="btn btn-danger" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>


<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$nama=strip_tags($_POST["nama"]);
	$email=strip_tags($_POST["email"]);
	$tanggal=date("Y-m-d");
	$jam=date("H:i:s");
	
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
	$keterangan=strip_tags($_POST["keterangan"]);
	$rekapitulasi="";
	$kategori="";
	
	
  $sql="INSERT INTO `tb_pengujian` (
	 `nama`, `email`, `tanggal`, `jam`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`, `kriteria6`, `kriteria7`, `kriteria8`, `kriteria9`, `kriteria10`,
	  `rekapitulasi`, `kategori`, `keterangan`) VALUES (
	'$nama', '$email', '$tanggal', '$jam', '$kriteria1', '$kriteria2', '$kriteria3', '$kriteria4', '$kriteria5', '$kriteria6', '$kriteria7', '$kriteria8', '$kriteria9',
	 '$kriteria10', '$rekapitulasi', '$kategori', '$keterangan')";	
$simpan=process($conn,$sql);

$sql="select `id_pengujian` from `$tbpengujian` order by `id_pengujian` desc";
	$d=getField($conn,$sql);
	$id_pengujian=$d["id_pengujian"];
				
				
	if($simpan) {echo "<script>alert('Data Pengujian an $nama berhasil disimpan !');document.location.href='?mnu=_nb&id=$id_pengujian';</script>";}
		else{echo"<script>alert('Data Pengujian an $nama gagal disimpan...');document.location.href='?mnu=_pengujian';</script>";}
	}
?>
