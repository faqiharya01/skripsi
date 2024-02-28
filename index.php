<!DOCTYPE html>
<html lang="en">
<?php
if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);  
  ?>
<?php
session_start();
//error_reporting(0);
require_once"konmysqli.php";

$mnu="";
if(isset($_GET["mnu"])){
	$mnu=$_GET["mnu"];
}

//if (!isset($_SESSION["cid"])) {die("<script>location.href='login.php';</script>");}

date_default_timezone_set("Asia/Jakarta");

?>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>flexed</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    
    <div class="wrapper">
        <!-- end loader -->

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head-top">
                    <div class="container">

                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="email">
                                    <a href="#"><img src="images/mail_icon.png" /> Email : Faqiharya00@gmail.com</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="logo">
                                    <a href="index.php?mnu=home"><img src="images/logo.png" /></a><br>
									<?php 
										if($_SESSION["cstatus"]=="Administrator"){ echo"";
										} else { 
									?>
									<a href="login.php"><center>Login</a>
										<?php }?>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="contact_nu">
                                    <a href="#"> <img src="images/phone_icon.png" /> Contact : 0821 1690 4206</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg">
                    <div class="container">
                        <nav class="navigation navbar-expand-md  navbar-dark ">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
								<?php 
								if($_SESSION["cstatus"]=="Administrator"){ ?>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php?mnu=home">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=admin"> Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=datalatih">DataLatih</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=pengujian">Pengujian</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=nb">Analisa</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=validasi">Validasi</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=grafik">Grafik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=logout">Logout</a>
                                    </li>
								<?php } else { ?>
								<li class="nav-item active">
                                        <a class="nav-link" href="index.php?mnu=home">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=_pengujian">Pengujian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?mnu=_nb">Analisa</a>
                                    </li>
								
								<?php } ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
            <br><br><br><br><br><br>
            <?php if($mnu=="home" || $mnu==""){ ?>
            <!-- start slider section -->
            <div class="slider_section banner_main">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="first-slide" src="images/banner.jpg" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    <h1>Naive Bayes<br>
                <strong class="dark_brown">Deteksi Kecanduan Game</strong></h1>

                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    <h1>Naive Bayes<br>
                 <strong class="dark_brown">Deteksi Kecanduan Game</strong></h1>

                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    <h1>Naive Bayes<br>
                <strong class="dark_brown">Deteksi Kecanduan Game</strong></h1>

                                    <a href="#">contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- end slider section -->
            <?php } else {  ?>
              <br>
			<?php } ?>

            <!-- six_box-->
            <?php
if($mnu=="admin"){require_once"admin/admin.php";}
else if($mnu=="pprofil" || $mnu=="profil"){
	require_once"user/pprofil.php";}
else if($mnu=="datalatih"){require_once"datalatih/datalatih.php";}
else if($mnu=="pengujian"){require_once"pengujian/pengujian.php";}
else if($mnu=="nb"){require_once"nb.php";}
else if($mnu=="_pengujian"){require_once"pengujian/_pengujian.php";}
else if($mnu=="_nb"){require_once"_nb.php";}
else if($mnu=="grafik"){require_once"grafik.php";}								
else if($mnu=="login"){require_once"login.php";}
else if($mnu=="logout"){require_once"logout.php";}
else if($mnu=="nb2"){require_once"nb2.php";}
else if($mnu=="validasi"){require_once"validasi.php";}
else {require_once"home.php";}
?>

            

</body></html>


<?php
function WKT($sekarang){
	$wk="";
	if($sekarang=="0000-00-00"){$wk=date("Y-m-d");}
	else{
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,0,4);

$judul_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli", "Agustus", "September","Oktober", "November", "Desember");
$wk=$tanggal." ".$judul_bln[(int)$bulan]." ".$tahun;
	}
return $wk;
}
?>
<?php
function BAL($tanggal){
	$arr=explode(" ",$tanggal);
	if($arr[1]=="Januari"||$arr[1]=="January"){$bul="01";}
	else if($arr[1]=="Februari"||$arr[1]=="February"){$bul="02";}
	else if($arr[1]=="Maret"||$arr[1]=="March"){$bul="03";}
	else if($arr[1]=="April"){$bul="04";}
	else if($arr[1]=="Mei"||$arr[1]=="May"){$bul="05";}
	else if($arr[1]=="Juni"||$arr[1]=="June"){$bul="06";}
	else if($arr[1]=="Juli"||$arr[1]=="July"){$bul="07";}
	else if($arr[1]=="Agustus"||$arr[1]=="August"){$bul="08";}
	else if($arr[1]=="September"){$bul="09";}
	else if($arr[1]=="Oktober"||$arr[1]=="October"){$bul="10";}
	else if($arr[1]=="November"){$bul="11";}
	else if($arr[1]=="Nopember"){$bul="11";}
	else if($arr[1]=="Desember"||$arr[1]=="December"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";	
} 

function process($conn,$sql){
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

function getJum($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getField($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$d= $rs->fetch_assoc();
	$rs->free();
	return $d;
}

function getData($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	//$arr = $rs->fetch_assoc();
	
	//while ($row = $rs->fetch_assoc()) {
    // $arr[] = $row;
  // }
	$rs->free();
	return $arr;
}


function getAdmin($conn,$kode){
$field="nama_admin";
$sql="SELECT `$field` FROM `tb_admin` where `id_admin`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
	}	
?>
