<?php
    $connection= mysqli_connect('localhost','root','','vehicle management');
    session_start();

    $msg="";

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $licenseplates=$_POST['licenseplates'];
        $type=$_POST['type'];
        $enginenumber=$_POST['enginenumber'];
        $vehiclechassis=$_POST['vehiclechassis'];
        $regnumber=$_POST['regnumber'];
        $licensevalidity =$_POST['licensevalidity'];
        $driverid =$_POST['driverid'];
        $reason=$_POST['reasons'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $username= $_POST['username'];

        $insert_query="INSERT INTO `booking`(`booking_id`, `name`,`username` , `licenseplates`, `type`, `enginenumber`, `vehiclechassis`,`reasons`,`regnumber`,`licensevalidity` , `driverid` ,`email`, `mobile`) VALUES ('','$name','$username','$licenseplates','$type','$enginenumber','$vehiclechassis','$reason','$regnumber','$licensevalidity', '$driverid', '$email','$mobile')";
        echo $name;




        $res= mysqli_query($connection,$insert_query);

         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";

        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>





     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    <?php echo $msg;
    ?>



</body>
</html>
