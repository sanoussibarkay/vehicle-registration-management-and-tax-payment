
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vehicle management system</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">



</head>
<style>

.parallax {
    /* The image used */
    background-image: url("penalties-j-david-tax-law.jpg");
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

        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 60%;left: 50%;transform: translate(-50%, -50%);color: black;">


            <p style="font-size:20px">A tax is a mandatory fee or financial charge levied by any
              government on an individual or an organization to
               collect revenue for public works providing
                the best facilities and infrastructure.
              every vehicle desiring to ply inside Abdou Moumouni university should pay the relevant tax
            according to the regulation.the taxes are either paid from the university entrance or directly deposited to the university  bank account. once the tax is paid the concerned driver should bring the receipt  </p>

<button type="button" name="button"> <a href="php_stripe_paypage-master/index.php"> Click to pay</a></button>

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
