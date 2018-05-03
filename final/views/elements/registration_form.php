<form id="registration_form" action="<?php echo BASE_URL; if($password==""){?>register/<?php echo $task;} else{?>members/editUserProfile/<?php echo $_SESSION['uID'];;} ?>" method="post">

<fieldset>
<legend></legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required data-msg="Please enter your first name."/>
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required "Please enter your last name."  />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required "Please enter your email address." />
<br />

<label for="password">Password: <?=REQFIELD?></label>

<input type="password" class="txt" id="password" name="password" value="" maxlength="100" <?php if($password==""){?> required <?php }?> />
<br />

<label for="passwordConfirm">Password Confirmation: <?=REQFIELD?> </label>
<input type="password" class="txt" id="passwordConf" name="passwordConf"   maxlength="100" <?php if($password==""){?> required <?php }?> />

<br />

<input type="hidden" name="uID" value="<?php echo $_SESSION['uID']; ?>"/>
<input type="hidden" name="active"  value="0"/>
<input type="hidden" name="currentpassword"  value="<?php echo $password?>"/>
 
<button id="submit" type="submit" class="btn btn-primary" >Submit</button>
</fieldset>
</form>
