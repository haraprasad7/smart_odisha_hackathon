<?php
#include 'connect.php';


if(isset($_POST['fid']))
{
	$id=$_POST['fid'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
if(isset($_POST['user']))
{
	$uname=$_POST['user'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
if(isset($_POST['mob']))
{
	$mobile=$_POST['mob'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
if(isset($_POST['aad']))
{
	$adh=$_POST['aad'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
if(isset($_POST['crop']))
{
	$crop=$_POST['crop'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
if(isset($_POST['land']))
{
	$land=$_POST['land'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
if(isset($_POST['itype']))
{
	$i=$_POST['itype'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
if(isset($_POST['ltype']))
{
	$l=$_POST['ltype'];
}
else
{
	echo "data not enetered";
	header("Location: freg.php");
}
$stmt=$db->prepare("INSERT INTO `farmer` (FARMERID,NAME,MOBILE,AADHAR,CROP,LAND,INVEST,ACCEPT) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssississ',$id,$uname,$mobile,$adh,$crop,$land,$i,$l);
$stmt->execute();
$stmt->close();
header("Location: freg.php");

?>