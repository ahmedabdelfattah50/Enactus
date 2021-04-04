<?php
    $noNavbar = "";
    $noSidebar = "";
    $pageTitle = "Admin login";
    
        session_start();        
        include "init.php";
        
        if(isset($_SESSION['username'])) { 
            header("Location:dashboard.php");
            exit();
        } 
        
        if($_SERVER['REQUEST_METHOD'] == "POST") {

            $username = $_POST['form_username'];
            $password = $_POST['form_password'];

            $hasedPass = password_hash($password,PASSWORD_DEFAULT);
            
            $stmt = $con->prepare("SELECT * FROM hosters WHERE ((trust_status = 1 || trust_status = 2)  && username = ?)");
            $stmt->execute(array($username));
            $member = $stmt->fetch();
                        
            if ( ($member['username'] == $username) && (password_verify($password,$member['password'])) ) {
                $_SESSION['username'] = $member['username'];
                $_SESSION['ID'] = $member['ID'];
                $_SESSION['trust_status'] = $member['trust_status'];
                header("Location:dashboard.php");
                echo $_SESSION['username'];
                exit();
            } else {
                header("Location:index.php");
            }           
        }               
?>

<!-- <div class="container">
    <form action="<php $_SERVER['PHP_SELF']?>" method="POST">
        <br><br><h2>Admin login form</h2><br>
        <div class="form-group">
            <label>username</label>
            <input name="form_username" type="text" class="form-control" required>            
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name= "form_password" type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> -->


<div class="container d-flex justify-content-center align-items-center">
    <div class="login-box mt-5">
        <div class="login-logo">
            <b>Admin</b> Sign In
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>