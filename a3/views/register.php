<?php include('elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Register!</h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
	<fieldset>
	<legend>Register Today!</legend>
	<br />
	<label for="first_name">First Name: </label>
	<input type="text" id="first_name" name="user_first_name" value="" required />  
	<label for="last_name">Last Name: </label>
	<input type="text" id="last_name" name="user_last_name" value=""  required />
	<br />
	<label for="email">E-mail: </label>
	<input type="text"  id="email" name="user_email" value="" required />
	<br />
	<label for="password">Password: </label>
	<input type="password"  id="password" name="user_password" value="" required />
	<br />
	<input type="hidden" name="uID" value=""/>
	<button id="submit" type="submit" class="btn btn-primary" >Register</button>
	</fieldset>
        </form>       
      </div>
    </div>
</div>

<?php include('elements/footer.php');?>
