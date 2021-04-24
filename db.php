
<?php
$conn=mysqli_connect("localhost","root","","vehicle management");
if (!$conn) {
  die("connection failed:".mysqli_connect_error());
}
