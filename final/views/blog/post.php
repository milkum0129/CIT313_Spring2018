
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}
?>
    <div class="container">
        <div class="page-header">
			<h1><?php echo $title;?></h1></br>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
           
			<h2><?php echo 'View Comments';?></br> 
			<?php if(count($comments)==0)
			{
					echo 'There are no comments.';
			} else {
				foreach($post['comments'] as $comment)
					{
						extract($comment);?>
					<p><?php echo $commentText;?></p></br>
					<p><?php echo $commentfname . ' '. $commentlname;?></br>
					<p><?php echo $commentdate;?>
					<?php
					}
			}	
					
              if($u->isRegistered()) {			
				
					include ('views/elements/comments_form.php');
			  } else { ?>
				  <div class="row">
					<div class="span8">
					<a href="<?php echo BASE_URL;?>login/" class="btn btn-primary">Login</a>
					</div>
					</div>
			<?php 
			}?>

    </div>


<?php include('views/elements/footer.php');?>