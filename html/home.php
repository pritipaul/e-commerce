<?php
   
include "./server.php";
if (isset($_POST['submit'])) {

 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $email = $_POST['email'];

 $sql = "INSERT INTO `ecomars`.`signin` (`name`,`username`, `password`, `email`) VALUES ('$name','$username', '$password', '$email')";


 if ($con->query($sql) == true) {?>
<div class="alert alert-danger" role="alert">
    <?php echo "Username and Password Are Successfully Registered";?>
</div>
<?php
   }

else{?>
<div class="alert alert-danger" role="alert">
    <?php echo "Username and Password Are alredy exist";?>
</div>
<?php
}
$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ladies tailors</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <style>
    #chat img {
        display: block;
        position: sticky;
        position: -webkit-sticky;
        top: 100px;
    }

    .modal-body {

        height: 400px;
    }

    .chat {
        width: 800px;
    }

    .letf p {
        border: 2px solid rgb(46, 32, 32);
    }

    .right {}

    .sign {
        display: flex;
        flex-direction: column;

    }

    button {
        width: 100px;
        display: block;
        margin: auto;
    }

    .btf {
        width: 400px;
        display: block;
        margin: auto;
        height: 50px;
        border-radius: 50px;
        background-color: rgb(165, 137, 194);
        margin: 10px;
    }

    .btf2 {
        width: 400px;
        display: block;
        margin: auto;
        height: 50px;
        border-radius: 50px;
        background-color: aqua;
        margin: 10px;
    }
    </style>
</head>

<body>
    <nav>
        <heading id="heading">
            <img src="../picture/logo.jpg" class="ho" alt="this is the picture" height="100px" width="100px">
            <h2 class="h">Ladies Tailors</h2>
            <div id="all">
                <div id="home" class="dress">
                    <ul>
                        <li><a href=""> Home</a></li>
                        <li><a href="./about.html">About Us</a></li>
                        <li><a href="../html/contact.html">Contact Us</a></li>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Sign in
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST"
                                            class="sign">
                                            Name: <input type="text" name="name" placeholder="Entered your Name">
                                            Username: <input type="text" class="name" name="username"
                                                placeholder="Username" value="" required>
                                            Password: <input type="password" class="name" name="password"
                                                placeholder="Password" value="" required>
                                            Email-id: <input type="email" class="name" name="email"
                                                placeholder="Email-id" value="" required>
                                            <br>
                                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                            <br>
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cencle</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="search" id="search" name="search" placeholder="Search here             &#x1F50D;">
                        <h3>Search</h3>
                    </ul>
                </div>
                <div id="about" class="dress">
                    <ul>
                        <li><a href="./wetturn.php"> Western</a></li>
                        <li><a href="./top.php">Top</a></li>
                        <li><a href="../html/saree.php">Saree</a></li>
                        <li><a href="">Kids</a></li>
                        <li><a href="./weding.php">Wedding Collection</a></li>
                    </ul>
                </div>
            </div>
        </heading>
        <!------------------------------------------------------------------------------------------------------------------->

        <div id="boot" class="strap ">
            <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner margin-o">
                    <div class="carousel-item active " data-bs-interval="10000">
                        <img src="../picture/walpaper.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Ladies Tailors</h1>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="../picture/walpaper2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Ladies Tailors</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../picture/walpaper3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Ladies Tailors</h1>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </nav>
    <br>
    <section>

        <!-- Button trigger modal -->
    <?php 
      if (isset($_GET['sign']) && $_GET['sign'] = true ) {?>  
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Chat Box
        </button>
    <?php 
      }  
       ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h4>Chat With Ladies Tailers</h4>
                        <a href="./name.html?id=<?php echo $email ;  ?>"><button class="btf">
                                <?php echo $email ;  ?>
                            </button></a>
                        <div class="modal-body">
                           By continuing as a guest, you agree to Facebook's Terms, Data Policy and Cookies Policy.
                        </div>

                    </div>
                </div>
            </div>




    </section>
    <br>



    <section>
        <h1 class="cata">OUR BRAND</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card card-dark card-hover">
                    <img src="../picture/brand.jpg" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2 class="card-title">ZARA</h2>
                        <p class="card-text">Zara SA, stylized as ZARA, is a Spanish apparel retailer based in Arteixo
                            in Galicia,
                            Spain. The company specializes in fast fashion, and products include clothing, accessories,
                            shoes,
                            swimwear, beauty, and perfumes. It is the largest company in the Inditex group, the world's
                            largest
                            apparel retailer. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../picture/brand1.jpg" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2 class="card-title">FABINDIA</h2>
                        <p class="card-text">Fabindia is an Indian chain store retailing garments, furnishings, fabrics
                            and ethnic
                            products handmade by craftspeople across rural India.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../picture/brand2.png" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2 class="card-title">LEVI'S</h2>
                        <p class="card-text">Levi Strauss & Co. is an American clothing company known worldwide for its
                            Levi's brand
                            of denim jeans. It was founded in May 1853 when German immigrant Levi Strauss moved from
                            Buttenheim,
                            Bavaria, to San Francisco, California to open a west coast branch of his brothers' New York
                            dry goods
                            business.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../picture/brand3.jpeg" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2 class="card-title">AURELIA</h2>
                        <p class="card-text">Aurelia is a genus of scyphozoan jellyfish, commonly called moon jellies.
                            There are at
                            least 13 species in the genus Aurelia including many that are still not formally
                            described.[1][2] It has
                            been suggested that Aurelia is the best-studied group of gelatinous zooplankton.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../picture/brand4.webp" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2 class="card-title">W for WOMEN'S</h2>
                        <p class="card-text">W journey started in 2001-2002 from its first store in Lajpat Nagar. In the
                            Year 2006
                            Wishful was launched especially for occasion wears. In 2011, W was among the first brands to
                            have their
                            own 24*7 fashion destination e-commerce portal.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../picture/brand5.png" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2 class="card-title">ALLEN SOLLY</h2>
                        <p class="card-text">Allen Solly was founded in 1744 by William Hollin and Co Ltd. The brand was
                            bought in
                            the 90's by a company called Madura Garments. ... Aditya Birla Group acquired Allen Solly in
                            2001. Allen
                            Solly accomplished a proximate fashionable position in a highly competitive readymade market
                            within a
                            short span of time.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
            
    <h1 class="cata">Our Categories</h1>
            <div class="card-group">
                <div class="card">
                    <img src="../picture/grown0.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 ><a href="./wetturn.php" class="card-title">Party Dress</a></h5>

                    </div>
                </div>
                <div class="card">
                    <img src="../picture/dress3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="./wetturn.php">Party Dress</a></h5>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img src="../picture/dress23.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="./top.php">Top</a></h5>
                        </div>
                        <img src="../picture/eis12.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="../picture/west25.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="./wetturn.php">Kurti</a></h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="./saree.php"> Saree</a></h5>
                        </div>
                        <img src="../picture/shree3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="../picture/baby.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5><a herf="" class="card-title">Grown for baby</a></h5>
                        </div>
                        <img src="../picture/baby1.png" class="card-img-top" alt="...">
                    </div>
                </div>

    </section>



    <br>
    <section>
        <h1 class="cata">CURRENT OFFERS</h1>
        <div class="off">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../picture/offer.jpg" class="d-block w-100" alt="..." height="700px">
                    </div>
                    <div class="carousel-item">
                        <img src="../picture/offer2.jpg" class="d-block w-100" alt="..." height="700px">
                    </div>
                    <div class="carousel-item">
                        <img src="../picture/offer1.jpg" class="d-block w-100" alt="..." height="700px">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------------------------------------->

    <footer class="text-muted py-5 bg-dark">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
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




</body>

</html>