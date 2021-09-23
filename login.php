
<div class="container">
<div class="col-md-6">
          <div class="card" style="width: 30rem;"> 
          <div class="card-body login">
    <h2 style="color:green;">Login to Your Account</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Login form -->
    <div class="regisFrm">
        <form action="" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="EMAIL" required="">
                <span class="text-danger"><?php echo form_error('email','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="PASSWORD" required="">
                <span class="text-danger"><?php echo form_error('password','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="send-button">
                <input type="submit" class="btn btn-info" name="loginSubmit" value="LOGIN">
            </div><br>
        </form>
        <p>Don't have an account? <a href="<?php echo base_url('index.php/users/registration'); ?>">Register</a></p>
    </div>
</div>
</div>
</div>
</div>
    