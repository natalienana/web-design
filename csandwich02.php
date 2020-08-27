<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products Details | Sugarpulp Bakery</title>
        <link rel="stylesheet" href="web.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppons:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
        <div class="container">

            <div class="navbar">
                <div class="logo">
                    <a href="main.php"><img src="pic/weblogo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="main.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
                <img src="Pic/weblogo.png" width="30px" height="30px">
                <img src="Pic/Sandwich/Ham/HSandwich01.jpg" class="menu-icon" onclick="menutoggle()">
            </div>
            
        </div>

        <!--Productdetails-->
        <div class="small-container product-detail">
            <div class="row">
                <div class="col-2">
                    <img src="Pic/Cookies/Sandwich/CSandwich02.jpg" width="100%" id="ProductImg">
                </div>
                <div class="col-2">
                    <p>Category : Cookies</p>
                    <h1>Choco Chips Cream Cookie</h1>
                    <h4>RM5.00 / Box</h4>
                    <input type="number" value="1">
                    <a href="" class="btn">Add to cart</a>
                    <h3>Products Details<i class="fa fa-indent"></i></h3>
                    <br>
                    <p>1 Box = 5 Cookies</p>
                </div>
            </div>
        </div>

        <!--title-->

        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <a href="product.php" class="btn"><p>View More</p></a>
            </div>
        </div>

        <!----related product----->
        <div class="small-container">
            
            <div class="row">
                <div class="col-4">
                    <a href="csandwich01.php"><img src="Pic/Cookies/Sandwich/CSandwich01.jpg"></a>
                    <h4>Mint Cream Cookie Sandwich</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>RM5.00 / Box</p>
                </div>
                <div class="col-4">
                    <a href="csandwich03.php"><img src="Pic/Cookies/Sandwich/CSandwich03.jpg"></a>
                    <h4>Vanila Choco Ice-Cream Cookie</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>RM7.00 / Box</p>
                </div>
                <div class="col-4">
                    <a href="scake01.php"><img src="Pic/Cakes/Small Cakes/Scake01.jpg"></a>
                    <h4>Rev Velvet Mini Cake</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>RM6.00</p>
                </div>
            </div>
            
        </div>

        <!---footer-->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
                        <div class="app-logo">
                            <img src="Pic/weblogo.png">
                            <img src="Pic/weblogo.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="Pic/weblogo.png">
                        <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        
                        <ul>
                            <li>Coupons</li>
                            <li>Blog</li>
                            <li>Return Policy</li>
                            <li>Jon Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2020 - Sugarpulp</p>
            </div>
        </div>
        
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle()
            {
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
    </body>
</html>
