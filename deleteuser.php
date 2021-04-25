<?php

   $id= $_GET['id'];

   $conn=mysqli_connect("remotemysql.com","mxGxQeDMmY","29L092KTIJ","mxGxQeDMmY");

   $sql="DELETE FROM `user` WHERE user_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: user.php");
   }else{
         echo "Not deleted";
   }

?>
