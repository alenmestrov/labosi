<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="head">

</div>
<div class="glavnidiv">
<div class="nav">
<img class="logonav" src="slike/logo.jpg" alt="Logo" height="200" width="200">
<nav class="navigacija">
  <ul style="list-style-type:none">
 
 <li> <a href="/html/">HTML</a> </li>
 <li><a href="/css/">CSS</a> </li>
  <li><a href="/js/">JavaScript</a> </li>
  <li><a href="/jquery/">jQuery</a></li>
  </ul>
</nav>
</div>
<div class="stanje">
<ol class="sidra">
	<li><a href="#n1">Osobni podaci</a></li>
	<li><a href="#n2">Podaci o skolovanju</a></li>
	<li><a href="#n3">Podaci o radno mjestu</a></li>
	<li><a href="#n4">Znanja i vjestine</a></li>
	<li>
	<?php
	echo 'Hello!';
      ?></li>
	<button id="myButton" class="odjava" >Odjava</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "file:///C:/Users/Branimir/Desktop/DWA/lab1/login.php";
    };
</script>


<!-- kod za ispis imena iz login-a i link gumba odjave!-->
</div>
<div class="sadrzajstranice">
<h1 id="n1" class="naslov">Osobni podaci</h1>
<p><ul class="tekstzivo">
	<li>Ime:Alen</li>
	<li>Prezime:Meštrov</li>
	<li>Adresa:Kninski trg 10</li>
	</ul></p>
<h1 id="n2" class="naslov">Podaci o skolovanju</h1>
<p><ul class="tekstzivo">
	<li>1998-2006 Osnovna</li>
	<li>2006-2010 Srednja</li>
	<li>2010-2014 Fakultet</li>
	</ul>
	</p>
<h1 id="n3" class="naslov">Podaci o radnom mjestu</h1>
<p>
<ul class="tekstzivo">
	<li>2001. H1</li>
	<li>2002. Arheolosko iskapanje</li>
	<li>2003. Ugostiteljstvo</li>
	<li>2004. Ispomoc u skladistu</li>
	<li>2005. Iskon </li>
	<li>2009. Keramicka radionica</li>
	</ul></p>
<h1 id="n4" class="naslov">Znanja i vjestine</h1>
<p><ul class="tekstzivo">
	<li>Programiranje C#</li>
	<li>Programiranje Java</li>
	<li>Programiranje C++</li>
	<li>HTML,CSS,PHP</li>
	</p>

</div>
</div>
<footer class="footer">
<p>ISus krist motorist</p>
</footer>
</body>

</html>