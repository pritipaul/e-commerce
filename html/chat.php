<?php

include "server.php";

if (isset($_POST['btn'])) {
$name = $_POST['name'];

$sql = "INSERT INTO `ecomars`.`chat candited` (`name`) VALUES ('$name')";


if ($con->query($sql) == true) {
    echo "Succesessfully complite";
    include "chatbox.php";
}
else{
    echo "error:$sql<br>$con->error";
}
$con->close();

}












?>