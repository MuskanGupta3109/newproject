<?php

require_once "./apis/classes/news.php";
$news = new News();
?>
<header class="header--section header--style-6">
    <!-- <div class="header--topbar">
                <div class="container">
                    <div class="float--left float--xs-none text-xs-center">
                        <ul class="header--topbar-info nav">
                            <li><i class="fa fm fa-map-marker"></i>New York</li>
                            <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>
                            <li><i class="fa fm fa-calendar"></i>Today (Sunday 19 April 2017)</li>
                        </ul>
                    </div>
                    <div class="float--right float--xs-none text-xs-center">
                        <ul class="header--topbar-action nav">
                            <li><a href="login.html"><i class="fa fm fa-user-o"></i>Login/Register</a></li>
                        </ul>
                        <ul class="header--topbar-lang nav">
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="fa fm fa-language"></i>English<i class="fa flm fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
    <div class="header--mainbar">
        <div class="container-fluid">
            <div class="header--logo float--left float--sm-none text-sm-center border-none">
                <h1 class="h1"> <a href="home-1.html" class="btn-link"> <img src="img/logo3.jpeg" alt="USNews Logo" style="width:15%;border:0px;"> <span class="hidden">USNews Logo</span> </a> </h1>
            </div>
            <div class="header--ad float--right float--sm-none hidden-xs"> <a href="#"> <img src="img/ads-img/ad-728x90-01.jpg" alt="Advertisement"> </a> </div>
        </div>
    </div>
    <div class="header--navbar navbar" data-trigger="sticky">
        <div class="container-fluid">

            <div class="header--navbar-inner bg--color-2 clearfix">
                <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> </div>
                <div id="headerNav" class="navbar-collapse collapse float--left">

                    <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                        <?php
                        $resulti = $news->getAllcategory();
                        if ($resulti == false)
                            echo "<tr>No queries found</tr>";
                        else {
                            $rowi = mysqli_fetch_assoc($resulti);
                        }

                        ?>
                        <li> <a href="newsbycategory.php?category_id=<?= $rowi['category_id'] ?>"><?= $rowi['cat_name'] ?></a>

                        </li>
                        <?php

                        while ($rowi = mysqli_fetch_assoc($resulti)) {
                        ?>
                            <li> <a href="newsbycategory.php?category_id=<?= $rowi['category_id'] ?>"><?= $rowi['cat_name'] ?></a>

                            </li>
                        <?php } ?>

                        <!-- <li><a href="national.html">State</a></li>
                                <li><a href="sports.php">Sports</a></li>
                                <li><a href="entertainment.php">Entertainment</a></li>
                                <li><a href="lifestyle.html">Politics</a></li>
                                <li><a href="technology.html">Education</a></li>
                                <li> <a href="travel.html" class="dropdown-toggle"
                                        >Food</a>
                                  
                                </li>
                                <li><a href="sports.html">Auto</a></li>
                                <li class="dropdown megamenu"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Astrology</a>
                                   
                                </li>
                                <li class="dropdown megamenu"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Weather</a>
                                   
                                </li>
                                <li class="dropdown megamenu"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Trading</a>
                                   
                                </li> -->
                        <!-- <li class="dropdown megamenu"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Agriculture</a>
                                   
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tech/Gadgets
                                </a>
                                 
                                </li> -->
                    </ul>
                </div>


                <form action="#" class="header--search-form float--right" data-form="validate"> <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required> <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="news--ticker">
            <div class="container-fluid">
                <?php
                $resulti = $news->getrecenttitle();
                if ($resulti == false)
                    echo "<tr>No queries found</tr>";
                else {
                    $rowi = mysqli_fetch_assoc($resulti);
                }

                ?>
                <div class="title ">
                    <h2>News Updates</h2>
                </div>
                <div class="news-updates--list" data-marquee="true">
                    <ul class="nav">
                        <?php

                        while ($rowi = mysqli_fetch_assoc($resulti)) {
                        ?>
                            <li>

                                <h3 class="h3"><a href="#"><?= $rowi['title'] ?></a></h3>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>


        </div>
</header>