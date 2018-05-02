<?php
@session_start();
include "inc/konek.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<style type="text/css">
		body{
			font-family:cursive;
			font-size: 14px;
    		font-weight: 250;
    		background-color:sandybrown;
    		background-size:auto;
    		background-position:center;
    		margin: 0;
		}
		#utama{
			color: white;
			width: 300px;
			margin: 0 auto;
			margin-top: 12%;
			background-color: saddlebrown;
		}
		#judul{
			padding: 15px;
			text-align: content;
			color: #fff;
			font-size: 20px;
			background-color: rosybrown;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
			border-radius: 10px;
			border-bottom: 1px solid #316666;
		}
		#input{
			background-color: #rosybrown;
			padding: 20px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}
		input{
			padding: 10px;
			border: 0;
		}
		.lg{
			width: 240px;
		}
		.btn{
			background-color:rosybrown;
			font-family: cursive;
			color: white;
			border-radius: 10px;
		}
		.btn:hover{
			background-color: rosybrown;
			cursor: pointer;
		}
	</style>
</head>
<body>
<div id="utama">
	<div id="judul">
		Halaman LogIn
	</div>
	<div id="input">
		<form action="" method="post">
			<div>
				<input type="text" name="user" placeholder="username" class="lg" />
			</div>
			<div style="margin-top:10px;">
				<input type="password" name="pass" placeholder="password" class="lg" />
			</div>
			<div style="margin-top:10px;">
				<input type="submit" name="LogIn" value="LogIn" class="btn" />
			</div>
		</form>
		<?php
		$user = @$_POST['user'];
		$pass = @$_POST['pass'];
		$login = @$_POST['LogIn'];

		if($login){
			if($user == "" || $pass ==""){
				?> <script type="text/javascript">
					alert("Username kosong / password kosong");</script> <?php
			} else {
				$sql = mysql_query("select * from tb_login where username = '$user' and password = md5('$pass')") or die (mysql_error());
				$data = mysql_fetch_array($sql);
				$cek = mysql_num_rows($sql);
				if($cek >= 1){
					if($data['level'] == "admin"){
						@$_SESSION['admin'] = $data['kode_user'];
						header("location: index.php");
					} else if($data['level'] == "operator"){
						@$_SESSION['operator'] = $data['kode_user'];
						header("location: index.php");
					} 
				} else {
					echo "Login gagal";
				}
			}

		}
		
		?>
	</div>
</div>
</body>
</html>
