<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url().'assests/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assests/css/style.css'?>">
</head>
<body>
<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
         <div class="col-md-6 text-right text-white">Welcome, <a href="<?php echo base_url().'index.php/Auth/login'?>" class="nav-item text-white">Logout</a></div>
         
    </div>  
</nav>


</header>
    
</body>
</html>