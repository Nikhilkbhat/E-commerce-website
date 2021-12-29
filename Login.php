<?php
include('header.php');
include('dbconnection.php');
?>
<style>
  body{
            background: linear-gradient(to left,#8942a8,#ba382f);
            width: 100%;
            height: 100vh;
         }

.head{
  padding-top: 100px;
}

</style>
<div class="head">
<div class="container" style="border: 2px solid white; margin: 50 auto;width: 40%; padding: 20px;">
	<h2 style="color: white;">Login</h2>
	<br>
<form method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"style="color: white; font-size: 20px;">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required="true">
    <div id="emailHelp" class="form-text"style="color: white; font-size: 20px;">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"style="color: white; font-size: 20px;">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required="true">
  </div>

  
  <button type="submit" class="btn btn-primary" name="login"style="color: white; font-size: 20px;">Submit</button>
</form>
</div>
</div>



<?php
session_start();
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM Dryfruits WHERE email='$email' AND password ='$password';";
  $result= $conn->query($sql);
  $row = $result->num_rows;

      if($row === 1) {
   echo '<div class="alert alert-success col-sm-6 ml-5 mt-2">Login Sucessful</div>';
   $_SESSION['loginuser']=$email;
   header("refresh:3;url=welcome.php");
 }
  else {
     echo '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Please enter correct details</div>';
  }
  }
?>
