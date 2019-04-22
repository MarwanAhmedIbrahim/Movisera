<?php 
	
	define("TITLE", "Movies | MOVIESERA");

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
            Movies
            </h1>
        </div>
        
        
        <table>
            <tr>
                <?php 
    
    				foreach ($movies as $movie) {
				?>
				<td>
    				<div id="testm">
       					 <div id="img">
            				<a href="<?php echo $movie["slug"]; ?>">
            					<img id="openimgm" src="assets/images/<?php echo $movie["img"]; ?>.jpg">
            				</a> 
                        </div>
                        <div>
                           <h2 id="dcm"><?php echo $movie["name"]; ?>
                            	<div id="bdcm"></div><!-- the line under the title -->
                            	<a href="<?php echo $movie["slug"]; ?>">
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
    			 foreach ($movies2 as $movie) {
			?>
			<td>
    			<div id="testm">
        			<div id="img">
            			<a href="<?php echo $movie["slug"]; ?>">
            				<img id="openimgm" src="assets/images/<?php echo $movie["img"]; ?>.jpg">
            			</a> 
                    </div>
                    <div>
                       	<h2 id="dcm"><?php echo $movie["name"]; ?>
                        	<div id="bdcm"></div><!-- the line under the title -->
                            	<a href="<?php echo $movie["slug"]; ?>">
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