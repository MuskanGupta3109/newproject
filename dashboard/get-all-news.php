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
                                <h4 class="header-title mb-3">NEWS</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="mt-5">
                                <h5 class="font-14">News list</h5>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <!-- <a href="add-banner.php" class="btn btn-primary mb-2">Add Banner</a> -->
                                    <a href="add-news.php" class="btn btn-primary mb-2">Add news</a>
                                    <thead>
                                    <tr>
                                            <!-- <th scope="col">S.no</th> -->
                                            <th scope="col">news ID</th>
                                            <th>view</th>
                                            <th scope="col">Title</th>
                                          
                                            <th scope="col">description</th>
                                            <th scope="col">category id</th>
                                            <th scope="col">Image</th>
                                            <th>action</th>
                                            </tr>
                                    </thead>

                                    <tbody class="tbl">
                                        <?php
                                        $result = $news->getAllnews();
                                        if ($result == false)
                                            echo "<tr>No queries found</tr>";
                                        else {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // $is_checked = $row['Active'] == 1 ? 'checked' : '';
                                                echo "
                                                <tr>
    
                                                <td>$row[news_id]</td>
                                                <td>
                                                <a href='getnewsdetailbyid.php?id=$row[news_id]'><i class='fa fa-eye' style='color:primary;'></i></a>
                                            </td>
                                                <td>$row[title]</td>
                                                <td>$row[description]</td>
                                                <td>$row[category_id]</td>
                                                
                                                <td>$row[image]</td>
                                                
                                               
                                                
                                               
                                        
                                            <td>
                                            
                                                <a href='editnews.php?id=$row[news_id]'><i class='fa fa-edit' style='color:green;'></i></a>
                                                <a href='#' onclick='deletenews($row[news_id])'><i class='fa fa-trash' style='color:red;'></i></a>
                                            </td>
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
                <script>
                    function deletenews(id) {
                        if (confirm('Are you sure?'))
                            window.location.href = `get-all-news.php?delete=1&id=${id}`;
                    }

                    // function toggleActive(id, status) {

                    //     let active = (status === 'checked' ? 0 : 1);
                    //     console.log(active, status)
                    //     if (confirm('Are you sure? Change state'))
                    //         window.location.href = `get-all-news.php?toggleActive=1&id=${id}&active=${active}`;
                    // }
                </script>
                <?php
                if (isset($_GET['delete'], $_GET['id'])) {
                    $news->deletenews($_GET['id']);
                    echo "<script>window.location.href='get-all-news.php'</script>";
                }

                if (isset($_GET['toggleActive'], $_GET['id'])) {
                    $users->toggleActive($_GET['id'], $_GET['active']);
                    echo "<script>window.location.href='get-all-news.php'</script>";
                }
                ?>

                <!-- end container-fluid -->

                <?php require_once './_partials/footer.php' ?>


</body>

</html>