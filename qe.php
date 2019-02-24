<?php
<?php
include 'connect.php';
if($db -> connect_errno>0)
{
	echo "database could not be connected";
	exit; 
}
$sql= "SELECT * FROM farmer";

$result= $db->query($sql);
if($result)
{
	echo "yes <br>";
}

while($row=$result->fetch_object())
{
	
	$id=$row->ID;
	$name=htmlentities($row->NAME,ENT_QUOTES,"UTF-8"); 
	$land=$row->LAND;
	$money=$row->MONEY;
	
	echo "$id $name $land $money <br> ";
	"<br>";
}
$stri="CREATE TABLE `farmer`.`grp1` ( `ID` INT(5) NOT NULL AUTO_INCREMENT , `FARMERID` VARCHAR(20) NOT NULL , `LAND` INT(20) NOT NULL , `PREM` INT(20) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB";
$result2=$db->query($stri);
if($result2)
{
	echo "yes";
}

?>