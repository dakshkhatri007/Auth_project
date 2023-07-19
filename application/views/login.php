<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="<?php echo base_url().'assests/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assests/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assests/css/login.css'?>">
</head>
<body>
<div class="wrapper" >
<form class="for-signin" action="<?php echo base_url().'index.php/Auth/login';?>" method="post" name="frm" id="frm">
    
    <?php
    $msg = $this->session->flashdata('msg');
    if($msg =! ""){
        ?>
        <div class="alert">
        
        </div>
        <?php
    }
    ?>
      <h1 class="h3 mb-6 fw-normal text-center">Please sign in</h1>
      <label class="label-width" for="floatingInput" required>Email address</label>
      <input type="text" id="email" name="email" class="form-control text-center <?php echo (form_error('email') != "") ? 'is-invalid' : '' ;?>" placeholder="Email" value="<?php echo set_value('email');?>">
      <p class="invalid-feedback"><?php echo strip_tags(form_error('email'));?></p>

      <label class="label-width" for="password">Password</label>
      <input id="w" type="password" class="form-control text-center <?php echo (form_error('password') != "") ? 'is-invalid' : '' ;?>" id="password" name="password" placeholder="Password">
      <p class="invalid-feedback"><?php echo strip_tags(form_error('password'));?></p>

     <div class="button-wrapper">
     <button id="sg" style="width: 100%;" class="btn btn-secondary w-32 py-2 text-centre btn-center" type="submit">Sign in</button>
     </div>

    <div class="mt-3">
        <a href="<?php echo base_url().'index.php/Auth/register';?>">Register Here</a>
    </div>
     
</form>
</div>
</body>
</html>