<!-- ******************
IT20615970
Gunapala K. M. H. M. M 
Group MLB_01.02.04
****************** -->

<?php
session_start();
include("dbconnection.php");
$sql = "select * From services";
$servicesdata = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
</head>

<body>
    <nav>
        <div class="nav-center">
            <!-- nav header -->
            <div class="nav-header">
                <img src="https://i.postimg.cc/76jNr6VY/1982637.jpg" class="logo" alt="logo" />
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- links -->
            <ul class="links">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    <a href="projects.html">projects</a>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul>
            <!-- social media -->
            <ul class="social-icons">
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="banner">
        <div class="row">
            <div class="col-1 ">
            </div>
            <div class="col-6">
                <h1>Services</h1>
            </div>
            <div class="col-1 "> </div>
        </div>
    </section>

    <section id="banner" style="background-color: rgb(243, 232, 219);">
        <div class="row">
            <div class="col-1 ">
            </div>

            <div class="col-10">
                <div class="row">

                    <?php
                    foreach ($servicesdata as $key => $value) {
                        # code...

                    ?>
                        <div class="col-3">
                            <div class=" bg-card">
                                <h3>  <?php echo $value['title'];  ?></h3>
                                <img src="  <?php echo $value['image'];  ?>" alt="Trulli" width="100%">
                                <p class="category-text">Fineness</p>
                                <h3>LKR.   <?php echo $value['price'];  ?></h3>
                                <p>  <?php echo $value['intro'];  ?></p>
                                <a  href="serviceview.php?idvalue=<?php echo  $value['id'] ?>"  class="button button1">View</a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-1 "> </div>
        </div>
    </section>
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>warrior<span>Zone</span></h3>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>

                <a href="#">Blog</a>

                <a href="#">Pricing</a>

                <a href="#">About</a>

                <a href="#">Faq</a>

                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Company Name © 2015</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1.555.555.5555</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
                vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>

</body>

</html>