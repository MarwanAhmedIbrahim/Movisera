<?php

    define("TITLE", "Home | MOVIESERA");

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



<form class="example" action="search.php" method="GET" style="margin:auto;max-width:700px;margin-top: 5%;">
  <input type="text" placeholder="Search.." name="query">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>


<div id="test">
  <div id="img">
    <a href=""><img id="openimg" src="assets/images/Netflix-Background.jpg"></a>
  </div>
  <div id="dc2">
    <h2 id="dc">Movies & Tv-Series
      <div id="bdc"></div>
    </h2>
    <h4 class="details">Welcome to MAS.AM | MAS.AG, the only official source for MAS MOVIESERA movies & tv-series. MOVISERA movies & tv-series are best known for the excellent BluRay quality at small file-size, which can be downloaded fast for free.
      MOVISERA movies & tv-series are encoded using x264 codec and MP4 container for best compatibility with all devices, so all users around the world can download MOVISERA torrents and enjoy the movies.</h4>
  </div>
  <a href="Movies.php">
    <button class="bot" style="vertical-align:middle;">
      <span>Movies </span>
    </button>
  </a><br>
  <a href="Tv-Series.php">
    <button class="bot" style="vertical-align:middle;">
      <span>Tv-Series </span>
    </button>
  </a>




</div>




<?php include 'includes/footer.php'; ?>
