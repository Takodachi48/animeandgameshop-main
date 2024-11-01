<?php

include()

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm'];

    //passwords dont match
    if($password !== $confirmPassword){
        header('location: register.php?error=password does not match');
    }

    //password less than 8 char
    if(strlen($password) < 8){
        header('location: register.php?error=password must be at least 8 characters long');
    }

}else{

}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Poppins-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary justify-content-between fixed-top py-3">
    <div class="container">
        <img src="assets/imgs/logo.png" alt="Logo" style="height: 40px;"/> <!-- Add height for better alignment -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                 <a class="nav-link" href="#">Home</a>
             </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <!-- Shopping Bag Icon -->
                <a href="#" class="nav-link">
                    <i class="fas fa-shopping-bag"></i>
                </a>
                <!-- User Icon -->
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</nav>


    <!-- Register -->
    <section class="my-5 py-5">
        <div class=" container text-center mt-3 pt-5">
            <h2 class=""form-weight-bold>Register</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto-container">
            <form id="register-form" method="POST" action="register.php">
                <p style="color: red;"><?php echo $_GET['error'];?></p>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="register-confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-custom" id="register-btn" value="Register">
                </div>
                <div class="=form-group">
                    <a id="login-url" class="=btn">Already have an account? Login</a> 
                </div>
            </form>
        </div>
    </section>

    <!-- 1 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>