<?php

	define("TITLE", "HOME | MOVISERA");

	include 'includes/header.php';

?>

<style>
	button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 4px;
  font-size: 1.25rem;
  margin: 16px;
}
button:hover {
  opacity: 0.8;
}
</style>

<style>
	* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  margin-top: 3%;
  height: 606px; /* Should be removed. Only for demonstration */
}

.left {
  width: 37%;
}

.right {
  width: 63%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<style>
	.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {

  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */

  width: 80%; /* Could be more or less, depending on screen size */
}

.container {
  padding: 16px;
}

.cancelbtn {
     width: 10%;


  }


</style>

<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>





<div id="id01" class="modal">

	<div style="text-align: center;">
		<video width="800" src="assets/images/WhatsApp Video 2018-12-12 at 2.15.09 AM.mp4" controls="true"></video>
	</div>


	<form class="modal-content animate" action="/action_page.php">


		<div class="container" style="text-align: center;">
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Close</button>

		</div>
	</form>
</div>






<div class="row">
	<div class="column left" style="background-color:white;">
		<div style="text-align: center; font-family: sans-serif; font-size: 48px; font-style: bold; padding-top: 151.5px; color: #d9bb6e !important;">Welcome<br>MOVISERA</div>
		<div style="text-align: center;  padding-top: 151.5px;">

			<button onclick="window.location.href='register.php'" style="width:auto; background-color: #8bcae2;">Register</button>


			<button onclick="window.location.href='login.php'" style="width:auto; background-color:  #d9bb6e;">Login</button>


		</div>
	</div>
	<div class="column right" style="background-color:#bbb;">
		<a href="#" onclick="document.getElementById('id01').style.display='block'"><img src="assets/images/welcome.png"></a>
	</div>
</div>

<?php include 'includes/footer.php'; ?>
