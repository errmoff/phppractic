 <?php
 ob_start();
 ?>
 
<p class="correctLogin">Просим прощения, но страница не найдена. 404</p>
 
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';