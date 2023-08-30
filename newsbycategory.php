<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from themelooks.us/demo/usnews/html/sports.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:35:13 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo3.jpeg"/>
    <title>PublicNews - Multipurpose News, Magazine and Blog HTML5 Template</title>
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="USNews - Multipurpose News and Magazine Template">
    <meta name="keywords" content="news, newspaper, magazine, blog, post, article, editorial, publishing, modern, responsive, html5, template">
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


        <div class="main--breadcrumb">
            <div class="container-fluid">

            </div>
        </div>
        <div class="main-content--section pbottom--30">
            <div class="container-fluid">
                <div class="main--content">
                    <div class="post--items post--items-1 pd--30-0">
                        <?php
                        $result = $news->getallnewsbycategoryid($_GET['category_id']);
                        if ($result == false) {
                            $components->error("No Job found or something went wrong");
                        } else {
                            $total_records = mysqli_num_rows($result);
                            $record_per_page = 10;
                            $pages = ceil($total_records / $record_per_page);

                            if (!isset($_GET['page'])) {
                                $page = 1; //by default
                            } else {
                                $page = $_GET['page'];
                            }
                            if (!isset($_GET['category_id'])) {
                                $category_id = 1; //by default
                            } else {
                                $category_id = $_GET['category_id'];
                            }
                            $result = $news->getAllnewsbycategoryWithPagination($category_id, ($page - 1) * $record_per_page, $record_per_page);

                            for ($i = 0; $i < $result->num_rows; $i++) {
                                $jobRow = mysqli_fetch_array($result);
                                // $row=$auth->getUserDetailsById($jobRow['user_id']);
                                // echo "<tr>
                                // <td><a href='#'>$jobRow[news_id]</a></td>
                                // <td class='font-weight-600'>$jobRow[title]</td>

                                //     ";



                            }
                        }
                        ?>
                        <div class="row">

                            <div class="col-md-8">
                                <div class="row gutter--15">
                                    <?php
                                    $results = $news->getallnewsbycategoryid($_GET['category_id']);
                                    while ($rows = mysqli_fetch_assoc($results)) {
                                    ?>
                                        <div class="col-md-7">
                                            <div class="row gutter--15">

                                                <div class="col-md-12 col-xs-6 col-xxs-12">
                                                    <div class="post--item post--layout-1 post--title-large">
                                                        <div class="post--img"> <a href="news-single-v1.html" class="thumb">
                                                                <img src="./assets/img/<?= $rows['image'] ?>" alt="" style="height:300px;width:550px"></a>

                                                            <div class="post--info">

                                                                <div class="title">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row gutter--15">

                                                <div class="col-md-12 col-xs-6 col-xxs-12">


                                                    <div class="post--info">

                                                        <div class="title">
                                                            <h2 class="h4"><?= $rows['title'] ?></h2>
                                                        </div>
                                                        <div>
                                                            <p><?= $rows['description'] ?></p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                </div>

                            <?php } ?>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- <a href="sports.php?category_id=1&page=1">1</a>
        <a href="sports.php?category_id=1&page=2">2</a>
        <a href="sports.php?category_id=1&page=3">3</a> -->
            <?php require_once './_partials/_footer.php' ?>

</body>
<!-- Mirrored from themelooks.us/demo/usnews/html/sports.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:35:48 GMT -->

</html>