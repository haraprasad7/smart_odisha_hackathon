<?php
include 'connect.php';
if(isset($_POST['grpid']))
{
	$gid=$_POST['grpid'];
}
else
{
	echo "data not enetered";
	header("Location: manage.php");
}
if(isset($_POST['frmid']))
{
	$fid=$_POST['frmid'];
}
else
{
	echo "data not enetered";
	header("Location: manage.php");
}
$str="SELECT FARMERID,LAND FROM farmer";
$res=$db->query($str);
$row=$res->fetch_object();

while($row=$res->fetch_object())
{
	$fid=$row->FARMERID;
	if($fid==$frmid)
	{
		$land=$row->LAND;
		$premi=$row->LAND * 100;
		$stmt=$db->prepare("INSERT INTO `$gid` (FRMRID,LAND,PREM) VALUES (?, ?, ?)");
		$stmt->bind_param('sii',$fid,$land,$premi);	
		$stmt->execute();
		$stmt->close();
        header("Location: manage.php");

	}
	else{
		echo "farmer does not exist";
        header("Location: manage.php");
		
	}
}
    	
	
	
	
	



?>