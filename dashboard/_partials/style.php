<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Responsive bootstrap 4 admin template" name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- third party css -->
<link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
<!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/mystyle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

<?php session_start()?>
<?php
if (!isset($_SESSION['email'])){
    echo "<script>window.location.href='../dashboard/login.php'</script>";
}

?>

<!-- // else{
//     echo "<script>window.location.href='../login.php'</script>";
// } -->
