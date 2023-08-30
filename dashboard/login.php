<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="./assets/css/mystyle.css">
    <?php session_start()?>
</head>

<body style="font-family: sans-serif;">
   
    <div class="container">

        <div id="msg" style="color:red">
            <?php
            require_once "../apis/classes/authentication.php";
            $auth = new Auth();
            if (isset($_POST['submit'])) {
                $status = $auth->login($_POST['email'], $_POST['password']);
                if ($status!=false) {
                    $_SESSION['email'] = $_POST['email'];
                    echo"login succesfull";
                    echo "<script>window.location.href='./index.php';</script>";
                } else
                    echo "Username or password is not correct";
            }
            ?>

        </div>
        <div class="row">
                <form method="post">
                    <div class="row">
                   
                        <div class="col-md-6"  style="margin-top:80px">
                        <h3 class="text-center">Admin Login</h3>
                            <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address...." />
                            </div>
                            <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password...." />
                            </div>
                            <button class="btn btn-primary" name="submit">Login</button>
                        </div>
                        <div class="col-md-6" style="margin-top:80px">
                    <img src="https://img.freepik.com/free-vector/sign-concept-illustration_114360-5267.jpg?w=740&t=st=1691646484~exp=1691647084~hmac=5c53eb52b5371ecedb9cab605e7dc1b894705f5035fd11b9736ff3af25a5cbbc" style="width:100%;"/>
                        </div>
                    </div>

                </form>
            </div>
    </div>
</body>

</html>