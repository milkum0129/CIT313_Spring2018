
<?php
include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $u){?>
    <h3><a href="<?php echo BASE_URL?>manageusers/<?php echo $u['uID'];?>" title="<?php echo $u['first_name'];?> <?php echo $u['last_name'];?>"><?php echo $u['email'];?></a></h3>
    <p><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></p>
    <p><a href="mailto:<?php echo $u['email'];?>"><?php echo $u['email'];?></a></p>
							<?php if($u['active']==0){?>
							<a class="btn btn-primary" href="<?php echo BASE_URL?>/manageusers/approve/<?php echo $u['uID'];?>">Approve</a>
							<?php }?>
							<a class="btn btn-primary" href="<?php echo BASE_URL?>/manageusers/delete/<?php echo $u['uID'];?>">Delete</a><br>
    

<?php } ?>

</div>

<?php include('views/elements/footer.php');?>