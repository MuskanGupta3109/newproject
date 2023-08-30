<!DOCTYPE html>
<html lang="en">



<head>
    <title>Add categories </title>
    <?php require_once "./_partials/style.php" ?>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <?php require_once "./_partials/header.php" ?>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <?php require_once "./_partials/sidebar.php" ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <?php
                
                require_once '../apis/classes/news.php';
                $news = new News();
                if (isset($_POST['submit'])) {

                    $status = $news->addcategories($_POST);
                    if ($status)
                        // echo 'success';
                        echo "
                             <script>
                                alert('success!!!'); 
                                window.location.href='categories.php';
                            </script>";
                    else
                        echo "
                             <script>
                                alert('something went wrong!!!'); 
                                // window.location.href='add-news.php';
                            </script>";
                }
                ?>
                <!-- Start container-fluid -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="header-title mb-3">Add categories</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="cat_name">category name</label>
                                    <div class="col-md-10">
                                     
                                    <input type="text" id="cat_name" required name="cat_name" class="form-control" placeholder="category">
                                    </div>
                                </div>
                              

                               
                              

                                <div style="display: flex; justify-content:space-evenly">
                                    <!-- <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                    <a href="index.php" class="btn btn-primary">Cancel</a> -->
                                    <input name='submit' type='submit' class="btn btn-primary" id="button1" name='submit' value="submit">
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- end container-fluid -->
                <?php require_once './_partials/footer.php' ?>

</body>

</html>