   <?php
 ob_start();
 ?>
  <h2 class="bodyHeaderMain">Contacts</h2>
  
 <div class="courseDetailDiv">
 <iframe width=620; height=600; src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d107197.66580885355!2d10.077475312964191!3d53.5321068171673!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2see!4v1572685391905!5m2!1sru!2see" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		<p style="text-align:center;">Our phone: +3725326347</p>
		<p style="text-align:center;">E-mail: fec@nnet.eu</p>
</div>
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>