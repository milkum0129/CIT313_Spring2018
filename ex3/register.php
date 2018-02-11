<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Exercise 3</title>

</head>

<body>
<form action="results.php" id= "registration_form" class="registration_form" method="post">

<div>
<label for="firstname" id="firstnameLabel">*First Name:</label>
<input type="text" name="firstname" id="firstname" required data-msg="Please enter your first name."/>
</div>

<div>
<label for="lastname" id="lastnameLabel">*Last Name:</label>
<input type="text" name="lastname" id="lastname" required data-msg="Please enter your last name."/>
</div>

<div>
<label for="email" id="emailLabel">*Email:</label>
<input type="email" name="email" id="email" required data-msg="Please enter your email address."/>
</div>

<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>
</form>
</body>