<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}
?>
<?php if($message){?>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $message?>
  </div>
<?php }?>


    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/users/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
        <hr>
<h3>Comments</h3>
      <?php
      foreach($comments as $row) {
      echo $row['commentText']."<br><sub>Posted on ". $row['date']." by ".$row['first_name'].' '.$row['last_name'].'</sub>';
	  echo '<br>';
	  echo '<br>';
        if($u->isAdmin()) {
          echo '<form action="'.BASE_URL.'blog/deleteComment/" method="post">
          <input name="commentID" value="'.$row['commentID'].'" style="display: none">
          <input name="postID" value="'.$pID.'" style="display: none"><br>
          <input type="submit" value="Delete Comment">
          </form><hr>';
        }
    }
       ?>
<br><br>
<?php
  if (isset($_SESSION['uID'])) {
    echo '<form action="'.BASE_URL.'blog/addcomment/" method="post">
      <input name="uID" value="'.$_SESSION["uID"].'" style="display: none">
      <textarea name="commentText"></textarea>
      <br>
      <label for="date">Date:</label>'.date_default_timezone_set('America/Indiana/Indianapolis').'
      <input name="date" id="date" size="16" type="date" value="'.$date = date('Y-m-d H:i:s').'">
      <input name="postID" value="'.$pID.'" style="display: none"><br>
      <input type="submit" class= "btn"></form>';
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