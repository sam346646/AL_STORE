<?php 
    session_start();
    include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
<div class="container login-form">
    <h3 class="text-center text-danger"><b>Admin login <i class="fa fa-sign-in"></i></b></h3>
    <form method="post" class="form-vertical">
        <div class="form-group">
            <label><b>Email</b></label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Password</b></label>
            <input type="password" name="pass" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Log in" class="btn btn-danger form-control">
        </div>
    </form>
</div>
</body>
</html>

<?php 

    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry="select * from admins where admin_email='$email' AND admin_pass='$pass'";
        $run_qry=mysqli_query($con,$qry);
        $count=mysqli_num_rows($run_qry);
        if($count==1)
        {    
            $_SESSION['a_email']=$email;   
            echo "<script>window.open('index.php?dashboard','_self')</script>";
        }
        else
        {    
            echo "<script>alert('Email or Password is Wrong !')</script>";   
        }
        
    }

?>