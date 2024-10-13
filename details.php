<!DOCTYPE html>
<html>
<head>
	
	<title></title>
<?php include 'head.php';?>
</head>
<body>

<?php include 'menu.php';?>
<br><br>
<?php

if(isset($_POST['btnequiry'])){
extract($_POST);


pg_query("INSERT INTO tblcart(uid, pid,status) VALUES ('".$_SESSION['uid']."','".$_GET["id"]."','0')");

}

?>
<div class="row">
<?php
$q=pg_query("select * from tblproperty where pid=".$_GET['id']);
$r=pg_fetch_array($q);
	?>
	<div class="col-md-4">
		<form method="post">
	<table class="table"><center>
		<Tr>
			<td>
				Property Name:
			</td>
			<Td>
				<?php
	echo $r['pname'];?>
			</Td>
		</Tr>
		<Tr>
			<td>
				Property Price:
			</td>
			<Td>
				₹<?php
	echo $r['pprice'];?>/-
			</Td>
		</Tr>
		
		
		<Tr>
			<td>
				Description
			</td>
			<Td>
				<?php
 echo $r['pdesc'];
	
?>
			</Td>
		</Tr>
		<Tr>
			<td>
				Phone:
			</td>
			<Td>
				<?php
	echo $r['phone'];?>
			</Td>
		</Tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="btnequiry" class="btn btn-primary btn-floating" value="Send Enquiry">
				
			</td>
		</tr>
		</center>
	</table>
	</div>
	
</div>

<br><br><br>
<?php include 'footer.php';?>
</body>
</html>