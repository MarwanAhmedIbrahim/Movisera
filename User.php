<?php

	define("TITLE", "User Form | MOVISERA");

	include 'includes/header.php';

?>

<?php
  session_start();

  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
  }
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: login.php");
  }
?>

<form>
<div id="wrapper">
	<table>
		<tr>
			<p style="font-size: 35px;padding-top: 10px;">User-details</p>
			<td>
				<label id="labelu">Name:</label><br><input id="inputu" type="text" name="name" placeholder="Your name">
			</td>
		<tr>
			<label id="labelu">E-mail:</label><br><input id="inputu" type="text" name="name" placeholder="email@example.com">
		</tr>
		</tr>
		<tr>
			<td>
				<p style="font-size: 35px;padding-top: 10px;">Feedback</p>
			</td>
		</tr>
		<tr>
			<td>
				<p> <label id="labelu">How did you hear about us?</label><br><br>
					<label id="labelu"><i class="fab fa-google" style="font-size: 20px;color: dodgerblue;"></i>
						<input type="radio" name="where">
					</label>
					<label id="labelu"><i class="fas fa-user" style="font-size: 20px; color: dodgerblue;"></i>
						<input type="radio" name="where">
					</label>
					<label id="labelu"><i class="fab fa-adversal" style="font-size:20px;color: dodgerblue;"></i>
						<input type="radio" name="where">
					</label>
			</td>
		</tr>
		<tr>
			<td>
				<p> <label id="labelu">Would you visit us again?</label><br><br>
					<label id="labelu"><i class="fas fa-check-circle" style="font-size:20px;color: dodgerblue;"></i>
						<input type="radio" name="where">
					</label>
					<label id="labelu"><i class="fas fa-times-circle" style="font-size:20px; color: dodgerblue;"></i>
						<input type="radio" name="where">
					</label>
			</td>
		</tr>
		<tr>
			<td>
				<p> <label id="labelu">Comment:</label><br><br>
					<textarea id="inputu" rows="5" cols="45" placeholder="write your comment..."></textarea>
			</td>
		</tr>
	</table>
	<!--<input style="width: 100%; background-color:#ff9933; color: #f1f1f1 " type="submit" value="Submit " /> -->
	<a href="User.php"><button class="bot" style="vertical-align: middle; background-color: dodgerblue;"><span>Submit </span>
		</button></a>
</div>
</form>




<?php include 'includes/footer.php'; ?>
