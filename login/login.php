<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/logo-desa.png">


</head>

<body>

    <title>DESA CISALAK 2022</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">  
<div class="container">
	<div class="form-container sign-in-container">
    <form action="" method="post">
			<h1>APLIKASI DESAKU </h1>
            <br>
			<span>Login dulu yuk</span>
			<input type="text" name="username" placeholder="username" class="input-control"><br>
            <input type="password" name="password" placeholder="password" class="input-control"><br>
            <input type="submit" name="submit" placeholder="Masuk" class="kun"><br>
		</form>

        <?php
    if(isset($_POST['submit'])) {
        session_start();
        include 'koneksi.php';
        $username = mysqli_real_escape_string ($koneksi, $_POST['username']);
        $password = mysqli_real_escape_string ($koneksi, $_POST['password']);

        $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'");
        if(mysqli_num_rows($sql) > 0 ) {
            $d = mysqli_fetch_object($sql);
            $_SESSION['status_login'] = true;
            $_SESSION['a_global'] = $d;
            $_SESSION['id'] = $d->id;
            echo '<script>window.location="index.php"</script>';
        } else {
            echo '<script>alert("Salah") </script>';
        }
    }
    ?>

	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
            <img src="../img/logo-desa.png" width="140" height="150">
            <br>
				<h1>DESA CISALAK</h1>
				<p>Mewujudkan Desa Cisalak yang Aman,Maju,Sejahtera dan Religius dengan berbasis Gotong Royong</p>
                <h3> 2022 </h3>
			</div>
		</div>
	</div>
</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

</body>

</html>