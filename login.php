<?php include('server.php') ?>

<?php 
define("TITLE", "Login | MOVISERA");

include 'includes/header.php'; 
?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {/*border: 3px solid #f1f1f1;*/ width: 50%; margin-right: auto;margin-left: auto; background-color: white; margin-top: 3%;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 4px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 4px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>




<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="assets/images/boy.png" alt="Avatar" class="avatar">
  </div>
  <?php include('errors.php'); ?>
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >
        
    <button type="submit" name="login_user">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br>
    <label>
      Not a Member yet!
      <a href="register.php">Sign Up</a>
    </label>
  </div>
</form>




<?php include 'includes/footer.php'; ?>