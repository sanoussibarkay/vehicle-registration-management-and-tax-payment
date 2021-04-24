

<?php

    if(isset($_SESSION['username'])==false) {

?>

  <div class="container">

         <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="tax.php">Tax</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="revalidate.php">Re-validate</a></li>
                <li><a href="comment.php">Make compplaint</a></li>
                <li><a href="Car-Park-Management-System/index.php">Parking</a></li>






              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>

            </div>
        </nav>



  </div>


    <?php } else { ?>
    <div class="container">
       <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="tax.php">Tax</a></li>
              <li><a href="contact.php">Contact us</a></li>
                <li><a href="revalidate.php">Re-validate</a></li>
                <li><a href="comment.php">Make compplaint</a></li>
                  <li><a href="Car-Park-Management-System/index.php">Parking</a></li>


                <!--
                 <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="newdriver.php">Add New Driver</a></li>
                    <li><a href="newvehicle.php">Add New Vehicle</a></li>
                    <li><a href="indexbill.php">Billing System</a></li>
                    <li><a href="bookinglist.php">Booking</a></li>
                    <li><a href="trip_details.php">Trip Details</a></li>
                  </ul>
                </li>
                -->

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Welcome <?php echo $_SESSION['username']; ?></a></li>
              </ul>
            </div>

        </div>

    </nav>
    </div>


    <?php } ?>
