<!DOCTYPE html>
<html lang="en">



<head>
    <title>Dashboard </title>
    <?php require_once "./_partials/style.php";
       require_once "../apis/classes/Components.php";

    require_once "../apis/classes/news.php";
    $news=new News();
    ?>
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

                <!-- Start container-fluid -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="header-title mb-3">Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="mt-5">
                                <h5 class="font-14">News Detail</h5>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <!-- <a href="add-banner.php" class="btn btn-primary mb-2">Add Banner</a> -->
                                   
                                    <thead>
                                    <tr>
                                            <!-- <th scope="col">S.no</th> -->
                                            <th scope="col">news ID</th>
                                           
                                            <th scope="col">Title</th>
                                          
                                            <th scope="col">description</th>
                                            <th scope="col">category name</th>
                                            <th scope="col">Image</th>
                                            
                                            </tr>
                                    </thead>

                                    <tbody class="tbl">
                                        <?php
                                        $result = $news->getnewsbyid($_GET['id']);
                                        if ($result == false)
                                            echo "<tr>No queries found</tr>";
                                        else {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // $is_checked = $row['Active'] == 1 ? 'checked' : '';
                                                echo "
                                                <tr>
    
                                                <td>$row[news_id]</td>
                                             
                                                <td>$row[title]</td>
                                                <td>$row[description]</td>
                                                <td>$row[cat_name]</td>
                                                
                                                <td>$row[image]</td>
                                                
                                               
                                                
                                               
                                        

                                        </tr>
                                                ";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>

                            <!-- end -->

                        </div>
                    </div>

                </div>
              

                <?php require_once './_partials/footer.php' ?>


</body>

</html>