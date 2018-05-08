<?php 
include("../../configs/config_db.php");
include("../../classes/database.php");
include("../../classes/pasien.php");





$db = new database;
$datpasien     = new pasien;




$EditDataPasien = $datpasien->EditDataPasien($_GET['kode_pasien']);
$edit = $EditDataPasien->fetch_array();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMIN RSNU MANGIR</title>
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.php">ADMIN RSNU MANGIR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Layanan">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTransaksi" data-parent="#exampleAccordion">
         
            <i class="fa fa-fw fa-area-chart"></i>
			<span class="nav-link-chart">Layanan</span>
          </a>
                    <ul class="sidenav-second-level collapse" id="collapseTransaksi">
                        <li>
                            <a href="anggota.php">Data Anggota</a>
                        </li>

                        <li>
                            <a href="laporan.php">Data Laporan</a>
                        </li>
                        <li>
                            <a href="../../index.php">Lihat Web</a>
                        </li>
                    </ul>
                </li>



            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profil.php"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Profil</a>
                </li>
                <li class="breadcrumb-item">Edit Profil
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-magic"></i> Edit Profil Anda </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">

                            <form method="post" action="prosesedit.php">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>&nbsp; Data Anggota</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th>Id Pengguna</th>
                                            <th>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</th>
                                            <th><input name="kode_pasien" type="text" class="form-control" value="<?php echo $edit['kode_pasien']; ?>" required/></th>
                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th></th>
                                            <th>Nama Pengguna</th>
                                            <th>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</th>
                                            <th><input name="nama" type="text" class="form-control" value="<?php echo $edit['nama']; ?>" required/></th>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <th>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</th>
                                            <th><input name="gender" type="number_format" class="form-control" value="<?php echo $edit['gender']; ?>" required/></th>
                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Alamat</th>
                                            <th>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</th>
                                            <th><input name="alamat" type="text" class="form-control" value="<?php echo $edit['alamat']; ?>" required/></th>
                                        </tr>

                                        <tr>
                                            <th>Usia</th>
                                            <th>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</th>
                                            <th><input name="usia" type="text" class="form-control" value="<?php echo $edit['usia']; ?>" required/></th>
                                        </tr>
                                        
                                        <th>
                                            
                                        </th>
                                        <th>
                                        </th>

                                    </thead>
                                </table>
                                <br>
                                <a href="anggota.php" class="btn btn-xs btn-info">Kembali</a>
                                <input type="submit" class="btn btn-xs btn-success" value="Edit">

                            </form>
                            
                            <form action="smpn.php" method="post" enctype="multipart/form-data">
		<label for="berkas">Pilih file</label>
		<input type="file" name="berkas" accept="image/*"/>
		<input type="submit" value="UPLOAD" />
	</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>&copy;2017 Koperasi Intan Abadi by <a href="http://www.stikombanyuwangi.ac.id/">Stikom Banyuwangi</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../Logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../vendor/chart.js/Chart.min.js"></script>
            <script src="../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="../js/sb-admin-datatables.min.js"></script>
            <script src="../js/sb-admin-charts.min.js"></script>
        </div>
</body>


</html>
