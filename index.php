<!DOCTYPE html>
<html>
<head>
	<title>Mia</title>
<style type="text/css">
body {
background-image: url("coba1.gif");
}

.animasi-teks {
  font-size: 20px;
  width: 100%;
  white-space:nowrap;
  overflow:hidden;
  -webkit-animation: typing 5s steps(70, end);
  animation: animasi-ketik 5s steps(70, end);
}

@keyframes animasi-ketik{
  from { width: 0; }
}

@-webkit-keyframes animasi-ketik{
  from { width: 0; }
}

</style>
</head>
<body>
 
	<style>
	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
 
	.jam-digital-malasngoding {
		overflow: hidden;
		width: 330px;
		margin: 20px auto;
		border: 5px solid #efefef;
	}
	.kotak{
		float: left;
		width: 110px;
		height: 100px;
		background-color: #262626;
	}
	.jam-digital-malasngoding p {
		color: #fff;
		font-size: 36px;
		text-align: center;
		margin-top: 30px;
	}
 
 
</style>
 <br>
 <br>
 <br>
 <br>
 <br>


<center>
<div class="animasi-teks">
	<h1><font face="tipe_font_face" color="white">Haiii, Omedeto</font></h1>
</div>
</center>
 
<div class="jam-digital-malasngoding">
	<div class="kotak">
		<p id="jam"></p>
	</div>
	<div class="kotak">
		<p id="menit"></p>
	</div>
	<div class="kotak">
		<p id="detik"></p>
	</div>
</div>
 <center>
 	<h2><font face="tipe_font_face" color="white">Selamat Semprotulation</font></h2>
 	<h2><font face="tipe_font_face" color="white">Gas Keun Teruss</font></h2>
 	<h2><font face="tipe_font_face" color="white"> -Ben :v </font></h2>
 

</center>

<script>
	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}

</script>
</body>
</html>
