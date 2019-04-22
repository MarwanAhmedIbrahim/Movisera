<?php

	define("TITLE", "Description | MOVISERA");

	include 'includes/header.php';

	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}


	if(isset($_GET['item'])) {

		$desc 	= strip_bad_chars( $_GET['item'] );

		$test		= $description[$desc];
	}

?>

 <table>
            <tr>
                <td>
                <div id="testd">
                     <div id="img">
                            <a href="Jumanji.html">
                                <img id="openimgd" src="assets/images/<?php echo $test["img"]; ?>.jpg">

                            </a>

                        </div>


                        <div class="dcd">
                            <h2><?php echo $test["name"]; ?>
                            <!-- <div id="bdc"></div> the line under the title -->
                            <p>
                            <?php echo $test["year"]; ?><br>
                            <?php echo $test["type"]; ?>
                            </p>
                            <p>
                            <?php echo $test["quality"]; ?>
                            </p>
                            <p>
                            	<?php echo $test["seasons"]; ?>
                            </p>



                            </h2>
                        </div>
                        <a href="User.php"><button class="button" style="vertical-align:middle"><span>Buy </span> <i class="fa fa-shopping-cart" style="font-size:29px;color:#FFFFFF"></i></button></a>

                        <p style="margin-top:225px "><iframe width="900" height="506" src="<?php echo $test["trailer"]; ?>" allowfullscreen>
                            </iframe></p>
                            <div class="Descriptiond" ><p>
                                <?php echo $test["description"]; ?>
                            </p></div>
                    </div>

                </td>
            </tr>
        </table>

<?php include 'includes/footer.php'; ?>
