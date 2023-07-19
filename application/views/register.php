<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url().'assests/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assests/css/style.css'?>">

</head>
<body>
    <div class="container">
        <?php
            $msg = $this->session->flashdata('msg');
            if($msg != ""){
                echo "<div class = 'alert alert-success'>msg</div>";
            }
        ?>
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">
                    REGISTER HERE
                </div>
                <form action="<?php echo base_url().'index.php/Auth/register'?>" name="registerForm" id="registerForm" method="POST">
            <div class="card-body register">
                <p class="card-text">Please fill your details</p>

                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo set_value('first_name')?>" class="form-control" <?php echo (form_error('first_name') != "") ? 'is-invalid':''; ?> placeholder="First Name">
                    <p><?php echo strip_tags(form_error('first_name'))?></p>
                </div>

                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name')?>" class="form-control" <?php echo (form_error('last_name') != "") ? 'is-invalid':''; ?> placeholder="Last Name">
                    <p><?php echo strip_tags(form_error('last_name'))?></p>
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo set_value('email')?>" class="form-control" <?php echo (form_error('email') != "") ? 'is-invalid':''; ?> placeholder="Email">
                    <p><?php echo strip_tags(form_error('email'))?></p>
                </div>

                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" name="phone" id="phone" value="<?php echo set_value('phone')?>" class="form-control" <?php echo (form_error('phone') != "") ? 'is-invalid':''; ?> placeholder="Phone">
                    <p><?php echo strip_tags(form_error('phone'))?></p>
                </div>
                
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" id="password" value="<?php echo set_value('password')?>" class="form-control" <?php echo (form_error('password') != "") ? 'is-invalid':''; ?> placeholder="Password">
                    <p><?php echo strip_tags(form_error('password'))?></p>
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary">Register Now</button>
                </div>

                <div class="mt-3">
                    <a href="<?php echo base_url().'index.php/Auth/login';?>">Login Here</a>
                </div>

                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>