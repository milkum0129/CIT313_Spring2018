
<?php include('elements/header.php');?>
<?php 
if( is_array($user) ) 
{
	extract($user);
?>

<div class="container">
	<div class="page-header">

<h1><?php echo "Member ".$uID;?></h1>
  </div>

<?php echo $first_name ." ".$last_name;?></br></br>
<a href="<?php echo $email;?>"><?php echo $email;?></a>


</div>
<?php }?>

<?php if( is_array($users) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $email;?></h1>
</div>
<?php foreach($users as $u){?>
	
    <h3><a href="<?php echo BASE_URL?>members/view/<?php echo $u['uID'];?>" title="<?php echo $u['email'];?>"><?php echo $u['email'];?></a></h3>
	<p><?php echo $u['first_name'] ." ".$u['last_name'];?></p>
	<p><?php echo $u['email'];?></p>
<?php }?>
</div>
<?php }?>
<?php include('elements/footer.php');?>


