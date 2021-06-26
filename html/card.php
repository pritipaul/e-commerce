<?php

include "./server.php";
if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $add = $_POST['add'];
        $email = $_POST['email'];
        $ph = $_POST['ph'];
        $amount = $_POST['amount'];
        $card = $_POST['card'];
        $date = $_POST['date'];
        $holder = $_POST['holder'];
        $typec = $_POST['typec'];

        $sql = "INSERT INTO `ecomars`.`card`(`name`, `add`, `email`, `ph`, `amount`, `card`, `date`, `holder`, `typec`) VALUES ('$name','$add','$email','$ph','$amount','$card','$date','$holder','$typec')";

        if ($con->query($sql) == true) {
            // echo "Succesessfully complite";
            include "./new.php";
        }
        
        else{
            echo "error:$sql<br>$con->error";
        }
        $con->close();
    }
        ?>









