


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>contact</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

  </head>
  <body >

    <style>

    .parallax {
        /* The image used */
        background-image: url("contact.jpg");
        height: 100%;
        width: 100%;

        /* Set a specific height */
        min-height: 600px;
        min-width: 600px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;


        }



        .navbar-fixed-top.scrolled {
           background-color: #ffffff;;
          transition: background-color 200ms linear;
        }

    </style>
    <body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">



    <div class="parallax foo">
       <?php include 'navbar.php';?>

        <div class="hero-text" style="font-size:40px; text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
          <h3 class = "w3-text-white">HelpDesk</h3>
          <p class ="w3-text-white">For More Information, Contact us:</p>
          <p>barkay sanoussi sanoussi </p>
          <p>zhejiang normal university</p>
          <p>china jinhua</p>
          <p>Tel: 13282890959</p>


          </div>
    </div>



    <footer style="background-color: #2f2f2f;
      color: #fff; padding-top: 70px;
      padding-bottom: 70px;" class="container-fluid text-center">
            <p>All rights </p>
    </footer>






  </body>
</html>
