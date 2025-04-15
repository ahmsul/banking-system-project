<!DOCTYPE html>
<html>
<head>
	<title>home Page</title>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style1.css">

	<meta charset="UTF-8"/>



</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="text-align: center;">Sign up </h3>
			</div>
			<div class="card-body">
				<form action="" method="POST">
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							                                        <!-- الايومجي اللي يعبر عن المطلوب i كلاسات  -->
							<span class="input-group-text"><i class="fas fa-id-card"></i></span>
							                                        
						</div>
						<input type="number" class="form-control" placeholder="id" name="id">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							                                <!-- الايومجي اللي يعبر عن المطلوب i كلاسات  -->
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							                               <!-- الايومجي اللي يعبر عن المطلوب i كلاسات  -->
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="name" name="name">
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							                                <!-- الايومجي اللي يعبر عن المطلوب i كلاسات  -->
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>

                    

					<div class="input-group form-group">
						<div class="input-group-prepend">
							                                <!-- الايومجي اللي يعبر عن المطلوب i كلاسات  -->
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="number" class="form-control" placeholder="Account number" name="account">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="number" class="form-control" placeholder="mobile" name="mobile">
					</div>
                   
					<div class="input-group form-group">
					<div class="form-group">
					
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-left login_btn" name="login">
							<a href="index.php"></a>
						</div>
						<div class="form-group1">
							<input type="submit" style="text-align: left;" value="cancel" class="btn float-right login_btn" name="cancel">
						</div>
				</form>
				
			</div>
			</div>
		</div>
	</div>
</div>
<?php 
if(isset($_POST["login"])){
	$id = $_POST["id"];
	$username = $_POST["username"]; 
        $pas = sha1($_POST["password"]);
	$name = $_POST["name"];
	$account = $_POST["account"];
	$mobile = $_POST["mobile"];
	$conn = mysqli_connect('localhost','root','','bank')or die("لايمكن الاتصال بقاعدة البيانات");
            $sql="SELECT * FROM users WHERE id='$id';";
            $result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0) {
				 ?> "<h2 style="text-align: center;"> المستخدم او كلمة المرور مستخدمة مسبقا</h2>"; <?php 
			} else {
				$sql = "insert into users (id, username  , name , mobile , password ) values ('$id','$username','$name','$mobile','$pas');";
			
			$result = mysqli_query($conn,$sql);
                        $sql= "insert into info (id , acc_id ) values ('$id','$account');";
                        mysqli_query($conn, $sql);
			mysqli_close($conn);
			header("Location:index.php");
			}
}
elseif(isset($_POST["cancel"])){
	header("Location:index.php");
}

?>
</body>
</html>