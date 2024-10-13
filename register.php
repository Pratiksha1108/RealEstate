<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<?php include 'head.php';?>
</head>
<body>

<?php include 'menu.php';?>
<br><br>
<div class="inside-banner">
  <div class="container"> 
    
    <h2><center>Registration</center></h2>
</div>

<br><br>
<?php
if(isset($_POST['btnsave'])){
  extract($_POST);
  
  pg_query("INSERT INTO tbluser(uname, upass, email, aadhar, phoneno,address) VALUES ('$txtname','$txtpass','$txtemail','$txtaadhar','$txtphone','$txtaddress')");
  ?>
  <script type="text/javascript">
    alert("Registeration Successfull");
    window.location.href="login.php";
  </script>
  <?php
}

?>


<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <form method="post">
      <table class="table">
        <Tr>
          <Td>
            Name
          </Td>
          <td>
            <input type="text" name="txtname" placeholder="Enter Name" required class="form-control" >
          </td>
        </Tr>
        <Tr>
          <Td>
            Email
          </Td>
          <td>
            <input type="text" required name="txtemail" placeholder="Enter Email" class="form-control">
          </td>
        </Tr>
        <Tr>
          <Td>
            Password
          </Td>
          <td>
            <input type="password" required name="txtpass" placeholder="Enter Password" class="form-control">
          </td>
        </Tr>
        <Tr>
          <Td>
            Aadhar Card
          </Td>
          <td>
            <input type="text" title="Min 12 Digits" name="txtaadhar" placeholder="Enter Adhar" required pattern="^[0-9]{12}$" class="form-control">
          </td>
        </Tr>
        <Tr>
          <Td>
           Phone No
          </Td>
          <td>
            <input type="text" title="Min & Max 10 Digits" name="txtphone" placeholder="Enter Phone" required pattern="^[0-9]{10}$" class="form-control">
          </td>
        </Tr>
        <Tr>
          <Td>
           Address
          </Td>
          <td>
           <textarea name="txtaddress" placeholder="Enter Address" class="form-control"></textarea>
          </td>
        </Tr>
        <Tr>
          <Td colspan=2 align=center>
            <input type="submit" name="btnsave" value="Register" class="btn btn-success">
          </Td>
          
        </Tr>
      </table>
    </form>
  </div>
</div>

<?php include 'footer.php';?>
</body>
</html>