<?php
    $title = "Login";
    include "includes/head.php";
    $err = "";

    $pass = md5($_POST['password']);
    $username = mysqli_escape_string($link, $_POST['username']);
    $password = mysqli_escape_string($link, $pass);
    $level = mysqli_escape_string($link, $_POST['level']);

    $cek_user = mysqli_query($link, "SELECT * FROM admin WHERE username = '$username'
                AND level = '$level' ");
    $user_valid = mysqli_fetch_array($cek_user);

    if($user_valid){
        if($password == $user_valid['password']){
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['nama_admin'] = $user_valid['nama_admin'];
            $_SESSION['level'] = $user_valid['level'];

            if($level == "Administrator"){
                header('location:index.php');
            } elseif($level == "Supplier"){
                header('location:../suplier/supplier.php');
            }
        }else{
            echo "<script>alert('Maaf, Login Gagal, Password anda tidak terdaftar!');
            documen.location='admin/login.php'</script>";
        }
    }
    

    
?>
<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required="required" autofocus="autofocus">
                            <label for="inputEmail">Username</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                    
                        <div class="form-label-group">
                            <select class= "from-control" name="level">
                                <option value="Administrator">Administrator</option>
                                <option value="Supplier">Supplier</option>
                            </select>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" value="Login" name="login">
                </form>
                <p><?=$err;?></p>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>