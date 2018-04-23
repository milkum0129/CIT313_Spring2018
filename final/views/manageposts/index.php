<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">

				<?php foreach($posts as $p){?>

            <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
            <sub><?php echo 'Posted on ' . $p['date'] . ' by <a href="'.BASE_URL.'members/view/'. $p['uid']. '">' . $p['first_name'] . ' ' . $p['last_name'] . '</a> in <a href="'.BASE_URL.'category/view/'. $p['categoryid'].'">' . $p[name] .'</a>'?></sub>
            <div style="margin-top:15px;">
							<a href="<?php echo BASE_URL?>ajax/get_post_content/?pID=<?php echo $p['pID'];?>" class="btn post-loader">View entire post</a>
							<a class="btn btn-primary" href="<?php echo BASE_URL?>/manageposts/edit/<?php echo $p['pID'];?>">Edit</a>
							<a class="btn btn-primary" href="<?php echo BASE_URL?>/manageposts/delete/<?php echo $p['pID'];?>">Delete</a><br>
						</div>

        <?php }?>

				<div style="margin-top:15px;"class="">
					<hr>
					<a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-info">Add Post</a>
					
				</div>



      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
