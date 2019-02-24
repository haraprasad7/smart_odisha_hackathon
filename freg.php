<?php
include 'layoutphp.html';
include 'connect.php';

?>
<head>
	<title>Farmer regisration</title>
	<link href="css\freg.css" rel="stylesheet">

</head>
<div class="farm">
<section>
	<div class="inner">
	<p>Farmer Registration</p>
	</div>
	<form action="reg.php" method="post">
		<p>FARMER ID:<input type="text" name="fid"></p>
		<p>NAME:<input type="text" name="user"></p>
		<p>MOBILE:<input type="text" name="mob"></p>
		<p>AADHAR NUMBER:<input type="text" name="aad"></p>
		<p>CROP TYPE:<input type="text" name="crop"></p>
		<p>LAND AREA(in hectares):<input type="text" name="land"></p>
		<p>
		INVEST IN ANOTHER LAND/GROUP:
			YES:<input type="radio" name="itype" value="yes"/>
	        NO:<input type="radio" name="itype" value="no"/>
		</p>
		<p>
		ACCEPT INVESTMENT FROM ANOTHER FARMER/GROUP:
			YES:<input type="radio" name="ltype" value="yes"/>
	        NO:<input type="radio" name="ltype" value="no"/>
		</p>
		
	
		<input type="submit" name="submit" value="submit">
	</form>

</section>
</div>
