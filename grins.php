<?php
include 'connect.php';
if($db -> connect_errno>0)
{
	echo "database could not be connected";
	exit; 
}

if(isset($_POST['user']))
{
	$user=$_POST['user'];
}
if(isset($_POST['grp']))
{
	$grpid=$_POST['grp'];
}
if($db -> connect_errno>0)
{
	echo "database could not be connected";
	exit; 
}

{
$stmt=$db->prepare("INSERT INTO `grp` (NAME,GRPID) VALUES (?, ?)");
$stmt->bind_param('ss',$user,$grpid);
$stmt->execute();
$stmt->close();
}
?>