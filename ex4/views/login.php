<?php 
include('elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Login View </h1>
   <?php if(isset($error)){?>
	   <div class="alert alert-danger">
			<?php echo $error;?>
		</div>
   <?php }
  ?>
  

<form action="<?php echo BASE_URL?>login/do_login" id= "login_form" class="login_form" method="post">
<div class="container">
<div class="page-header">
<fieldset>
<legend>Log In</legend></div>
<label for="username">Username/Email:</label>
<input type="text" id="email" name="email" value=""  required="email" />
<br />  
<label for="password">Password: </label>
<input type="password" id="password" name="password" value=""  required="password" />
<br />
<br />
<button id="submit" type="submit" class="btn btn-primary" >Log In</button>
</fieldset>
</div>
</form>

<?php include('elements/footer.php');?>

