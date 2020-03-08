 <?php
 ob_start();
  if(isset($_SESSION['UserName'])){
	  if($_SESSION['UserId'] == $id){
		  
echo '<h2 class="bodyHeaderMain">My courses</h2>';
		  
 foreach($myCourses as $course){
	 echo '<div class="courseDiv" style="float:left">';
	 echo '<a class="categoryHref" href="course?id='.$course['CourseId'].'">'.$course['CourseName'].'</a>'; 

	 echo '<p>Course current status: ';
	 
	 if($course['StatusId']==1){
	 echo '<br>In process';
	 }elseif($course['StatusId']==2)
	 {
		 echo '<br>Ended';
	 }
	 
	 echo '</p>';
	 echo '<p style="text-align:right"><a class="categoryHref"  href="course?id='.$course['CourseId'].'">About course</a></p>';

	 echo '</div>';
 
 }
  
  
  
  }else
  {
	echo '<p class="correctLogin">You do not have permission to view this profile! <p>';
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