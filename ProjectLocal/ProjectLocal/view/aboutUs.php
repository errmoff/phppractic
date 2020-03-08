  <?php
 ob_start();
 ?>
  О нас
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>