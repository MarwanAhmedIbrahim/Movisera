<?php

	define("TITLE", "Contact US | MOVISERA");

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

<div id="testc">
            <div id="img">
                <a href="Top.html"><img id="openimgc" src="assets/images/Opera Snapshot_2018-04-23_125539_wisdekcorp.com.png"></a>
            </div>
            <div>
                <h2 id="dcc">Movisera
                    <div id="bdcc"></div><br>
                <table>
                  <tr>
                    <td>
                      <i class="fa fa-address-card" style="font-size:48px;color:dodgerblue"></i>zx
                     1097 Nile Corniche, Qasr an Nile, Cairo Governorate
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="fa fa-phone-square" style="font-size:48px;color:dodgerblue"></i>
                    </td>
                    <td>
                      <p>02 27916200</p>
                    </td>
                  </tr>
                </table>
                 <div id="bdc2c"></div><br>
                <table>
                  <tr>
                    <td>
                      <i class="fa fa-address-card" style="font-size:48px;color:dodgerblue"></i>
                    </td>
                    <td>
                      Alexandria Branch<br>
                    Al Metras, Qism Mina El-Basal, Alexandria Governorate
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="fa fa-phone-square" style="font-size:48px;color:dodgerblue"></i>
                    </td>
                    <td>
                      <p>03 4778100</p>
                    </td>
                  </tr>
                </table>
                <div id="bdc2c"></div><br>
                <table>
                  <tr>
                    <td>
                      <i class="fa fa-address-card" style="font-size:48px;color:dodgerblue"></i>
                    </td>
                    <td>
                      Giza Branch<br>
                    El Wahat Rd.، 6th OF OCTOBER، Giza, Giza Governorate
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="fa fa-phone-square" style="font-size:48px;color:dodgerblue"></i>
                    </td>
                    <td>
                      <p>02 38400118</p>
                    </td>
                  </tr>
                </table>  
                </h2>
                <h4></h4>

            </div>
          </div>



<?php include 'includes/footer.php'; ?>
