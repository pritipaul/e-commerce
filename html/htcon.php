<?php

$name = $_POST['name'];

include "./server.php";
$sql = "SELECT *  FROM  `ecomars`.`chat45`";

$res = "";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $res = $res . '<div class= "container2">'; 
        $res = $res . " <p>" . $row['name'];
        $res = $res . " <p>" . $row['para'];
        $res = $res . " <p>" . $row['date and time'];
        $res = $res . '</p> <span class = "time-right"' . $row["date and time"] . '</span></div>';
     }
  }
  echo $res; 












?>