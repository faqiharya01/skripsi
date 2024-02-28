<?php
$pro="simpan";
$gambar0="avatar.jpg";
$status="Aktif";
//$PATH="ypathcss";
?>

<script type="text/javascript"> 
function PRINT(pk){ 
win=window.open('admin/admin_print.php?pk='+pk,'win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 

</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
  $sql="select `id_admin` from `$tbadmin` order by `id_admin` desc";
  $jum= getJum($conn,$sql);
  $kd="USR";
		if($jum > 0){
				$d=getField($conn,$sql);
    			$idmax=$d['id_admin'];	
				$urut=substr($idmax,3,2)+1;//01
				if($urut<10){$idmax="$kd"."0".$urut;}
				else{$idmax="$kd".$urut;}
			}
		else{$idmax="$kd"."01";}
  $id_admin=$idmax;
?>
<?php
if($_GET["pro"]=="ubah"){
	$id_admin=$_GET["kode"];
	$sql="select * from `$tbadmin` where `id_admin`='$id_admin'";
	$d=getField($conn,$sql);
				$id_admin=$d["id_admin"];
				$id_admin0=$d["id_admin"];
				$nama_admin=$d["nama_admin"];
				$username=$d["username"];
				$password=$d["password"];
				$telepon=$d["telepon"];
				$email=$d["email"];
				$status=$d["status"];
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
  <?php if($_GET["pro"]=="tambah" ||$_GET["pro"]=="ubah" ){ ?>
  <h3>Masukan Data Pengguna</h3>
  <div>
			
<form action="" method="post" enctype="multipart/form-data">
<table class="table" >
<tr>
<th width="20%"><label for="id_admin">ID Pengguna</label>
<th width="1%">:
<th colspan="2"><b><?php echo $id_admin;?></b></tr>
<tr>
<td><label for="nama_admin">Nama Pengguna</label>
<td>:<td width="213"><input class="form-control" required style="width: 250px;" name="nama_admin" type="text" id="nama_admin" value="<?php echo $nama_admin;?>" size="25" />
</td>

</tr>

<tr>
<td height="24"><label for="telepon">Telepon</label>
<td>:<td><input class="form-control" style="width: 170px;"  required name="telepon" type="number" id="telepon" value="<?php echo $telepon;?>" size="25" />
</td>
</tr>

<tr>
<td height="24"><label for="email">Email</label>
<td>:<td><input class="form-control" style="width: 350px;"  required name="email" type="email" id="email" value="<?php echo $email;?>" size="25" />
</td>
</tr>

<tr>
<td height="24"><label for="username">username</label>
<td>:<td><input class="form-control" required  style="width: 150px;" name="username" type="text" id="username" value="<?php echo $username;?>" size="25" /></td>
</tr>

<tr>
<td height="24"><label for="password">Password</label>
<td>:<td><input class="form-control" required  style="width: 150px;"  name="password" type="password" id="password" value="<?php echo $password;?>" size="25" /></td>
</tr>

<tr>
<td><label for="status">Status</label>
<td>:<td colspan="2">
<input type="radio" name="status" id="status"  checked="checked" value="Aktif" <?php if($status=="Aktif"){echo"checked";}?>/>Aktif 
<input type="radio" name="status" id="status" value="Tidak Aktif" <?php if($status=="Tidak Aktif"){echo"checked";}?>/>Tidak Aktif
</td></tr>

<tr>
<td height="24"><label for="keterangan">Keterangan</label>
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
        <input name="id_admin" type="hidden" id="id_admin" value="<?php echo $id_admin;?>" />
        <input name="id_admin0" type="hidden" id="id_admin0" value="<?php echo $id_admin0;?>" />
        <a href="?mnu=admin"><input class="btn btn-danger" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>
<br />
</div>



<?php  
} if(empty($_GET["pro"])){

  $sqlc="select distinct(`status`) from `$tbadmin` order by `status` asc";
  $jumc=getJum($conn,$sqlc);
		if($jumc <1){
		echo"<h1>Maaf data admin belum tersedia</h1>";
		}
	$arrc=getData($conn,$sqlc);
		foreach($arrc as $dc) {						
				$status=$dc["status"];
				?>
<h3>Data Pengguna <?php echo $status?>:</h3>
<div>				
 
Cetak : <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $status;?>')"> | 
<a href='?mnu=admin&pro=tambah'>Tambah Data</a>
<br>

<table class="table table-bordered">
  <tr bgcolor="#ADD8E6">
    <th width="3%"><center>No</td>
    <th width="5%"><center>IDPengguna</td>
    <th width="25%">Nama Pengguna</td>
    <th width="10%"><center>Telepon</td>
	<th width="30%"><center>Keterangan</td>
    <th width="10%"><center>Menu</td>
  </tr>
<?php  
  $sql="select * from `$tbadmin` where  `status`='$status' order by `id_admin` desc";
  $jum=getJum($conn,$sql);
  $no=1;
		if($jum > 0){									
	$arr=getData($conn,$sql);
		foreach($arr as $d) {						
				$id_admin=$d["id_admin"];
				$nama_admin=strtoupper($d["nama_admin"]);
				$username=$d["username"];
				$password=$d["password"];
				$telepon=$d["telepon"];
				$email=$d["email"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				$color="#fff";		
					if($no %2==0){$color="#fff";}
echo"<tr bgcolor='$color'>
				<td align='center'>$no</td>
				<td align='center'>$id_admin</td>
				<td><a href='mailto:$email'>$nama_admin</a></td>
				<td align='left'>$telepon</td>
				<td align='left'>$keterangan</td>
				<td><div align='center'>
<a href='?mnu=admin&pro=ubah&kode=$id_admin'><img src='ypathicon/ub.png' title='ubah'></a>
<a href='?mnu=admin&pro=hapus&kode=$id_admin'><img src='ypathicon/ha.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama pada data admin ?..\")'></a></div></td>
				</tr>";
				
			$no++;
			}//for dalam
		}//if
		else{echo"<tr><td colspan='6'><blink>Maaf, Data admin belum tersedia...</blink></td></tr>";}
?>
</table>
<?php
}//for atas
?>

<?php } ?>
</div>
<br>
<div>
<a href='?mnu=admin&pro=tambah' class="btn btn-default btn-sm" >Tambah Data</a>
</div>	

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_admin=strip_tags($_POST["id_admin"]);
	$id_admin0=strip_tags($_POST["id_admin0"]);
	$nama_admin=strip_tags($_POST["nama_admin"]);
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$telepon=strip_tags($_POST["telepon"]);
	$email=strip_tags($_POST["email"]);
	$status=strip_tags($_POST["status"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
	
if($pro=="simpan"){
 $sql="INSERT INTO `$tbadmin` (
`id_admin` ,
`nama_admin` ,
`username` ,
`password` ,
`telepon` ,
`email` ,
`keterangan`, 
`status` 
) VALUES (
'$id_admin', 
'$nama_admin',
'$username',
'$password', 
'$telepon',
'$email',
'$keterangan',
'$status'
)";
	
$simpan=process($conn,$sql);
	if($simpan) {echo "<script>alert('Data $nama_admin berhasil disimpan !');document.location.href='?mnu=admin';</script>";}
		else{echo"<script>alert('Data $nama_admin gagal disimpan...');document.location.href='?mnu=admin';</script>";}
	}
	else{
	$sql="update `$tbadmin` set 
	`nama_admin`='$nama_admin',
	`username`='$username',
	`password`='$password',
	`telepon`='$telepon' ,
	`email`='$email',
	`status`='$status',
	`keterangan`='$keterangan'
	 where `id_admin`='$id_admin0'";
	$ubah=process($conn,$sql);
		if($ubah) {echo "<script>alert('Data $nama_admin berhasil diubah !');document.location.href='?mnu=admin';</script>";}
		else{echo"<script>alert('Data $nama_admin gagal diubah...');document.location.href='?mnu=admin';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_admin=$_GET["kode"];
$sql="delete from `$tbadmin` where `id_admin`='$id_admin'";
$hapus=process($conn,$sql);
	if($hapus) {echo "<script>alert('Data $nama_admin berhasil dihapus !');document.location.href='?mnu=admin';</script>";}
	else{echo"<script>alert('Data $nama_admin gagal dihapus...');document.location.href='?mnu=admin';</script>";}
}
?>

