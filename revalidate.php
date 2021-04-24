
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <link rel="stylesheet" href="style.css">
      <br>
<body>
  <style>

  .parallax {
      /* The image used */
      background-image: url("revalidate.jpg");
      height: 100%;
      width: 100%;

      /* Set a specific height */
      min-height: 600px;
      min-width: 600px;

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



  <div class="parallax foo">
     <?php include 'navbar.php';?>

      <div class="hero-text" style="font-size:40px; text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: black;">
        <h1 class="w3-text-teal">Revalidating Information</h1>

        <form class="w3-container" action="outputrevalidate.php" method = "post">
      <p>
        <label class="w3-label w3-text-grey"><b>Driver's license number</b></label>
        <input class="w3-input w3-border w3-light-grey" name="search" type="text" required></p>
      <p>
        <button class="w3-btn w3-blue-grey">Re-validate</button></p>
        </form>



        </div>
  </div>



  <footer style="background-color: #2f2f2f;
    color: #fff; padding-top: 70px;
    padding-bottom: 70px;" class="container-fluid text-center">
          <p>All rights </p>
  </footer>










</body>
</html>
