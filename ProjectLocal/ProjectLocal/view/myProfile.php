 <?php
 ob_start();
  if(isset($_SESSION['UserName'])){
	  if($_SESSION['UserId'] == $id or $_SESSION['PrivilegesId']==3){

  
 foreach($profile as $prof){
	 
	 
  
 echo '<h2 class="bodyHeaderMain">Account: '. $prof['UserName'].'</h2>';
 
 
 echo '<p class="bodyHeader">Name: '. $prof['FirstName'].'</p>';
 echo '<p class="bodyHeader">Lastname: '. $prof['SecondName'].'</p>';
 echo '<p class="bodyHeader">E-mail: '. $prof['UserEmail'].'</p>';
 echo '<p class="bodyHeader">Phone number: '. $prof['UserNumber'].'</p>';
 echo '<p class="bodyHeader">Current role: ';
 
if($prof['PrivilegesId'] == 1){
 echo 'User';
}elseif ($prof['PrivilegesId'] == 2){
echo 'Moderator';
}else {
	echo 'Owner';
	}
 echo '</p>';
 }
 if($_SESSION['UserId'] == $id or $_SESSION['PrivilegesId']==3){
 echo '<p><a class="inputAdminMenu" href="ProfileEdit?id='.$prof['UserId'].'">Edit</a></p>';
  echo '<p><a class="inputAdminMenu" href="profile">Back</a></p>';
 }
 
 
  }}
   else {
	 echo '<p class="correctLogin">You didnt come in!</p>';
	 echo '<p style="text-align:center;"><a href="logReg" class="backToLogin">Log in</a></p>';
 }
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>