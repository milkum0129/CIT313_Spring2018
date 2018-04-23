<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
		<h1>Categories</h1>
  	</div>
    <?php if( is_array($category) ) {
	extract($category);

	}?>
  		<?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
		<?php }?>
	 <form action="<?php echo BASE_URL ?>categories/update" method="post">
	 	<label for="category">Update Category</label>
		<input type="text" name="categoryName" class="input-sm" id="category" value="<?php echo $name;?>" required="category">
		<input class="hidden" name="categoryID" type="text" value="<?php echo $categoryID;?>">
		<input type="submit" class='btn btn-primary' value="Submit">
	 </form>

</div>

<?php include('views/elements/footer.php');?>