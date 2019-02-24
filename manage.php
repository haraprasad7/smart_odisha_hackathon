<html>
<head>
	<title>Manage groups</title>
	<link href="css\freg.css" rel="stylesheet">
</head>
<div class="farm">
<section>
	<div class="inner">
	<p>manage groups</p>
	</div>
	<div class=groups">
	<table>
	<tr>
	<th>GROUPID</th>
	</tr>

	
	
<form action="newgrp.php" method="post">
        <input type="text" name="grname">
		<input type="submit" name="submit" value="CREATE">
</form>
<div="adfarm">
<h3>ADD FARMER TO A GROUP<h3>
<form action="add.php" method="post" >
        <p>GROUP ID:<input type="text" name="grpid"></p>
		<p>FARMER ID:<input type="text" name="frmid"></p>
		<input type="submit" name="submit" value="ADD">
	
</form>
<h3>VIEW GROUP DATA<h3>
<form action="view.php" method="post">
        <p>GROUP ID:<input type="text" name="grpid"></p>
		<input type="submit" name="submit" value="view">
</form>

</div>
</section>
</div>
</html>