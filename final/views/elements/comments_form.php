<form id="comments_form" action="<?php echo BASE_URL;?>blog/save" method="post">

<fieldset>
<textarea id="comments" name="comments" style="width:556px;height: 200px"><?php echo $commentText?></textarea>
<br/>
<input type="hidden" name="pID" value="<?php echo $pID?>"/>
			
<input type="hidden" name="uID" value="<?php echo $uID?>"/>

<input type="hidden" name="commentID" value="<?php echo $commentID?>"/>
<br />
<button id="submit" type="submit" class="btn btn-primary">Comment</button></br>
<a href="<?php echo BASE_URL;?>blog/remove" class="btn btn-primary">Delete</a>
</fieldset>
</form>