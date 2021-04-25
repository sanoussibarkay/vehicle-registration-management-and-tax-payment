<?php
$connection=mysqli_connect("remotemysql.com","oLK33sA5lz","pVYs7yUo1W","oLK33sA5lz");

session_start();
date_default_timezone_set('Asia/Shanghai');
include 'comment.inc.php';
include 'db.php';

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vehicle management system</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">



</head>
<style>

.parallax {
    /* The image used */

    height: 100%;

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


<br>
<br>
<br>
<br>
<br>


<?php if(isset($_SESSION['username'])==true) {


  echo "<form method='POST' action='".setcomments($conn)."'>
    <input type='hidden' name='uid' value=''>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <h5 >Type in Suggestion/Complaint </h5>
    <textarea name='message' >
    </textarea>
    <br>
    <button type='submit' name='commentsubmit'>submit</button>
  </form>";

 } else{
echo " <a class='btn btn-success' style='text-align: center' href='login.php'>Login To make a complaint</a>";
 }
 ?>





    <div class="parallax foo">
       <?php include 'navbar.php';?>


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
