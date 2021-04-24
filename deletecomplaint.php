<?php

   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle management');

   $sql="DELETE FROM `comments` WHERE comment_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: viewcomplaints.php");
   }else{
         echo "Not deleted";
   }

?>
