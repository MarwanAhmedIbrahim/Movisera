<?php include('server.php') ?>
<?php

  define("TITLE", "Registration | MOVISERA");

  include 'includes/header.php';

?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #ccc;
  
  border-radius: 4px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
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

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width 
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}*/

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>


<form action="register.php" method="post" style="border:1px solid #ccc;  width: 50%; margin-right: auto;margin-left: auto; background-color: white; margin-top: 3%;">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <?php include('errors.php'); ?>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="password_1"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_1">

    <label for="password_2"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2">
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      
      <button type="submit" name="reg_user" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


<?php include 'includes/footer.php'; ?>