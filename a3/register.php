<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> Register! </h1>
  </div>
</div>


<form action="<?php echo BASE_URL?>register/add_user" id= "registration_form" class="registration_form" method="post">

<div class="container">
<div class="page-header">
<fieldset>
<legend>Register Today!</legend></div>
<label for="first_name">First Name: </label>
<input type="text" id="first_name" name="first_name" value="" required="first_name" />
<br />        
<label for="last_name">Last Name: </label>
<input type="text" id="last_name" name="last_name" value=""  required="last_name" />
<br />
<label for="email">E-mail: </label>
<input type="text"  id="email" name="email" value="" required="email" />
<br />
<label for="password">Password: </label>
<input type="password"  id="password" name="password" value="" required="password" />
<br />
<input type="hidden" name="uID" value=""/>
<button id="submit" type="submit" class="btn btn-primary" >Register</button>
</fieldset>
</div>
</form>

<?php include('elements/footer.php');?>
