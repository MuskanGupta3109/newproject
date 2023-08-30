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
                $select = $news->getAllcategories();
                if (!isset($_GET['id']))
                    echo "<script>window.location.href='get-all-news.php';</script>";

                $result = $news->getnewsById($_GET['id']);
                $row = mysqli_fetch_assoc($result);
                // print_r($row);

                if (isset($_POST['submit'])) {
                    // print_r($_POST);
                    $status = $news->editnews($_POST, $_FILES['image'], $_POST['news_id']);

                    if ($status)
                        // echo "
                        //  <script>
                        //     alert('success!!!'); 
                        //     window.location.href='get-all-news.php';
                        // </script>";
                        echo "sucess";
                    else
                        // echo "
                        //      <script>
                        //         alert('something went wrong!!!'); 
                        //     </script>";
                        echo "unsuccess";
                }
                ?>
                <!-- Start container-fluid -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="header-title mb-3">Edit news</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="title">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" id="title" value="<?= $row['title'] ?>" required name="title" class="form-control" placeholder="title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="description">Description</label>
                                    <div class="col-md-10">
                                        <textarea id="description" required name="description" class="form-control" placeholder="Description"><?= $row['description'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <span>

                                            <label class="col-md-2 col-form-label" for="image"><i class="fa fa-edit fa-lg" style="color:green;margin: 0px 165px; cursor:pointer"></i>
                                        </span>
                                        <span>

                                            <img src=".././assets/img/<?= $row['image'] ?>" alt="" width="200px" name="image" id="img" style="margin: 0px 80px; border: 2px solid blue; border-radius:5px" />
                                        </span>
                                        </label>

                                        <input type="file" id="image" name="image" class="form-control" onchange="preImg()" hidden>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="cat_name">category</label>
                                    <div class="col-md-10">
                                        <select class="form-control col-md-10" name="category_id">
                                            <?php
                                            echo 'running';
                                            while ($rows = mysqli_fetch_assoc($select)) {
                                                // print_r($row);
                                                echo "<option value='$rows[category_id]'>$rows[cat_name]</option>";
                                            }
                                            ?>
                                    </div>
                                </div>
                                <input value="<?= $row['news_id'] ?>" name="news_id" hidden>

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