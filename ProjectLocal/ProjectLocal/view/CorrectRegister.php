     <?php
 ob_start();


 
 

	  echo '<p class="correctLogin">Successful registration! Please enter!</p>';
	  echo '<p style="text-align:center;"><a href="login" class="RegButton">Log in</a></p>';

  
  
 


  

 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>