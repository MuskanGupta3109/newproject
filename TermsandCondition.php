<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from themelooks.us/demo/PUBLICNEWS/html/news-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:32:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo3.jpeg"/>
    <title>PublicNEWS - Multipurpose News, Magazine and Blog HTML5 Template</title>
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="PUBLICNEWS - Multipurpose News and Magazine Template">
    <meta name="keywords"
        content="news, newspaper, magazine, blog, post, article, editorial, publishing, modern, responsive, html5, template">
        <?php require_once './_partials/_styles.php'  ?>
        <?php

    require_once "./apis/classes/news.php";
    $news = new News();
    ?>
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <div class="wrapper">
    <?php  require_once './_partials/_nav.php' ?>
        <div class="posts--filter-bar style--1 hidden-xs">
            <!-- <div class="container">
                <ul class="nav">
                    <li> <a href="#"> <i class="fa fa-star-o"></i> <span>Featured News</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-heart-o"></i> <span>Most Popular</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-fire"></i> <span>Hot News</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-flash"></i> <span>Trending News</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-eye"></i> <span>Most Watched</span> </a> </li>
                </ul>
            </div> -->
        </div>
     
       
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <div class="main--content col-md-8" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="post--item post--single post--title-largest pd--30-0">
                                <div class="post--img"> <a href="#" class="thumb">
                             
                                    
                                <?php
                                        $resultt = $news->getrecentnews();
                                        if ($resultt == false)
                                            echo "<tr>No queries found</tr>";
                                        else {
                                            $roww = mysqli_fetch_assoc($resultt);
                                        }

                                        ?>
                                        <img src="./assets/img/<?= $roww['image'] ?>" alt="" style="height:300px;"></a>

                                  
                                </div>
                              
                                <div class="post--map">
                                <div class="map--wrapper">
                                            <p><?= $roww['createdat'] ?></p>
                                        </div>
                                   
                                </div>
                                <div class="post--content">
                                    <p><?= $roww['description'] ?>
                                    </p>




                                </div>
                               
                            </div>
                            <div class="ad--space pd--20-0-40"> <a href="#"> <img src="img/ads-img/ad-728x90-02.jpg"
                                        alt="" class="center-block"> </a> </div>
                         
                            <div class="post--social pbottom--30"> <span class="title"><i
                                        class="fa fa-share-alt"></i></span>
                                <div class="social--widget style--4">
                                    <ul class="nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                          
                            <div class="post--related ptop--30">
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">You Might Also Like</h2>
                                    <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_related_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_related_posts"> <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <li class="col-sm-6 pbottom--30">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img"> <a href="#" class="thumb"><img src="./assets/img/<?= $roww['image'] ?>" alt="" style="height:200px;"></a> <a href="#" class="cat">Fitness</a> <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">

                                                            <li></li>
                                                        </ul>
                                                        <div class="title">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post--content">
                                                    <a href="#"><?= $roww['createdat'] ?></a>
                                                    <p><?= $roww['title'] ?></p>
                                                </div>
                                                <div class="post--action"> <a href="news-detail.php?news_id=<?= $roww['news_id'] ?>">Continue Reading... </a> </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-6 pbottom--30">
                                            <?php $rowa = mysqli_fetch_assoc($resultt) ?>
                                            <div class="post--item post--layout-1">
                                                <div class="post--img"> <a href="#" class="thumb"><img src="./assets/img/<?= $rowa['image'] ?>" alt="" style="height:200px;"></a> <a href="#" class="cat">Fitness</a> <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">

                                                            <li></li>
                                                        </ul>
                                                        <div class="title">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post--content">
                                                    <a href="#"><?= $rowa['createdat'] ?></a>
                                                    <p><?= $rowa['title'] ?></p>
                                                </div>
                                                <div class="post--action"> <a href="news-detail.php?news_id=<?= $rowa['news_id'] ?>">Continue Reading... </a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                          
                          
                        </div>
                    </div>
                    <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="widget">
                                <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-1.jpg" alt="">
                                    </a> </div>
                            </div>
                        
                          
                            <!-- <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Featured News</h2> <i class="icon fa fa-newspaper-o"></i>
                                </div>
                                <div class="list--widget list--widget-1">
                                   
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/news-widget-01.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Ninurta</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/news-widget-02.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Orcus</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/news-widget-03.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Rahab</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/news-widget-04.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Tannin</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Advertisement</h2> <i class="icon fa fa-bullhorn"></i>
                                </div>
                                <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-2.jpg" alt="">
                                    </a> </div>
                            </div>
                          
                           
                            <div class="widget">
                                <div class="ad--widget">
                                    <div class="row">
                                        <div class="col-sm-6"> <a href="#"> <img src="img/ads-img/ad-150x150-1.jpg"
                                                    alt=""> </a> </div>
                                        <div class="col-sm-6"> <a href="#"> <img src="img/ads-img/ad-150x150-2.jpg"
                                                    alt=""> </a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Readers Opinion</h2>
                                    <div class="nav"> <a href="#" class="prev btn-link"
                                            data-ajax-action="load_prev_readers_opinion_widget"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link"
                                            data-ajax-action="load_next_readers_opinion_widget"> <i
                                                class="fa fa-long-arrow-right"></i> </a> </div>
                                </div>
                                <div class="list--widget list--widget-2" data-ajax-content="outer">
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <span class="thumb"> <img
                                                                src="img/widgets-img/readers-opinion-01.png" alt="">
                                                        </span>
                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">Long established fact that a reader will
                                                                    be distracted</h3>
                                                            </div>
                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <span class="thumb"> <img
                                                                src="img/widgets-img/readers-opinion-02.png" alt="">
                                                        </span>
                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">Long established fact that a reader will
                                                                    be distracted</h3>
                                                            </div>
                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <span class="thumb"> <img
                                                                src="img/widgets-img/readers-opinion-03.png" alt="">
                                                        </span>
                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">Long established fact that a reader will
                                                                    be distracted</h3>
                                                            </div>
                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Editors Choice</h2>
                                    <div class="nav"> <a href="#" class="prev btn-link"
                                            data-ajax-action="load_prev_editors_choice_widget"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link"
                                            data-ajax-action="load_next_editors_choice_widget"> <i
                                                class="fa fa-long-arrow-right"></i> </a> </div>
                                </div>
                                <div class="list--widget list--widget-1" data-ajax-content="outer">
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/editors-choice-01.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Ninurta</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/editors-choice-02.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Orcus</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/editors-choice-03.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Rahab</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img
                                                                src="img/widgets-img/editors-choice-04.jpg" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Tannin</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long
                                                                        established fact that a reader will be
                                                                        distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './_partials/_footer.php' ?>
    
</body>
<!-- Mirrored from themelooks.us/demo/PUBLICNEWS/html/news-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:32:27 GMT -->

</html>