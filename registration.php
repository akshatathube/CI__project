
<div class="container">
<div class="col-md-6">
          <div class="card" style="width: 30rem;"> 
          <div class="card-body register">
    <h2 style="color:green;">Create a New Account</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="first_name"  class="form-control " placeholder="FIRST NAME" style='text-transform:capitalize' value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                <span class="text-danger"> <?php echo form_error('first_name','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="form-group">
            <label>Address</label>
                <input type="text" name="address"  class="form-control " placeholder="Address" value="<?php echo !empty($user['address'])?$user['address']:''; ?>" required>
                <span class="text-danger"><?php echo form_error('address','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="form-group">
            <label>Email</label>
                <input type="email" name="email"  class="form-control " placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <span class="text-danger"><?php echo form_error('email','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="form-group">
            <label>Password</label>
                <input type="password" name="password"  class="form-control " placeholder="PASSWORD" required>
                <span class="text-danger"><?php echo form_error('password','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="form-group">
            <label>Confirm_Password</label>
                <input type="password" name="conf_password"  class="form-control " placeholder="CONFIRM PASSWORD" required>
                <span class="text-danger"> <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="form-group">
                <label>Gender: </label>
                <?php 
                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div><br>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="phone"  class="form-control " placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <span class="text-danger"><?php echo form_error('phone','<p class="help-block">','</p>'); ?></span>
            </div><br>
            <div class="form-group">
                  <label for="name">States</label>
                  <select name="states" id="states" value="" class="form-control" placeholder="States">
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Gujrat">Gujrat</option>
                      <option value="punjab">Punjab</option>
                 </select>
                
              </div><br>
              <div class="form-group">
                  <label for="name">City</label>
                  <select name="city" id="city" value="" class="form-control" placeholder="City">
                      <option value="Mumbai">Mumbai</option>
                      <option value="pune">Pune</option>
                      <option value="parner">Parner</option>
                 </select>
                
              </div><br>
              <div class="form-group">
                  <label for="document">Document</label><br>
                  <input type="checkbox" name="document" id="document" value="">
                  <label for="pancard">Pancard</label><br>
                  <input type="checkbox" name="document1" id="document1" value="">
                  <label for="adharcard">Adharcard</label><br>
                  <input type="checkbox" name="document2" id="document2" value="">
                  <label for="passport">Passport</label><br>
                
              </div><br>
            <div class="send-button">
                <input type="submit" class="btn btn-info" name="signupSubmit" value="REGISTER">
            </div><br>
        </form>
        <p>Already have an account? <a href="<?php echo base_url('index.php/users/login'); ?>">Login here</a></p>
    </div>
</div>

</div>

</div>

</div>
   