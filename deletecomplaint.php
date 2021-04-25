<?php

   $id= $_GET['id'];

   $conn=mysqli_connect("remotemysql.com","oLK33sA5lz","pVYs7yUo1W","oLK33sA5lz");

   $sql="DELETE FROM `comments` WHERE comment_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: viewcomplaints.php");
   }else{
         echo "Not deleted";
   }

?>
