  <?php
 ob_start();
 if(isset($_SESSION['UserName'])){
if($_SESSION['PrivilegesId'] >= 2){
 ?>
  
  <br>
  <h2 class="bodyHeaderMain">Users list:</h2>

    <?php

echo '<div class="categoryDiv">';
 foreach($UserList as $user){
	 if($user['PrivilegesId'] >= 2){
	echo '<a class="categoryHref" href="MyProfile?id='.$user['UserId'].'">'.$user['UserName'].'</a>'; 
	echo '<a class="AdminControlButtons" href="deleteProfile?id='.$user['UserId'].'">Delete</a><br>';
	 }
 
 }
  echo '<a class="inputAdminMenu" style="float:right; margin-top:5%; margin-right:3%" href="profile">Previous</a>';
 echo '<a class="inputAdminMenu" style="float:right; margin-top:5%; margin-right:3%" href="addUser">Add user</a>';
 
 echo '</div>';
 ?>

 
<div style="clear:both"></div>
 <?php
 }}
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>