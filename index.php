<?php
session_start();
$_SESSION['NameSession'] = "Key";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proteksi CSS Dengan PHP</title>
	<meta name="description" content="Preteksi CSS Dengan PHP"/>
	<meta name="keywords" content="Protection, CSS Guard, Script Guard, Protect File"/>

	<style type="text/css">@import url(http://localhost/demo/php/protek-css/style.css);</style>

</head>
<body>
	<div class="container">
		<header>
			<h1>Proteksi CSS Dengan PHP</h1>
			<p>Baca tutorialnya disini: <a href="http://www.tutorial-webdesign.com/proteksi-css-dengan-php/">http://www.tutorial-webdesign.com/proteksi-css-dengan-php/</a></p>
		</header>

		<section>
			<script type="text/javascript"><!--
			google_ad_client = "ca-pub-6255327593321660";
			/* DEMO - Big Horizontal */
			google_ad_slot = "5988107805";
			google_ad_width = 728;
			google_ad_height = 90;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</section>

		<section>
			Ini adalah contoh demo cara memproteksi css dengan php, untuk membuktikan apakah ini benar-benar memproteksi css maka silahkan buka <strong>View Source / View Page Source</strong> dari browser kamu <br>
			Maka kita hanya akan mendapatkan lokasi file css, namun jika url itu kita buka, maka kita tidak akan mendapatkan kode cssnya, melainkan hanya tulisan "CSS Protected" <br>
			Hal ini dikarenakan file css sebenarnya adalah script php yang dimanipulasi namanya dengan bantuan .htaccess

		</section>

		<section>
			<strong>Kelemahan</strong> <br>
			Memproteksi memang sulit, masih ada kelemahan jika menggunakan firebug, karena memang sebenarnya file css itu sudah disimpan di komputer kita, namun hal ini cukup bisa diandalkan untuk menyulitkan orang yang main copy-paste melalui fitur view source
		</section>
	</div>
</body>
</html>
