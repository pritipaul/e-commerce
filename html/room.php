<?php
    
    include "./server.php";

    $name = $_POST['name'];
    $room = $_POST['text'];

    $sql = "INSERT INTO `ecomars`.`chat45` (`name`, `para`) VALUES ('$name','$room')";
    mysqli_query($con,$sql);
 mysqli_close($con);
?>