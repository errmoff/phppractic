     <?php
 ob_start();
 if(isset($_SESSION['UserName'])){
	 echo '<div class="loginForm">';
	// echo '<img src="images\'.$_SESSION["PrivilegesId"]." alt="'.$_SESSION["UserName"].'">';
	echo '<p><a href="MyProfile?id='.$_SESSION['UserId'].'" class="ProfileSettingsButtons">My account</a></p>';
	echo '<p><a href="myCourses?id='.$_SESSION['UserId'].'" class="ProfileSettingsButtons">My courses</a></p>';
	
 
if($_SESSION['PrivilegesId'] >= 2){
	
	echo '<p><a href="adminMenu" class="ProfileSettingsButtons">Admin panel</a></p>';


 }

 
?>

 
 
 
 
 
      <?php
 }
 else {
	 echo '<p><a style="margin-left: 43%;" href="login" class="ProfileSettingsButtons">Log in</a></p>';
 }
 echo '</div>';
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>