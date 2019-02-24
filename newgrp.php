<?php
#include 'connect.php';
include 'layoutphp.html';
$grname=$_POST['grname'];
$s=$db->prepare("INSERT INTO `grps` (GRPID) VALUES (?)");
$s->bind_param('s',$grname);
$s->execute();
$s->close();

$create="CREATE TABLE `soh`.`$grname` ( `ID` INT(5) NOT NULL AUTO_INCREMENT , `FRMRID` VARCHAR(20) NOT NULL , `LAND` INT(20) NOT NULL , `PREM` INT(20) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB";
$resultgr=$db->query($create);
if($resultgr)
{
 header("Location: manage.php");
}
else{
	echo "group could not be created";
	header("Location: manage.php");
}

?>