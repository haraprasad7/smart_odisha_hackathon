<?php
include 'layoutphp.html';
#include 'connect.php';
?>
 <table>
 <tr>
	<th>ID</th>
 	<th>FARMERID</th>
	<th>NAME</th>
	<th>MOBILE</th>
	<th>AADHAR</th>
	<th>CROP</th>
	<th>LAND</th>
	<th>INVEST</th>
	<th>ACCEPT</th>
 </tr>
 <?php
$val="yes";
$stri="SELECT * FROM farmer WHERE INVEST='$val'";
$res=$db->query($stri);
while($row=$res->fetch_object())
{ 
    $id=$row->ID ;
	$farmid=$row->FARMERID;
	$fname=$row->NAME;
	$mob=$row->MOBILE;
	$aad=$row->AADHAR;
	$crop=$row->CROP;
	$land=$row->LAND;
	$i=$row->INVEST;
	$l=$row->ACCEPT;

?>

 <tr>
 <td><?php echo $id ?></td>
 <td><?php echo $farmid ?></td>
 <td><?php echo $fname ?></td>
 <td><?php echo $mob ?></td>
 <td><?php echo $aad ?></td>
 <td><?php echo $crop ?></td>
 <td><?php echo $land ?></td>
 <td><?php echo $i ?></td>
 <td><?php echo $l ?></td>
 
 </tr>
 
 <?php 
}
?>
</table>
