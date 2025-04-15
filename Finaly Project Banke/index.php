<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
	<title>Login Page</title>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3 style="text-align: center;">Sign In</h3>
				</div>
				<form action="" method="POST">
				<div class="card-body">
					<form>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="id " name="id">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" name="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn" name="sub">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="Sginup.php">Sign Up</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	</form>
	<?php
	if (isset($_POST["sub"])) {
		$id = $_POST["id"];
		$pas = sha1($_POST["password"]);
		$conn = mysqli_connect('localhost', 'root', '', 'bank');
		$sql = "SELECT * FROM users where id='$id' and password='$pas';";
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		if (mysqli_num_rows($result)>0) {
			mysqli_fetch_row($result);
                        $_SESSION['id']=$id;
						
                        header("Location:main.php");    }       
										
        }
		 
		if ($id==1 and $pas== sha1('123')){
			
			header("Location:joinadmin.php");
		}
		
	
        

	?>
</body>

</html>