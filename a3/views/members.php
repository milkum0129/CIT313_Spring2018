
<?php include('elements/header.php');?>

<div class="container">
<div class="page-header">

<h1>Member View</h1>
</div>
<?php foreach($users as $u){?>
    <h3><a href="<?php echo BASE_URL?>members/view/"<?php echo $u['uID'];?></a>
	<p><?php echo $u['first_name'];?><?php echo $u['last_name'];?></p>
	<p><?php echo $u['email'];?></p>
<?php }?>
</div>

<?php include('elements/footer.php');?>