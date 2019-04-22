<?php

	define("TITLE", "About Us | MOVISERA");

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
<div id="CenterText">Movisera</div>
<table>
	<tr>
		<td>
			<div id="testa">
				<div id="img">
					<a href="https://www.facebook.com/marwan.ahmed.125">
						<img id="openimga" src="assets/images/edit_Snapchat-1917104215.jpg">
					</a>
				</div>
				<div>
					<h2 id="dca">Marwan Ahmad
						<div id="bdca"></div><!-- the line under the title -->
						<p>
							ID: 1516494<br>
							Work: Main Outline and Styling
						</p>
					</h2>

				</div>

			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div id="testa">
				<div id="img">
					<a href="https://www.facebook.com/ahmad.moutassem">
						<img id="openimga" src="assets/images/edit_WhatsAppImage2018-04-23at8.47.57PM.jpg">
					</a>
				</div>
				<div>
					<h2 id="dca">Ahmad Moutassem
						<div id="bdca"></div><!-- the line under the title -->
						<p>
							ID: 1516046<br>
							Work: About Us page
						</p>
					</h2>

				</div>

			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div id="testa">
				<div id="img">
					<a href="https://www.facebook.com/MehadHamdy">
						<img id="openimga" src="assets/images/edit_WhatsAppImage2018-04-23at8.57.56PM.jpg">
					</a>
				</div>
				<div>
					<h2 id="dca">Mehad Hamdy
						<div id="bdca"></div><!-- the line under the title -->
						<p>
							ID: 1516149<br>
							Work: Home Page
						</p>
					</h2>

				</div>

			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div id="testa">
				<div id="img">
					<a href="https://www.facebook.com/Braidy.mahmoud">
						<img id="openimga" src="assets/images/edit_WhatsAppImage2018-04-23at8.40.12PM.jpg">
					</a>
				</div>
				<div>
					<h2 id="dca">Mahmoud El-Braidy
						<div id="bdca"></div><!-- the line under the title -->
						<p>
							ID: 1516487<br>
							Work: Movies Page
						</p>
					</h2>

				</div>

			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div id="testa">
				<div id="img">
					<a href="https://www.facebook.com/ali.fadly.3">
						<img id="openimga" src="assets/images/edit_WhatsAppImage2018-04-23at9.43.26PM.jpg">
					</a>
				</div>
				<div>
					<h2 id="dca">Ali Ahmed
						<div id="bdca"></div><!-- the line under the title -->
						<p>
							ID: 1516332<br>
							Work: Tv-Series page
						</p>
					</h2>

				</div>

			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div id="testa">
				<div id="img">
					<a href="https://www.facebook.com/Mohamed.M.Bakkr">
						<img id="openimga" src="assets/images/edit_WhatsAppImage2018-04-23at10.05.27PM.jpg">
					</a>
				</div>
				<div>
					<h2 id="dca">Mohamed Bakr
						<div id="bdca"></div><!-- the line under the title -->
						<p>
							ID: 1516461<br>
							Work: User Form
						</p>
					</h2>

				</div>

			</div>
		</td>
	</tr>
</table>

<?php include 'includes/footer.php'; ?>
