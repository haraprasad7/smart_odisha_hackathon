<?php
#include 'connect.php';
include 'layoutphp.html';
if(isset($_POST['grpid']))
{
	$var=$_POST['grpid'];
}
else
{
	echo "data not enetered";
	header("Location: manage.php");
}
$stri="SELECT * FROM `$var`";
$res=$db->query($stri); ?>
 <table>
 <tr>
 <th>ID</th>
 <th>FARMERID</th>
 <th>LAND</th>
 <th>PREMIUM</th>
 </tr>
 <?php
while($row=$res->fetch_object())
{
    $id=$row->ID;
	$fid=$row->FRMRID;
	$land=$row->LAND;
	$premi=$row->PREM;
?>

 <tr>
 <td><?php echo $id ?></td>
 <td><?php echo $fid ?></td>
 <td><?php echo $land ?></td>
 <td><?php echo $premi ?></td>
 </tr>
 </table>
 
 <?php 
}
?>

