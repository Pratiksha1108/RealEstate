<!DOCTYPE html>
<html>
<head>
	
	<title></title>
<?php include 'head.php';?>
</head>
<body>

<?php include 'menu.php';?>

<div class="row">

<?php
$q=pg_query("Select * from tblproperty where pid=".$_GET['id']);
while($r=pg_fetch_array($q)){
	?>
	<div class="col-md-4">
	<table class="table">
		<Tr>
			
			<Td colspan=2 align=center>
				<img src=<?php
	echo $r['pimage'];?> height=200px width=300px>
			</Td>
		</Tr>
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
				Property Description:
			</td>
			<Td>
				<?php
	echo $r['pdesc'];?>
			</Td>
		</Tr>
		
	
		<tr>
			<Td>
			<a href="viewenquiries.php?id=<?php echo $r['pid'];?>">View Enquiries</a>
			</Td>

		</Tr>
	</table>
	</div>
	
	                 

<?php
}
?>
</div>
<?php include 'footer.php';?>
</body>
</html>