<?php

	define("TITLE", "Tv-Series | MOVIESERA");

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
<div id="body">
        <div>
            <h1 id="btm">
           Tv-Series
            </h1>
        </div>


        <table>
            <tr>
                <?php

    				foreach ($tvSeries as $tvShow) {
				?>
				<td>
    				<div id="testm">
       					 <div id="img">
            				<a href="<?php echo $tvShow["slug"]; ?>">
            					<img id="openimgm" src="assets/images/<?php echo $tvShow["img"]; ?>.jpg">
            				</a>
                        </div>
                        <div>
                           <h2 id="dcm"><?php echo $tvShow["name"]; ?>
                            	<div id="bdcm"></div><!-- the line under the title -->
                            	<a href="<?php echo $tvShow["slug"]; ?>">
                            		<button class="bot" style="vertical-align: middle">
                            			<span>See More </span>
                            		</button>
                        		</a>
                            </h2>
                        </div>
                    </div>
                </td>

			<?php
				}
			?>
        </tr>
        <tr>
        	<?php
    			 foreach ($tvSeries2 as $tvShow) {
			?>
			<td>
    			<div id="testm">
        			<div id="img">
            			<a href="<?php echo $tvShow["slug"]; ?>">
            				<img id="openimgm" src="assets/images/<?php echo $tvShow["img"]; ?>.jpg">
            			</a>
                    </div>
                    <div>
                       	<h2 id="dcm"><?php echo $tvShow["name"]; ?>
                        	<div id="bdcm"></div><!-- the line under the title -->
                            	<a href="<?php echo $tvShow["slug"]; ?>">
                           			<button class="bot" style="vertical-align: middle">
                           		 		<span>See More </span>
                            		</button>
                        		</a>
                        </h2>
                    </div>
                </div>
            </td>
			<?php
				}
			?>
        </tr>
        </table>
    </div>






<?php include 'includes/footer.php'; ?>
