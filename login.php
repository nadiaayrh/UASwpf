<?php

	include("../configs/config_db.php");
    include("../classes/database.php");
    include("../classes/pengguna.php");

if(isset($_POST["id"]) OR isset($_POST["password"])){
		$id = $_POST["id"];
		$password = $_POST["password"];
		
		$user = new pengguna($id,$password);
		
		if($user->login() === FALSE){
			$pesan_error = "Username dan password tidak cocok";
		}
		else{
			// simpan session username & password
			
			session_start(); // memulai/mengulang session
			
			$_SESSION["id"] = $id;
			$_SESSION["password"] = $password;
			
			switch(strtolower($user->login())){
				case "putri nadia":	header("Location: manager/index.php"); 		break;
				
			}
		}
	}



?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login - RSNU MANGIR</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">

            <div class="card-header">Login Admin</div>
      
      <?php
		if(isset($pesan_error)) echo $pesan_error;
		?>
      <div class="card-body">
        <form method="POST" >
          <div class="form-group">
            <label for="ID">ID</label>
            <input class="form-control" name="id" id="id" type="text" placeholder="Input ID">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" name="password" id="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="Submit" value="Login">
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>