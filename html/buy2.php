<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/static.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .carousel-control-prev {
        height: 200px;
        width: 50px;
        margin-top: 400px;
    }

    .carousel-control-next {
        height: 200px;
        width: 50px;
        margin-top: 400px;
    }

    .head {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 50px;
        margin: 100px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rebeccapurple;
    }

    .head:hover {
        color: red;
    }

    footer {
        margin-top: 100px;
    }

    .col {
        margin-top: 50px;

    }

    #gh {
        width: 700px
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Wedding dress</h4>
                        <p class="text-muted">A wedding dress or bridal gown is the dress worn by the bride during a
                            wedding ceremony. The color, style and ceremonial importance of the gown can depend on the
                            religion and culture of the wedding participants. In Western cultures, the wedding dress is
                            most commonly white, which fashion was made popular by Queen Victoria when she married in
                            1840. In eastern cultures, brides often choose red to symbolize auspiciousness.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Wedding Collection Sarees</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">BRAND</a></li>
                            <li><a href="#" class="text-white">PRICE</a></li>
                            <li><a href="#" class="text-white">COLOR</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="../picture/logo.jpg" class="ho" alt="this is the picture" height="100px" width="100px">
                    <h2 class="h">Ladies Tailors</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
   <!----------------------------------------------------------------------------------------------------------------->


   <div class="div">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 g-3">

                <div class="col">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <?php
                        include "./server.php";
                        $no = $_GET['no'];
                        $selectquery = "SELECT * FROM `ecomars` . `westurn` where no = $no";
                        $query = mysqli_query($con, $selectquery);
                   
                  
                     while($row = mysqli_fetch_array($query)){

                        $picture = $row['picture'];
                        $codeno = $row['codeno'];
                    ?>







                        <div class="col">
                            <div class="card h-100">
                                <img src="../picture/<?php echo $picture ; ?>" class="card-img-top" alt="...">
                                <div class="card-body">

                                </div>
                                <div class="card-footer">
                                    <h5>Price - &#8377; 400</h5>
                                    <h5>Code Number - <?php echo $codeno ?></h5>

                                </div>
                            </div>
                        </div>

                        <div class="col" id="gh">
                            <div class="card h-100 ">

                                <div class="card-body">
                                    <div class="card-header">
                                        <ul class="nav nav-pills card-header-pills">
                                            <li class="nav-item btn-warning text-Light">
                                                <a class="nav-link " href="#">Add Card</a>
                                            </li>
                                            <li class="nav-item btn-danger">
                                                <a class="nav-link " href="./case.php">Case On Delivery</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">weding Saree - Code number <?php echo $codeno?></h5>

                                        <?php
                     }
                     ?>

                                        <form class="card-text"  action="card.php" method="post" id="form">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Entered our Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        aria-describedby="emailHelp" value="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Entered our Address</label>
                                                    <input type="text" class="form-control" id="address" name="add"
                                                        aria-describedby="emailHelp" value="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" value="" required>
                                                    <div id="emailHelp" class="form-text">We'll never share your email
                                                        with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ph" class="form-label">Entered our Phone Number</label>
                                                    <input type="number" class="form-control" id="ph" name="ph"
                                                        aria-describedby="emailHelp"  value="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label">Amount</label>
                                                    <input type="number" class="form-control" id="amount" name="amount"
                                                        aria-describedby="emailHelp"  value="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="card" class="form-label">Entered Card Number</label>
                                                    <input type="number" class="form-control" id="card" name="card"
                                                        aria-describedby="emailHelp"  value="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date" class="form-label">Card Expire Date</label>
                                                    <input type="date" class="form-control" id="date" name="date"
                                                        aria-describedby="emailHelp"  value="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="holder" class="form-label">Card Holder Name</label>
                                                    <input type="text" class="form-control" id="holder" name="holder"
                                                        aria-describedby="emailHelp"  value="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">Card Type</label>
                                                    <select id="disabledSelect" name="typec" class="form-select"  value="" required>
                                                        <option>Visa</option>
                                                        <option>Rupay</option>
                                                        <option>Debite Card</option>
                                                        <option>Creadit Card</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"  value="" required>
                                                    <label class="form-check-label" for="exampleCheck1">Confirm
                                                        all</label>
                                                </div>
                                                <button type="submit" name="sub" class="btn btn-primary">Submit</button>
                                            </form>

                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>



























      <!----------------------------------------------------------------------------------------------------------------->

      <footer class="text-muted py-5 bg-dark">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!
            </p>
            <p class="mb-0">New to Bootstrap? <a href="./home.html">Visit the homepage</a> or read our <a
                    href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
            <li><a href="https://linkedin.com"  target="blanck" class="text-white">Follow on Linkdin</a></li>
                <li><a href="https://facebook.com"  target="blanck" class="text-white">Like on Facebook</a></li>
                <li><a href="https://gmail.com"  target="blanck" class="text-white">Email me</a></li>
                <li><a href="https://google.com"  target="blanck" class="text-white">Go to google</a></li>
            </ul>
        </div>
    </footer>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


</body>

</html>

<?php

error_reporting(0);
include "../server.php";


     $name = $_POST['name'];
     $add = $_POST['add'];
     $email = $_POST['email'];
     $ph = $_POST['ph'];
     $amount = $_POST['amount'];
     $card = $_POST['card'];
     $date = $_POST['date'];
     $holder = $_POST['holder'];
     $typec = $_POST['typec'];
    

 
if (empty($name)) {
    $name_error = "Pleace entered name properly";
}
if (empty($add)) {
    $add_error = "Pleace entered add properly";
}
if (empty($ph)) {
    $ph_error = "Pleace entered ph properly";
}
if (empty($amount)) {
    $amount_error = "Pleace entered amount properly";
}
if (empty($card)) {
    $card_error = "Pleace entered card properly";
}
if (empty($date)) {
    $date_error = "Pleace entered date properly";
}
if (empty($holder)) {
    $holder_error = "Pleace entered holder properly";
}
if (empty($typec)) {
    $typec_error = "Pleace entered typec properly";
}




?>