<?php
$dbConnect=array(
'server'=>'localhost',
'user'=>'root',
'pass'=>'',
'name'=>'farmer');

$db=new mysqli($dbConnect['server'],
$dbConnect['user'],
$dbConnect['pass'],
$dbConnect['name']);

echo $db -> host_info;

if($db -> connect_errno>0)
{
	echo "database could not be connected";
	exit; 
}
$sql= "SELECT * FROM grp,farmer WHERE farmer.NAME=grp.name";

$result= $db->query($sql);
while($row=$result->fetch_object())
{
	$id=$row->ID;
	$name=htmlentities($row->NAME,ENT_QUOTES,"UTF-8"); 
	$land=$row->GRPID;
	
	echo "$id $name $land ";
	"<br>";
}

?>
