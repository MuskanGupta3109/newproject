<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from themelooks.us/demo/usnews/html/news-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:32:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo3.jpeg"/>
    <title>PublicNews - Multipurpose News, Magazine and Blog HTML5 Template</title>
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="USNews - Multipurpose News and Magazine Template">
    <meta name="keywords" content="news, newspaper, magazine, blog, post, article, editorial, publishing, modern, responsive, html5, template">
    <link rel="icon" href="favicon.png" type="image/png">
    <?php require_once './_partials/_styles.php' ?>
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
        <?php require_once './_partials/_nav.php' ?>
        <!-- <div class="posts--filter-bar style--1 hidden-xs">
            <div class="container">
                <ul class="nav">
                    <li> <a href="#"> <i class="fa fa-star-o"></i> <span>Featured News</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-heart-o"></i> <span>Most Popular</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-fire"></i> <span>Hot News</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-flash"></i> <span>Trending News</span> </a> </li>
                    <li> <a href="#"> <i class="fa fa-eye"></i> <span>Most Watched</span> </a> </li>
                </ul>
            </div>
        </div> -->
        <div class="news--ticker">
            <div class="container">







            </div>
        </div>

        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <div class="main--content col-md-8" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="post--item post--single post--title-largest pd--30-0">
                                <div class="post--img"> <a href="#" class="thumb">
                                        <?php

                                        $results = $news->getnewsbycategoryid($_GET['news_id']);

                                        if ($results == false)
                                            echo "<tr>No queries found</tr>";
                                        else {
                                            $rows = mysqli_fetch_assoc($results);
                                            //  echo"
                                            // // <h2>$rows[cat_name]</h2>";
                                        }
                                        ?>

                                        <?php
                                        $resultt = $news->getrecentnews();
                                        if ($resultt == false)
                                            echo "<tr>No queries found</tr>";
                                        else {
                                            $roww = mysqli_fetch_assoc($resultt);
                                        }

                                        ?>

                                        <img src="./assets/img/<?= $rows['image'] ?>" alt="" style="height:300px;"></a>
                                    <!-- <a href="#"
                                        class="icon"><i class="fa fa-star-o"></i></a> -->
                                    <div class="post--map">

                                        <div class="map--wrapper">
                                            <p><?= $rows['createdat'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="post--cats">
                                    <ul class="nav">
                                        <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Fitness</a></li>
                                        <li><a href="#">Music</a></li>
                                    </ul>
                                </div> -->

                                <div class="post--content">
                                    <p><?= $rows['description'] ?>
                                    </p>




                                </div>
                            </div>
                            <div class="ad--space pd--20-0-40"> <a href="#"> <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block"> </a> </div>
                            <!-- <div class="post--tags">
                                <ul class="nav">
                                    <li><span><i class="fa fa-tags"></i></span></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Image</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Video</a></li>
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Latest</a></li>
                                    <li><a href="#">Trendy</a></li>
                                    <li><a href="#">Special</a></li>
                                    <li><a href="#">Recipe</a></li>
                                </ul>
                            </div> -->
                            <div class="post--social pbottom--30"> <span class="title"><i class="fa fa-share-alt"></i></span>
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
                            <!-- <div class="post--author-info clearfix">
                                <div class="img">
                                    <div class="vc--parent">
                                        <div class="vc--child"> <a href="author.html" class="btn-link"> <img
                                                    src="img/news-single-img/author.jpg" alt="">
                                                <p class="name">Karla Gleichauf</p>
                                            </a> </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <h2 class="h4">About The Author</h2>
                                    <div class="content">
                                        <p>That is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has ab more normal distribution of letters, as
                                            opposed to using content here.</p>
                                    </div>
                                    <ul class="social nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="post--nav">
                                <ul class="nav row">
                                    <li class="col-xs-6 ptop--30 pbottom--30">
                                        <div class="post--item">
                                            <div class="post--img"> <a href="#" class="thumb"><img
                                                        src="img/news-single-img/post-nav-prev.jpg" alt=""></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">On the other hand,
                                                                we denounce with righteous indignation and dislike
                                                                demoralized</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-6 ptop--30 pbottom--30">
                                        <div class="post--item">
                                            <div class="post--img"> <a href="#" class="thumb"><img
                                                        src="img/news-single-img/post-nav-next.jpg" alt=""></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">On the other hand,
                                                                we denounce with righteous indignation and dislike
                                                                demoralized</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
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
                            <!-- <div class="comment--list pd--30-0">
                                <div class="post--items-title">
                                    <h2 class="h4">03 Comments</h2> <i class="icon fa fa-comments-o"></i>
                                </div>
                                <ul class="comment--items nav">
                                    <li>
                                        <div class="comment--item clearfix">
                                            <div class="comment--img float--left"> <img
                                                    src="img/news-single-img/comment-avatar-01.jpg" alt=""> </div>
                                            <div class="comment--info">
                                                <div class="commen
                                                t--header clearfix">
                                                    <p class="name">Karla Gleichauf</p>
                                                    <p class="date">12 May 2017 at 05:28 pm</p><a href="#"
                                                        class="reply"><i class="fa fa-mail-reply"></i></a>
                                                </div>
                                                <div class="comment--content">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike men who are so beguiled and demoralized by the charms of
                                                        pleasure of the moment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment--item clearfix">
                                            <div class="comment--img float--left"> <img
                                                    src="img/news-single-img/comment-avatar-02.jpg" alt=""> </div>
                                            <div class="comment--info">
                                                <div class="comment--header clearfix">
                                                    <p class="name">M Shyamalan</p>
                                                    <p class="date">12 May 2017 at 05:28 pm</p><a href="#"
                                                        class="reply"><i class="fa fa-mail-reply"></i></a>
                                                </div>
                                                <div class="comment--content">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike men who are so beguiled and demoralized by the charms of
                                                        pleasure of the moment</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="comment--items nav">
                                            <li>
                                                <div class="comment--item clearfix">
                                                    <div class="comment--img float--left"> <img
                                                            src="img/news-single-img/comment-avatar-03.jpg" alt="">
                                                    </div>
                                                    <div class="comment--info">
                                                        <div class="comment--header clearfix">
                                                            <p class="name">Liz Montano</p>
                                                            <p class="date">12 May 2017 at 05:28 pm</p><a href="#"
                                                                class="reply"><i class="fa fa-mail-reply"></i></a>
                                                        </div>
                                                        <div class="comment--content">
                                                            <p>On the other hand, we denounce with righteous indignation
                                                                and dislike men who are so beguiled and demoralized by
                                                                the charms of pleasure of the moment</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- <div class="comment--form pd--30-0">
                                <div class="post--items-title">
                                    <h2 class="h4">Leave A Comment</h2> <i class="icon fa fa-pencil-square-o"></i>
                                </div>
                                <div class="comment-respond">
                                    <form action="#" data-form="validate">
                                        <p>Don’t worry ! Your email address will not be published. Required fields are
                                            marked (*).</p>
                                        <div class="row">
                                            <div class="col-sm-6"> <label> <span>Comment *</span> <textarea
                                                        name="comment" class="form-control" required></textarea>
                                                </label> </div>
                                            <div class="col-sm-6"> <label> <span>Name *</span> <input type="text"
                                                        name="name" class="form-control" required> </label> <label>
                                                    <span>Email Address *</span> <input type="email" name="email"
                                                        class="form-control" required> </label> <label>
                                                    <span>Website</span> <input type="text" name="website"
                                                        class="form-control"> </label> </div>
                                            <div class="col-md-12"> <button type="submit" class="btn btn-primary">Post a
                                                    Comment</button> </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
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
                                    <h2 class="h4">Stay Connected</h2> <i class="icon fa fa-share-alt"></i>
                                </div>
                                <div class="social--widget style--1">
                                    <ul class="nav">
                                        <li class="facebook"> <a href="#"> <span class="icon"><i
                                                        class="fa fa-facebook-f"></i></span> <span
                                                    class="count">521</span> <span class="title">Likes</span> </a> </li>
                                        <li class="twitter"> <a href="#"> <span class="icon"><i
                                                        class="fa fa-twitter"></i></span> <span
                                                    class="count">3297</span> <span class="title">Followers</span> </a>
                                        </li>
                                        <li class="google-plus"> <a href="#"> <span class="icon"><i
                                                        class="fa fa-google-plus"></i></span> <span
                                                    class="count">596282</span> <span class="title">Followers</span>
                                            </a> </li>
                                        <li class="rss"> <a href="#"> <span class="icon"><i
                                                        class="fa fa-rss"></i></span> <span class="count">521</span>
                                                <span class="title">Subscriber</span> </a> </li>
                                        <li class="vimeo"> <a href="#"> <span class="icon"><i
                                                        class="fa fa-vimeo"></i></span> <span class="count">3297</span>
                                                <span class="title">Followers</span> </a> </li>
                                        <li class="youtube"> <a href="#"> <span class="icon"><i
                                                        class="fa fa-youtube-square"></i></span> <span
                                                    class="count">596282</span> <span class="title">Subscriber</span>
                                            </a> </li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Get Newsletter</h2> <i class="icon fa fa-envelope-open-o"></i>
                                </div>
                                <div class="subscribe--widget">
                                    <div class="content">
                                        <p>Subscribe to our newsletter to get latest news, popular news and exclusive
                                            updates.</p>
                                    </div>
                                    <form
                                        action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                                        method="post" name="mc-embedded-subscribe-form" target="_blank"
                                        data-form="mailchimpAjax">
                                        <div class="input-group"> <input type="email" name="EMAIL"
                                                placeholder="E-mail address" class="form-control" autocomplete="off"
                                                required>
                                            <div class="input-group-btn"> <button type="submit"
                                                    class="btn btn-lg btn-default active"><i
                                                        class="fa fa-paper-plane-o"></i></button> </div>
                                        </div>
                                        <div class="status"></div>
                                    </form>
                                </div>
                            </div> -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Featured News</h2> <i class="icon fa fa-newspaper-o"></i>
                                </div>
                                <div class="list--widget list--widget-1">
                                    <div class="list--widget-nav" data-ajax="tab">
                                        <ul class="nav nav-justified">
                                            <li> <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a> </li>
                                            <li class="active"> <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a> </li>
                                            <li> <a href="#" data-ajax-action="load_widget_most_watched">Most
                                                    Watched</a> </li>
                                        </ul>
                                    </div>
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img"> <a href="#" class="thumb"><img src="img/widgets-img/news-widget-01.jpg" alt=""></a>
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
                                                    <div class="post--img"> <a href="#" class="thumb"><img src="img/widgets-img/news-widget-02.jpg" alt=""></a>
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
                                                    <div class="post--img"> <a href="#" class="thumb"><img src="img/widgets-img/news-widget-03.jpg" alt=""></a>
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
                                                    <div class="post--img"> <a href="#" class="thumb"><img src="img/widgets-img/news-widget-04.jpg" alt=""></a>
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
                            <!-- <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Advertisement</h2> <i class="icon fa fa-bullhorn"></i>
                                </div>
                                <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-2.jpg" alt="">
                                    </a> </div>
                            </div> -->
                            <!-- <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Voting Poll (Checkbox)</h2>
                                    <div class="nav"> <a href="#" class="prev btn-link"
                                            data-ajax-action="load_prev_poll_widget"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget"> <i
                                                class="fa fa-long-arrow-right"></i> </a> </div>
                                </div>
                                <div class="poll--widget" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li class="title">
                                            <h3 class="h4">Which was the best Football World Cup ever in your opinion?
                                            </h3>
                                        </li>
                                        <li class="options">
                                            <form action="#">
                                                <div class="checkbox"> <label> <input type="checkbox" name="option-1">
                                                        <span>Brazil 2014</span> </label>
                                                    <p>65%<span style="width: 65%;"></span></p>
                                                </div>
                                                <div class="checkbox"> <label> <input type="checkbox" name="option-2">
                                                        <span>South Africa 2010</span> </label>
                                                    <p>28%<span style="width: 28%;"></span></p>
                                                </div>
                                                <div class="checkbox"> <label> <input type="checkbox" name="option-2">
                                                        <span>Germany 2006</span> </label>
                                                    <p>07%<span style="width: 07%;"></span></p>
                                                </div><button type="submit" class="btn btn-primary">Vote Now</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Voting Poll (Radio)</h2>
                                    <div class="nav"> <a href="#" class="prev btn-link"
                                            data-ajax-action="load_prev_poll_widget"> <i
                                                class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget"> <i
                                                class="fa fa-long-arrow-right"></i> </a> </div>
                                </div>
                                <div class="poll--widget" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li class="title">
                                            <h3 class="h4">Do you think the cost of sending money to mobile phone should
                                                be reduced?</h3>
                                        </li>
                                        <li class="options">
                                            <form action="#">
                                                <div class="radio"> <label> <input type="radio" name="option-1">
                                                        <span>Yes</span> </label>
                                                    <p>65%<span style="width: 65%;"></span></p>
                                                </div>
                                                <div class="radio"> <label> <input type="radio" name="option-1">
                                                        <span>No</span> </label>
                                                    <p>28%<span style="width: 28%;"></span></p>
                                                </div>
                                                <div class="radio"> <label> <input type="radio" name="option-1">
                                                        <span>Average</span> </label>
                                                    <p>07%<span style="width: 07%;"></span></p>
                                                </div><button type="submit" class="btn btn-primary">Vote Now</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
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
                            <div class="widget">
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
                            </div>
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
                            </div> -->
                            <?php require_once './_partials/_sidemenu.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './_partials/_footer.php' ?>
</body>
<!-- Mirrored from themelooks.us/demo/usnews/html/news-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:32:27 GMT -->

</html>