<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</div>
</head>
<body>

  

<?php include 'menu.php';?>
<br><br>
<div class="inside-banner">
  <div class="container"> 
    
    <h2><center>Login</center></h2>
</div>

<br><br>
<?php
if(isset($_POST['btnlogin'])){
  extract($_POST);
 $q=pg_query("select * from tbluser where email='$txtemail' and upass='$txtpass'");
 if(pg_num_rows($q)>0){
  $_SESSION['email']=$txtemail;

  
  $q1=pg_query("select * from tbluser where email='".$_SESSION['email']."'");
  $r1=pg_fetch_array($q1);
  $_SESSION['uid']=$r1['uid'];
  $_SESSION['uname']=$r1['uname'];
  
  ?>
  <script type="text/javascript">
    window.location.href="welcome.php";
  </script>
  <?php
 }
 else{
  ?>
  <script type="text/javascript">
    alert("Invalid Credentials");
  </script>
  <?php
 }
}

?>


<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <form method="post">
      <table class="table">
         <Tr>
          <Td>
            Email
          </Td>
          <td>
            <input type="email" name="txtemail" placeholder="Enter Email" required class="form-control">
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
          <Td colspan=2 align=center>
            <input type="submit" name="btnlogin" value="Login" class="btn btn-success">
          </Td>
          
        </Tr>
      </table>
    </form>
  </div>
</div>

<?php include 'footer.php';?>
</body>
</html>