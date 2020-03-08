
   
   
   <?php
 ob_start();
 ?>
<h2 class="bodyHeaderMain">Authorization</h2>
  
 
 <?php 
  if(!isset($_SESSION['UserName'])){
 
 ?>
 
 <form class="settingsForm" style="clear:both; " method="POST" action="loginResult">
<h2 style="font-size:1.4vw;" class="bodyHeaderMain">Log in</h2>
 
 
 <p class="form">Login: <input class="inputLogReg" type="text" placeholder="Login" name="UserName" required></p>
 <p class="form">Password: <input class="inputLogReg" type="password" placeholder="Password" name="UserPass" required></p> 

 <p style="text-align:center;"><input class="logRegButton" type="submit" name="Login" value="Log in"></p>
 <p style="text-align:center;"><a class="RegButton" href="reg">Create new account</a></p>

 </form>
 
<?php  
  }else{
echo '<p class="correctLogin">You already logged!</p>';
  }  
  
  ?>
 </form>
 <?php

 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>