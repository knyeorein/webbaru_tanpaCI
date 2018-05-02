<?php
@session_start();
include "inc/konek.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blue Butterfly</title>
	<style type="text/css">
		body {
    		font-family:cursive;
    		font-weight: 250;
    		background-color:sandybrown;
    		background-size:auto;
    		background-position:center;
    		margin: 0;
		}
		#canvas{
			width: 960px;
			margin: 0 auto;
			border: 1px solid silver;
		}
		#header{
			font-size: 20px;
			font-family: cursive;
			padding: 40px;
			background-color: rosybrown;
		}
		#menu{
			background-color: saddlebrown;
		}
		#menu ul{
			list-style: none;
			margin: 0;
			padding: 0;
		}
		#menu ul li.utama{
			display: inline-table;
		}
		#menu ul li:hover{
			background-color: #0033cc;
		}
		#menu ul li a{
			display: block;
			text-decoration: none;
			line-height: 40px;
			padding: 0 10px;
			color: #fff;
		}
		.utama ul{
			display: none;
			position: absolute;
			z-index: 2;

		}
		.utama:hover ul{
			display: block;
		}
		.utama ul li{
			display: block;
			background-color: darksalmon;
			width: 140px;
		}
		#isi{
			min-height: 400px;
			padding: 20px;
			background-color: rosybrown;
		}
		.jumbotron {
    		display: flex;
    		align-items: center;
    		color: darksalmon;
    		height: 250px;
    		text-shadow: 0.25px 0.25px 0.25px #000000;
		}

		.jumbotron h2 {
    		font-family:cursive;
    		font-size: 60px;
    		background-size: 60px;
    		font-weight: 70;
    		margin: 0;
    		color:darkcyan;
		}
		.jumbotron h2 img{
    		width: 105px;
    		height: 105px;
		}
		.jumbotron h3 {
    		font-family:cursive;
    		margin: 0 0 20px;
    		color: peachpuff;
		}
		.jumbotron a {
    		font-family:cursive;
    		color: blueviolet;
		}
		section .row ul {
    		margin: 0 0 30px;
    		width: 100%;
		}
		.container .container{
    		background-color: beige;
		}
		section .row a{
    		font-family: cursive;
    		color: saddlebrown;
		}
		section .container a{
    		color: antiquewhite;
		}
		.col-sm-3 ul{
    		background-color: blanchedalmond;
    		margin: 0px 0px 30px;
    		padding-top: 10px;
    		padding-bottom: 10px;
    		padding-right: 20px;
		}
		.btn.btn-primary {
    		border-radius: 0px;
    		border: 0px;
    		color:brown;
    		text-shadow: none;
    		background-color:rosybrown;
		}
		.btn.btn-primary:hover {
    		color: antiquewhite;
    		background-color: rosybrown;
		}
		.btn-secondary {
    		background-color: #E8DFE0;
    		color: #ffffff;
		}
		#footer{
			text-align: center;
			padding: 20px;
			background-color: peachpuff;
		}
	</style>
</head>
<body>
<div id="canvas">
	<div id="header">
		Penjualan Roti Java Bakery
	</div>
	<div id="menu">
		<ul>
			<li class="utama">
				<a href="/webbaru">Beranda</a>
			</li>
			<li class="utama">
				<a href="">Menu</a>
				<ul>
					<li>
						<a href="?page=menu">Lihat Data</a>
					</li>
					<li>
						<a href="?page=menu&action=tambah">Tambah Data</a>
					</li>
				</ul>
			</li>
			<li class="utama">
				<a href="">Cart</a>
				<ul>
					<li>
						<a href="?page=cart">Lihat Data</a>
					</li>
					<li>
						<a href="?page=cart&action=tambah">Tambah Data</a>
					</li>
				</ul>
			</li>
			<li class="utama">
				<a href="">Gallery</a>
				<ul>
					<li>
						<a href="?page=gallery">Lihat Gallery</a>
					</li>
				</ul>
			</li>
			<li class="utama" style="float:right;">
				<a href="inc/LogOut.php">LogOut</a>
			</li>
		</ul>
	</div>
	<div id="isi">
		<section class="jumbotron">
            <div class="container">
                <div class="row text-center">
                    <h3><b>Take Your Time Before It Takes you</b></h3>
                    <a href="gall.html" role="button">
                        <b>GALLERY</b>
                    </a>

                </div>
            </div>
        </section>
        <?php
        $page = @$_GET['page'];
        $action = @$_GET['action'];
        if($page == "menu"){
        	if($action == ""){
        		include "inc/menu.php";
        	}else if($action == "tambah"){
        		include "inc/tambah.php";
        	}
        }else if($page == "cart"){
        	if($action == ""){
        		include "inc/cart.php";
        	}else if($action == "tambah"){
        		include "inc/tambah_Cart.php";
        	}
        }else if($page == "gallery"){
        	echo "Ini halaman gallery";
        }else if($page == ""){
        	echo "Welcome to the First Page";
        }else{
        	echo "404 Page not found";
        }
        ?>
	</div>

	<div id="footer">
	Copyright &copy 2018 - Maulinda Nugraeni
	</div>

</div>
</body>
</html>