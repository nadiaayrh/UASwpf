<?php
include("configs/config_db.php");
include("classes/database.php");
include("classes/pasien.php");


$db  			= new database;
$pasien         = new pasien;


?>

<!DOCTYPE html>
<html lang="en-US">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Klinik Sehat</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<link href="_include/css/bootstrap.min.css" rel="stylesheet">
<link href="_include/css/main.css" rel="stylesheet">
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="_include/css/fonts.css" rel="stylesheet">
<link href="_include/css/shortcodes.css" rel="stylesheet">
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<script src="_include/js/modernizr.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Koperasi Intan Abadi">Koperasi Intan Abadi</a>
        </div>
        <div class="nav-menu">
        	<ul id="top-menu">
            	<li class="active"><a href="index.php">Home</a></li>
              
				<li><a href="antrian.php">Daftar Antrian</a></li>
            </ul>
        </div>
        
    </div>
</header>
<div id="work" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <center>
                <h2 class="title">Pendaftaran Pasien Baru</h2>
            </center>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span8">        
        	<form id="pinjam-form" class="pinjam-form" method="post" action="pendaftaranbaru.php">
				<p>	  
						<input  name="kodepasien" type="kodepasien"  placeholder="NIK">
				</p>
				<p>	  
						<input       name="nama" type="text" placeholder="Nama Pasien">
				</p>
				<p>		
						<select  name="jk" placeholder="Jenis Kelamin">
							<option value="">Jenis Kelamin</option>
							<option value="LakiLaki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>		
				</p>

				<p>	  
						<input  name="alamat" type="text" placeholder="Alamat">
				</p>
				<p>	  
						<input  name="usia" type="text" placeholder="Usia">
				</p>
				<p>	 
						<input  name="keluhan" type="text" placeholder="Keluhan">
				</p>
            	
                <p>
						<center><input type="submit" class="submit" value="Cek Data"/></center>
				</p>
               
                
                
            </form>
         
        </div>
		<div class="span4">
			<?php
				if (isset($_POST['kodepasien'])) {
					
					session_start();
					
					
					$kodepasien	= $_POST['kodepasien'];
					$nama 		= $_POST['nama'];
					$alamat 	= $_POST['alamat'];
					$usia 	    = $_POST['usia'];
					$keluhan 	= $_POST['keluhan'];
					$tgl 		= date('Y-m-d');
					$gender		= $_POST['jk'];
					
					
			?>
			<h5 style="margin-left:30px">Data Pasien</h5>
			<table>
              <thead>
				
				<tr align="left">
					<th>NIK</th><th>&nbsp; : &nbsp;</th><th><?php echo $kodepasien ?></th>
				</tr>	
				<tr align="left">
					<th>Nama Pasien</th><th>&nbsp; : &nbsp;</th><th><?php echo $nama ?></th>
				</tr>
				<tr align="left">
					<th>Jenis Kelamin</th><th>&nbsp; : &nbsp;</th><th><?php echo $gender ?></th>
				</tr>				
				<tr align="left">
					<th>Alamat</th><th>&nbsp; : &nbsp;</th><th><?php echo $alamat?></th>
				</tr>	
				<tr align="left">
					<th>Keluhan</th><th>&nbsp; : &nbsp;</th><th><?php echo $keluhan?></th>
				</tr>	
				<tr align="left">
					<th>Tanggal Daftar</th><th>&nbsp; : &nbsp;</th><th><?php echo $tgl?></th>
				</tr>	
				<tr align="left">
					<th>Usia</th><th>&nbsp; : &nbsp;</th><th><?php echo $usia?></th>
                </tr>
              </thead>
            </table>
			<form id="pinjam-form" class="pinjam-form" method="post" action="">
			<input type="hidden" id="antrian" name="antrian" value="ANT-<?php echo $idantrian ?>">
			<input type="hidden" id="kodepasien" name="kodepasien" value="<?php echo $kodepasien ?>">
			<input type="hidden" id="nama" name="nama" value="<?php echo $nama ?>">
			<input type="hidden" id="gender" name="jk" value="<?php echo $gender ?>">
			<input type="hidden" id="alamat" name="alamat" value="<?php echo $alamat ?>">
			<input type="hidden" id="usia" name="usia" value="<?php echo $usia ?>">
			<input type="hidden" id="keluhan" name="keluhan" value="<?php echo $keluhan ?>">
			</br>
		    <center><input type="submit" id="submit" class="submit" value="Simpan Data"/></center>
			</form>
			<?php
				}
			?>
        </div>
        
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->


<!-- Footer -->
<footer>
	<p class="credits">&copy;2017 Klinik sehat by <a href="http://www.stikombanyuwangi.ac.id/">Putri Nadia Ayu Rahmawati</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>