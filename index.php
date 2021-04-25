<?php
    $connection=mysqli_connect("remotemysql.com","mxGxQeDMmY","29L092KTIJ","mxGxQeDMmY");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vehicle management system</title>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">



</head>
<style>

.parallax {
    /* The image used */
    background-image: url("bus-people-public-transportation-3417.jpg");
    height: 10%;
    weight:50%;

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    }



    .navbar-fixed-top.scrolled {
       background-color: #ffffff;;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">








    <!--
    <div>
       <div class="jumbotron">
          <h2 class="animated bounce">Ruet Vehicle Management</h2>
          <p>A management system where you can easily manage vehicles.</p>
        </div>



    </div>
    -->
    <div class="parallax foo">
       <?php include 'navbar.php';?>

        <div class="hero-text" style="font-size:25px ;text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">

            <h1 class="animated rubberBand"  style="font-size:35px ;text-align: center; " >Abdou moumouni campus vehicle registration</h1>
            <p>A management system where you can easily pay your taxes and get a permit for plying into the campus </p>

            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="booking.php">Register your vehicle</a>

            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login To ply  inside  the campus</a>
            <?php } ?>

          </div>
    </div>





        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
                <p>All rights </p>
        </footer>







<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
});

    </script>


  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

</body>
</html>
