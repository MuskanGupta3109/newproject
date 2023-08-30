<!DOCTYPE html>
<html lang="en">



<head>
    <title>Edit investment </title>
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

                if (!isset($_GET['id']))
                    echo "<script>window.location.href='get-all-news.php';</script>";

                $result = $news->getcategoriesbyid($_GET['id']);
                $row=mysqli_fetch_assoc($result);
                // print_r($row);

                if (isset($_POST['submit'])) {

                    $status = $news->editcategories($_POST,$_POST['category_id']);
                    if ($status)
                        echo "
                             <script>
                                alert('success!!!'); 
                                window.location.href='get-all-news.php';
                            </script>";
                    else
                        echo "
                             <script>
                                alert('something went wrong!!!'); 
                            </script>";
                }
                ?>
                <!-- Start container-fluid -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="header-title mb-3">Edit category</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post">
                              
                                
                                
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="cat_name">category</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?= $row['cat_name'] ?>" required class="form-control" id="category" name="cat_name" placeholder="Category">
                                    </div>
                                </div>
                                <input value="<?= $row['category_id'] ?>" name="category_id
                        " hidden>

                                <div style="display: flex; justify-content:space-evenly">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                    <a href="index.php" class="btn btn-primary">Cancel</a>

                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- end container-fluid -->
                <?php require_once './_partials/footer.php' ?>

</body>

</html>
<script>
    let image = document.getElementById('image');
    let img = document.getElementById('img');

    function preImg() {
        img.src = URL.createObjectURL(event.target.files[0]);
    }
</script>