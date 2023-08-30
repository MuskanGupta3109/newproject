<!DOCTYPE html>
<html lang="en">



<head>
    <title>Add news </title>
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
                $select=$news->getAllcategorieswithoutlimit();
                if (isset($_POST['submit'])) {
                    // print_r($_POST);
                    $status = $news->addnews($_POST,$_FILES['image']);
                    if ($status)
                        // echo 'success';
                        echo "
                             <script>
                                alert('success!!!'); 
                                window.location.href='add-news.php';
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
                                <h4 class="header-title mb-3">Add News</h4>
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
                                     
                                    <input type="text" id="title" required name="title" class="form-control" placeholder="title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="image">Image</label>
                                    <div class="col-md-10">
                                        <input type="file" required class="form-control" id="image" name="image" placeholder="image">
                                    </div>
                                </div>

                                 <div class="form-group mt-3">
                    

                     <label class="col-md-2" style="margin-left: -12px;">Select category:</label>

                   
                      
                    
                    <select class="form-control col-md-10" name="category_id">
                          <option selected="">Select category</option>
                          <?php  
                          echo 'running';
                          while($row=mysqli_fetch_assoc($select)){
                            // print_r($row);
                              echo "<option value='$row[category_id]'>$row[cat_name]</option>";
                          }
                          ?>
                          <!-- <option value="">$row['']</option> -->
                          <!-- <option>CS</option>
                          <option>ME</option>
                          <option>CIVIL</option>
                          <option>CA</option> -->
                      </select>
                
            
                  </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="Days">Description</label>
                                    <div>
                                        <textarea  required class="form-control w-100" style="height: 250px;"  id="description" required name="description" placeholder="Description"></textarea>
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