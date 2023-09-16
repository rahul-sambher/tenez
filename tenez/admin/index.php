<?php
session_start();
$con=mysqli_connect("localhost","root","","tenez");
if(mysqli_connect_error())
	echo "error";
?>
<html>
<head>
<title>Punjab Tennis Club : Tenez</title>
<link href="..\admin.css" type="text/css" rel="stylesheet">
<link href="..\css\bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<style>
	body {
        background-image: url(../images/admin.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 450px;
        }
	#bg h1{
		text-align:  ;
		color: #ffff;
	}
	#bg {
		 padding: 25px;
		 padding-top: 100px;
	}
	#bg img{
		width: 50%;
		padding-top: 45px;
		margin-left: 115px;
	}
	.userr{
		background-color: white;
		border-radius: 50px;
		margin-bottom: 20px;
		padding-right: 10px;
		}
	input{
		border: none;
		display: block;
		outline: none;
		padding: 10px;
		margin: 5px;
		}
	.userr p{
		font-size: 20px;
		padding-top: 17px;
		padding-left: 25px;
	}
	.admin{
		padding-right: 255px;
		}
	button{
		height: 45px;
		width: 100%;
		}
</style>
</head>
<body>
<?php
if (isset($_POST['btnlogin']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
	$q="select * from admin where username='$username'and password='$password'";
	$r=mysqli_query($con,$q);

	if(mysqli_num_rows9($r)==1)
	{
		session_start();
		$_SESSION['loginid']=$_POST['username'];
		echo"<script>window.location.href='dashboard.php'</script>";
	}
	else
	{
	echo"<script>alert('Invalid username or password')</script>";
	}
}
?>
<div class="row"  id="bg">
<div class="col-md-6">
	<img src="../images/login.png">
</div>
<div class="col-md-6">
<h1>Admin Login</h1>
<form action="#" method="POST">
<div class="form" action="#" method="POST">
<div class="row mt-4">
<div class="col-md-12 form-group admin">
<div class="row">
	<div class="col-md-12 userr">
	<div class="row">
			<div class="col-md-2">
				<p class="bi bi-person-circle"></p>
			</div>
			<div class="col-md-10">
				 <input type="text" name="username"  required class="form-contol" placeholder="Username">
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12 userr">
		<div class="row">
			<div class="col-md-2">
				<p class="bi bi-lock-fill"></p>
			</div>
			<div class="col-md-10">
				<input type="password" name="password" required class="form-contol" placeholder="Password">
			</div>
		</div>
	</div>
</div>
<button name="btnlogin" class="rounded-pill btn btn-warning">Login</button>
</div>
</div>
</div>
</form>
</div>
</div>
</body>
</html>
