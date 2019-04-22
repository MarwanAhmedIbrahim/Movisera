
<?php
    $conn = mysqli_connect("localhost", "root", "");

    if(!$conn) {die('database connection fail'.mysqli_error());}

    mysqli_select_db($conn,"products");
  ?>

<?php
        define("TITLE", "Search Results | MOVISERA");

        include 'includes/header.php';

?>
<body>
<?php
    $query = $_GET['query'];
    // gets value sent over search form

    $min_length = 3;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection

        $raw_results = mysqli_query($conn,"SELECT * FROM movies_series
            WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysqli_error($conn));

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop ?>




                <td>
                    <div id="testm" style="margin-right: auto; margin-left: auto; width: 20%;">
                         <div id="img">
                            <a href="<?php echo $results['text']; ?>">
                                <img id="openimgm" src="assets/images/<?php echo $results['img']; ?>">
                            </a>
                        </div>
                        <div>
                           <h2 id="dcm"><?php echo $results['title']; ?>
                                <div id="bdcm"></div><!-- the line under the title -->
                                <a href="<?php echo $results['text']; ?>">
                                    <button class="bot" style="vertical-align: middle">
                                        <span>See More </span>
                                    </button>
                                </a>
                            </h2>
                        </div>
                    </div>
                </td>

               <!-- echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id']) -->
          <?php  }

        }
        else{ // if there is no matching rows do following ?>


           <div  style="margin-right: auto; margin-left: auto; font-size: 35px; color: white; width: 20%; padding: 20px; text-align: center; margin-top: 10%; font-family: sans-serif;">
             <p> <?php echo "No Results"; ?> </p>
           </div>


      <?php  }

    }
    else{ // if query length is less than minimum ?>

         <div  style="margin-right: auto; margin-left: auto; font-size: 35px; color: white; width: 20%; padding: 20px; text-align: center; margin-top: 10%; font-family: sans-serif;">
             <p> <?php echo "Minimum length is ".$min_length; ?> </p>
           </div>



  <?php  }
?>


<?php include 'includes/footer.php'; ?>
