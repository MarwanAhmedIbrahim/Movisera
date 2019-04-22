<?php
  session_start();

  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
  }
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: home.php");
  }
?>

<?php
	define("TITLE", "Profile | MOVISERA");

	include 'includes/header.php';
	include 'server.php';
?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
#form {/*border: 3px solid #f1f1f1;*/ width: 50%; margin-right: auto;margin-left: auto; background-color: white; margin-top: 3%;}

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

<!--<div class="content" style=" margin-top: 10%; background-color: lightgrey; margin-right: auto; margin-left: auto; padding-top: 16px; padding-bottom: 16px; padding-right: 16px; font-size: 35px; width: 40%; text-align: center; color: grey;">-->
  	<!-- notification message
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>-->

    <!-- logged in user information
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

    	<p> <a href="index.php" class="bot" style="text-decoration: none; background-color: dodgerblue;">Enjoy Our Site</a> </p>
    <?php endif ?>
</div>


<div style="margin-top: 50px;  margin-right: auto; margin-left: auto; width: 40%; ">
	<p> <a href="Profile.php?logout='1'" class="bot" style="text-decoration: none; background-color: dodgerblue;">logout</a> </p>
</div>-->

<div id="form">
  <div class="imgcontainer">
    <img src="assets/images/boy1.png" alt="Avatar" class="avatar">
  </div>

  <div style="text-align: center; font-size: 20px;">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>



  </div>



  <div class="container">




     <div style="text-align: center;  ">

            <button onclick="window.location.href='index.php'" style="width:auto; background-color: #8bcae2;">Enter</button>

            <?php endif ?>


            <a href="Profile.php?logout='1'"><button  style="width:auto; background-color:  #d9bb6e;">Log out</button></a>
                                    

    </div>

  </div>
</div>




	<?php include 'includes/footer.php'; ?>
