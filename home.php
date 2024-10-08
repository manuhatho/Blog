<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>

    <?php 

        session_start();
        if(!isset($_SESSION['id_user'])) {
            header("Location: index.php");
            exit();

        }
        $username = $_SESSION['username'];
        ?>

<body>

    <header>
        <div class="content">
            <div class="logo">
                <img src="./logo.png" alt="">
            </div>

            <nav>
                <ul class="nav">
                    <li id="list1">
                        <a id="home" href="home.php">
                            <img src="hom.png" alt="">
                        </a>
                    </li>
                    <ul class="openList">
                        <li id="list2"><a href="categories.html">on the blog </a>
                            <i class="fa-solid fa-angle-down"></i>
                        </li>
                        <div class="submenu">
                            <ul class="submenu1">
                                <li>
                                    <a href="#">growing</a>
                                    <!-- <i class="fa-solid fa-angle-right"></i> -->
                                </li>
                                <!-- <ul class="submenu1-1">
                                    <li><a href="">Fragility</a></li>
                                    <li><a href="">Curiosity</a></li>
                                    <li><a href="">Audacity</a></li>
                                    <li><a href="">Glory</a></li>
                                </ul> -->
                            </ul>
                            <ul class="submenu1">
                                <li id="sideHustle">
                                    <a href="#">Celebrating</a>
                                    <!-- <i class="fa-solid fa-angle-right"></i> -->

                                </li>
                                <!-- <ul style="text-align: center;" class="submenu1-2">
                                    <li><a href="">Producing</a></li>
                                    <li><a href="">Rejoicing</a></li>
                                    <li><a href="">Enjoying</a></li>
                                    <li><a href="">Mirroring</a></li>
                                </ul> -->
                            </ul>
                            <ul class="submenu1">
                                <li id="sideHustle">
                                    <a href="#">Fertilizing</a>
                                    <!-- <i class="fa-solid fa-angle-right"></i> -->

                                </li>
                                <!-- <ul style="text-align: center;" class="submenu1-2">
                                    <li><a href="">Loving</a></li>
                                    <li><a href="">Protecting</a></li>
                                    <li><a href="">Forgiving</a></li>
                                    <li><a href="">Dying</a></li>
                                </ul> -->
                            </ul>
                            <ul class="submenu1">
                                <li id="sideHustle">
                                    <a href="#">Finding inspiration</a>
                                    <!-- <i class="fa-solid fa-angle-right"></i> -->

                                </li>
                            </ul>

                        </div>

                    </ul>

                  
                    <li id="list3"><a href="">about me</a></li>
                    <li id="list4"><a href="">contact</a></li>

                </ul>


            </nav>
            <div class="option">

                <div class="login">
                    <form action="logout.php">
                   <button type="submit"> 
                    <img id="user" src="utilisateur.png" alt="">
                    <?php echo $username; ?>
                    <img id="setting" src="parametres.png" alt="">
                   </button>
                   </form>
                </div>


                <div class="menu">
                    <div class="bar"></div>
                </div>
            </div>

        </div>

    </header>

    <div class="blend"></div>
    <div class="nav2">
        <div class="nav2Content">
            <div class="menu2">
                <div class="bar"></div>
            </div>
            <div class="searchBar2">
                <input type="search" placeholder="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <li id="list1"><a href="index.html">home</a></li>
            <ul class="Nav2openList">
                <li id="list2"><a href="categories.html">on the blog </a>
                    <i id="angleDown1" class="fa-solid fa-angle-down"></i>
                </li>
                <div class="Nav2submenu">
                    <ul class="Nav2submenu1">
                        <li id="listSub1">
                            <a href="#">growing</a>
                            <!-- <i id="angleDown2" class="fa-solid fa-angle-down"></i> -->
                        </li>
                    </ul>

                    <!-- <ul class="Nav2submenu1-1">
                        <li><a href="">Fragility</a></li>
                        <li><a href="">Curiosity</a></li>
                        <li><a href="">Audacity</a></li>
                        <li><a href="">Glory</a></li>
                    </ul> -->
                    <ul class="Nav2submenu1">
                        <li id="sideHustle">
                            <a href="#">Celebrating</a>
                            <!-- <i id="angleDown3" class="fa-solid fa-angle-down"></i> -->
                        </li>
                    </ul>
                    <!-- <ul class="Nav2submenu1-2">
                        <li><a href="">Producing</a></li>
                        <li><a href="">Rejoicing</a></li>
                        <li><a href="">Enjoying</a></li>
                        <li><a href="">Mirroring</a></li>
                    </ul> -->
                    <ul class="Nav2submenu1">
                        <li id="sideHustle">
                            <a href="#">Fertilizing</a>
                            <!-- <i id="angleDown4" class="fa-solid fa-angle-down"></i> -->
                        </li>
                    </ul>
                  
                    <!-- <ul class="Nav2submenu1-3">
                        <li><a href="">Loving</a></li>
                        <li><a href="">Protecting</a></li>
                        <li><a href="">Forgiving</a></li>
                        <li><a href="">Dying</a></li>
                    </ul> -->
                    <ul class="Nav2submenu4">
                        <li id="sideHustle">
                            <a href="#">Finding inspiration</a>
                            <!-- <i id="angleDown4" class="fa-solid fa-angle-down"></i> -->
                        </li>
                    </ul>
                </div>
            
    
            </ul>

            <li id="list3"><a href="">about me</a></li>
            <li id="list4"><a href="">contact</a></li>

            <div class="logo2">
                <img src="./logo.png" alt="">
            </div>

        </div>
    </div>

    <div class="hero">
        <div class="blendB"></div>
        <div class="hero-section">
            <div class="content">
                <div class="left">
                    <div class="blendL"></div>
                    <img src="hero.jpg" alt="">
                </div>
                <div class="right">
                    <div class="text">
                        <h1>Down to earth <font class="font-1">with</font> the Rythm of Life ,</h1>
                        <p>Enriching the Soil of <font class="font-2">Our</font> Heart</p>
                    </div>
                </div>
            </div>

            <div class="scrolL-down">
                <i class="fa-solid fa-angles-down flotter-animation"></i>
            </div>
        </div>


    </div>

    <main>
        <div class="brush-1">
            <img src="brush.png" alt="">
        </div>
        <!-- <div class="brush-2">
                <img src="brush.png" alt=""> -->
        </div>
        <div class="brush-3">
            <img src="brush.png" alt="">
        </div>
        <div class="section-1">
            <div class="box">
                <div class="shadow"></div>
                <img src="1-1.jpg" alt="">
                <a href="">
                    <button class="btn">Growing</button>
                </a>
            </div>
            <div class="box">
                <div class="shadow"></div>
                <img src="1-2.jpg" alt="">
                <a href="">
                    <button class="btn">Celebrating</button>
                </a>
            </div>
            <div class="box">
                <div class="shadow"></div>
                <img src="1-3.jpg" alt="">
                <a href="">
                    <button class="btn">Fertilizing</button>
                </a>
            </div>
            <div class="box">
                <div class="shadow"></div>
                <img src="1-4.jpg" alt="">
                <a href="">
                    <button class="btn">Finding Inspiration</button>
                </a>
            </div>

        </div>

        <div class="section-2">
            <div class="title">
                <h3>LATEST <font>Post</font>
                </h3>
                <div class="bar"></div>
            </div>
            <div class="content">

                <div class="box">
                    <a href="">
                    <div class="shadow"></div>
                        <img src="2-1.jpg" alt="">
                    </a>
                    <div class="text">
                       <a href="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                       </a> 
                       
                    </div>
                </div>
                <div class="box">
                    <a href="">
                    <div class="shadow"></div>
                        <img src="2-2.jpg" alt="">
                    </a>
                    <div class="text">
                       <a href="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>   
                       </a> 
                    </div>
                </div>
                <div class="box">
                    <a href="">
                    <div class="shadow"></div>
                        <img src="2-3.jpg" alt="">
                    </a>
                    <div class="text">
                       <a href="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                       </a>
                    </div>
                </div>
                <div class="box">
                    <a href="">
                    <div class="shadow"></div>
                        <img src="2-4.jpg" alt="">
                    </a>
                    <div class="text">
                       <a href="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                       </a> 
                    </div>
                </div>

            </div>
        </div>


    </main>

    <footer>
        <div class="blendF"></div>
        <div class="brush-3">
            <img src="brush.png" alt="">
        </div>
        <div class="footerContent">
            <div class="topLogo">
                <img src="logo.png" alt="">
            </div>
            <div class="middle">
                <div class="box1">
                    <h3>quick links</h3>
                    <li><a href="">about me</a></li>
                    <li><a href="">contact me</a></li>
                    <li><a href="">home</a></li>
                </div>
                <div class="box2">
                    <h3>news letter</h3>
                    <input type="text" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </div>
                <div class="box3">
                    <h3>follow me</h3>
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
                <div class="box4">
                    <h3>contact info</h3>
                    <i class="fa-solid fa-envelope"></i>
                    <p>domi_rule@gmail.com</p>
                </div>
            </div>
            <div class="bottom">
                <fieldset>
                    <div class="copyright">
                        <p> © 2024 Crossing Rivers Blog - All right reserved</p>
                    </div>
                </fieldset>
            </div>


        </div>
    </footer>







    <script src="https://kit.fontawesome.com/ca9a6c5a17.js" crossorigin="anonymous"></script>
    <script src="header.js"></script>
    <script src="footer.js"></script>
    <script src="home.js"></script>


</body>

</html>