        <?php
 if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){


echo '<form class="registerForm" style="text-align:center" method="POST" action="editCategoryResult?id='.$id.'">';
 
?>
 <h2 style="font-size:1.4vw; text-align:center" class="bodyHeaderMain">Category editor</h2>
 
 
 <p style="float:none">Category name:</p> <input <?php echo 'value="'.$category['CategoryName'].'"' ?> style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Category name" name="CategoryName" required>

 

 <p style="text-align:center;"><input class="logRegButton" type="submit" name="editCategory" value="Edit"></p>
 

 </form>
  <p style=" cursor:pointer; margin-left: 645px; margin-top: -20px;"><a class="logRegButton"  onclick="history.back()">Back</a></p>
 
 
 
 
 
      <?php
		  
	 } else {
	 echo '<p class="correctLogin">You dont have enough permissions!</p>';
	 echo '<p style="text-align:center;"><a href="courses" class="backToLogin">Back</a></p>';
	 }
 }
 else {
	 echo '<p class="correctLogin">You didnt come in!</p>';
	 echo '<p style="text-align:center;"><a href="login" class="backToLogin">Log in</a></p>';
 }
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>