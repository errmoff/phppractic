   <?php
 ob_start();
 
if(isset($_SESSION['UserName'])){
if($_SESSION['UserId'] == $id or $_SESSION['PrivilegesId']==3){

foreach($profile as $prof){

  echo '<form class="registerForm" style="float:right;" method="POST" action="ProfileEditResult?id='.$prof['UserId'].'">';

	 echo '<p class="form">Name: 	<input class="inputLogReg" value="'.$prof['FirstName'].'" type="text" placeholder="Name" name="FirstName" required></p>';
	 echo '<p class="form">Lastname: 	<input class="inputLogReg" value="'.$prof['SecondName'].'" type="text" placeholder="Lastname" name="SecondName" required></p>';
	 echo '<p class="form">Phone number: 	<input class="inputLogReg" value="'.$prof['UserNumber'].'" type="text" placeholder="Phone number" name="UserNumber" required></p>';
	 echo '<p class="form">E-mail: 	<input class="inputLogReg" value="'.$prof['UserEmail'].'" type="email" placeholder="E-mail" name="UserEmail" required></p>';
	 

 if($prof['PrivilegesId']!=3){
 if($_SESSION['PrivilegesId']==3){
	echo '<br><p class="form">Role:';
	echo '<select name="PrivilegesId" class="inputLogReg">';
	if($prof['PrivilegesId'] == 1){
	echo '<option selected value="1">User</option>';
	echo '<option value="2">Moderator</option>';
	}
	
	elseif($prof['PrivilegesId'] == 2){
	echo '<option value="1">User</option>';
	echo '<option selected value="2">Moderator</option>';
	}
	echo '</select>';
	echo '</p>';
 }}
 
 echo '<p><input class="inputAdminMenu" name="ProfileEditResult" type="submit" value="Save"></p>';
echo '</form>';
}



}else
{
	echo '<p class="correctLogin">You do not have permission to edit this profile! <p>';
	 echo '<p style="text-align:center;"><a href="profile" class="backToLogin">My profile</a></p>';
}
   }
   else {
	 echo '<p class="correctLogin">You didnt come in!</p>';
	 echo '<p style="text-align:center;"><a href="logReg" class="backToLogin">Log in</a></p>';
 }
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>