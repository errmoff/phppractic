
   <?php
 ob_start();
  if(isset($_SESSION['UserName'])){
if($_SESSION['PrivilegesId']==3){
 ?>
<h2 class="bodyHeaderMain">New user creating</h2>
  
 
 <?php 
 
 ?>
 

 
 <form class="registerForm" method="POST" action="registerResult">
 
 
 
 <p class="form">Name: 	<input class="inputLogReg" type="text" placeholder="Name" name="UserFirstName" required></p>
 <p class="form">Lastname: 	<input class="inputLogReg" type="text" placeholder="Lastname" name="UserSecondName" required></p>
 <p class="form">Phone number: 	<input class="inputLogReg" type="text" placeholder="Phone number" name="UserNumber" required></p>
 <p class="form">Login: 	<input class="inputLogReg" type="text" placeholder="Login" name="UserName" required></p><br>
 <p class="form">E-mail: 	<input class="inputLogReg" type="text" placeholder="E-mail" name="UserEmail" required></p>
 <p class="form">Password: <input class="inputLogReg" type="password" placeholder="Password" name="UserPass" required></p> 
 <!--<p class="form" style="line-height:90%">Подтвердите: <input class="inputLogReg" type="password" placeholder="Подтвердитe" name="UserPassTwo" required></p> -->
 
 

 
 <p style="text-align:center;"><input class="logRegButton" type="submit" name="Register" value="Registration"></p>
 
 

 </form>
 <?php
  }}

 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>