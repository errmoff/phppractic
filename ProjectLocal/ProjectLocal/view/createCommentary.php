
   
   
   <?php
 ob_start();
 ?>
<h2 class="bodyHeaderMain">Feedback</h2>
  
 
 <?php 
  if(!isset($_SESSION['UserName'])){
 
 ?>
 </form>
 
 
<?php  
  }else{
	echo '<form class="settingsForm" style="clear:both; " method="POST" action="CommentResult">';
	echo '<h2 style="font-size:1.4vw;" class="bodyHeaderMain">Send your comment to ended course!</h2>';

	echo '<textarea class="inputComment" type="textarea" name="commentary" placeholder="Max length - 6000 symbols" maxlength="6000" rows="7"></textarea>';
	echo '<p style="text-align:left;"><input class="logRegButton" type="submit" name="Login" value="Send"></p>';
	echo '<p style="text-align:left;"><a class="RegButton" onclick="history.back()">Back</a></p>';
	
  }  
  
  ?>
  
 </form>
 <?php

 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>