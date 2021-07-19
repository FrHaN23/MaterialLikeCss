<!DOCTYPE html>
<html>
<head>
	<title>Markona</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<header>
	<div class="menu">
	<a href="index.php?page=home"><img src="assets/img/logo.png" alt="" width="110px" height="80px"></a>
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG KAMI</a></li>
			<li><a href="index.php?page=menu">MENU KAMI</a></li>
			<li><a href="index.php?page=forum">FORUM</a></li>
			<li><a href="index.php?page=findus">FIND US</a></li>
			<li><a href="index.php?page=login">LOGIN</a></li>
			
		</ul>
	</div>
</header>
	<div class="badan">
    
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'menu':
				include "halaman/menu.php";
				break;
			case 'forum':
				include "halaman/forum.php";
				break;
			case 'login':
				include "halaman/login.php";
				break;
			case 'findus':
				include "halaman/findus.php";
				break;			
			default:
				include "halaman/error.php";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	 <footer>
		 <h2 id="hub">Hubungi Kami</h2>
		<div class="container-kolom">
			<div class="container-baris">
			<div class="isikiri">
				<a href="" id="sosmed"><img src="assets/img/fb.png"   width="80px" height="60px"><br>Facebook</a>
			</div>
			<div class="isikanan">
				<a href="" id="sosmed"><img src="assets/img/inst.png"   width="60px" height="60px"><br>Instagram</a>
			</div>
			<div class="isikiri">
				<a href="" id="sosmed"><img src="assets/img/wa.png"   width="60px" height="60px"><br>Whatsapp</a>
			</div>
			<div class="isikanan">
				<a href="" id="sosmed"><img src="assets/img/line.png"   width="60px" height="60px"><br>Line</a>
			</div>
			<div class="isikiri">
				<a href="" id="sosmed"><img src="assets/img/discord.png"   width="60px" height="60px"><br>Discord</a>
			</div>
			<div class="isikanan">
				<a href="" id="sosmed"><img src="assets/img/yt.png"   width="60px" height="60px"><br>Youtube</a>
			</div>
			</div>
		</div>
		<p> Ujang &#169;2021</p>

	 </footer>

	</div>
</div>
</body>
</html>