<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $conn=mysqli_connect("remotemysql.com","oLK33sA5lz","pVYs7yUo1W","oLK33sA5lz");


    $username= $_SESSION['username'];
    //echo $username;

    $query= "SELECT  `first_name`, `last_name`, `email`, `telephone` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);

    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}
</style>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Register</h1>
                 <?php //echo $msg; ?>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="animated bounce" action="bookingaction.php" method="post">

                    <div class="input-group">
                      <span class="input-group-addon"><b> Driver's name</b></span>
                      <input id="name" type="text" class="form-control" name="name" value="<?php echo $row['first_name']." ". $row['last_name']; ?>"  required>
                    </div>
                      <br>

                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>

                    <br>

                    <div class="input-group">
                      <span class="input-group-addon"><b>Driver's phone</b></span>
                      <input id="mobile" type="text" class="form-control" name="mobile"value="<?php echo $row['telephone']; ?>" required>
                    </div>
                    <br>




                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Vehicle plate number</b></span>
                      <input id="licenseplates" type="text" class="form-control" name="licenseplates" placeholder="department" required>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Vehicle model</b></span> &nbsp;
                      <label><input type="radio" name="type" value="car">Car</label> &nbsp;
                      <label><input type="radio" name="type" value="bus">Bus</label>
                    </div>

                    <br>

                    <div class="input-group">
                      <span class="input-group-addon"><b>Vehicle engine number</b></span>
                      <input id="enginenumber" type="text" class="form-control" name="enginenumber" placeholder="vehicle engine number" required>
                    </div>
                    <br>

                    <div class="input-group">
                      <span class="input-group-addon"><b>Vehicle chassis number</b></span>
                      <input id="vehiclechassis" type="text" class="form-control" name="vehiclechassis" placeholder="Vehicle chassis numbe">
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Registration number</b></span>
                      <input id="regnumber" type="text" class="form-control" name="regnumber" placeholder="Vehicle chassis numbe">
                    </div>
                        <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>License validity</b></span>
                      <input id="licensevalidity" type="text" class="form-control" name="licensevalidity" placeholder="Vehicle chassis numbe">
                    </div>

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>driver id</b></span>
                      <input id="driverid" type="text" class="form-control" name="driverid" placeholder="Driver id">
                    </div>
  <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Reason for plying</b></span>
                      <input id="reasons" type="text" class="form-control" name="reasons" placeholder="Reason of entering in the campus">
                    </div>





<br>
<input type="hidden" name="username" value="<?php echo $username; ?>">
<br>
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>


                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
});

</script>
</body>
</html>
