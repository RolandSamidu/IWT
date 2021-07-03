<?php
    session_start();
    $db_name = "warrior zone";
    $connection = mysqli_connect("localhost","root","",$db_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="index.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="index.php"</script>';
                }
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="src/style/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3fe177132c.js" crossorigin="anonymous"></script>
    <script src="Shop.js"></script>
    <style>
        .colmn-4{
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table,th,tr{
              text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-center">
            <!-- nav header -->
            <div class="nav-header">
                <img src="images/logo.png" class="logo" alt="logo" />
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- links -->
            <ul class="links">
                <li>
                    <a href="index.php">home</a>
                </li>
                <li>
                    <a href="about.php">about</a>
                </li>
                <li>
                    <a href="service.php">services</a>
                </li>
                <li>
                    <a href="contactus.php">contact</a>
                </li>
                <li>
                    <a href="courses.php">courses</a>
                </li>
                <li>
                    <a href="shop.php">shop</a>
                </li>
            </ul>
            <!-- social media -->
            <ul class="social-icons">
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Section -->
<div class="fpart">
    <div class="row">
        <div class="colmn-2">
            <h1>SHOPPING NOW....</h1><br>
            <P>You can get anything you want here. 
            Customers who work with us for a long time will get special discount.</P>
        </div>
        <div class="colmn-2">
            <img src="images/logo51.jpg">
        </div>
    </div>
</div>

<!--------- featured categories --------->

<div class="catlog">
    <div class="small-container">
        <div class="row">
            <div class="colmn-3">
                <img src="images/card7.jpg">
            </div>
            <div class="colmn-3">
                <img src="images/menu.jpg">
            </div>
            <div class="colmn-3">
                <img src="images/card9.jpg">
            </div>
        </div>
    </div>
</div>

<!--------- featured products --------->

<div class="small-container">
    <h2 class="hd2">products</h2>
    <?php
        $query = "select * from product order by id asc";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
    ?>
    <div class="row">
        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
            <div class="colmn-4">
                <img src="<?php echo $row["image"];?>" width="200px" height="200px" class="img-responsive">
                <h5 class="text-info"><?php echo $row["description"];?></h5>
                <h5 class="text-danger"><?php echo $row["price"];?></h5>
                <input type="text" name="quantity" class="form-control" value="1">
                <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
            </div>
        </form>
    </div>
    <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr>
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="index.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right"><?php echo number_format($total,2);?></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
</div>
<!-------- offer -------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="colmn-2">
                <p>Exclusively Available on Warrior Zone</p>
                <h1>Muscle Pump 5lbs</h1>
                <small>Muscle pump is a wonderful product for strength, 
                energy and stamina required during the strenuous workouts. 
                Amino acids and proteins in the product....</small>
                <p>25% discount with price<br>Rs.6,600.00</p>
            </div>
            <div class="colmn-2">
                <img src="images/Product.jpg" class="offer-img">
            </div>
        </div>
    </div>
</div>

<!-- Section end -->

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
            Fitness is defined as the quality or state of being fit and healthy.The modern definition of fitness describes either a person or machine's ability to perform 
            a specific function or a holistic definition of human adaptability to cope with various situations. 
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
