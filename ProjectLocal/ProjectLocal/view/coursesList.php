  <?php
 ob_start();
 ?>
<?php
if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){
	echo '<div class="courseSettingsDiv">';
	echo '<a class="AdminControlButtons" href="addCourse?id='.$id.'">Add course</a>';
	echo '<a style="margin-left: 10%" href="courses" class="AdminControlButtons">Back</a>';
	echo '</div>';
		 
}}
?>
  
  <br>
  <p class="bodyHeader">Choose course:</p> 
  <div style="float:left"></div>
    <?php

 foreach($categoryList as $course){
	 echo '<div class="courseDiv" style="float:left">';
	 echo '<a class="categoryHref" href="course?id='.$course['CourseId'].'">'.$course['CourseName'].'</a>'; 
	 echo '<p style="text-align:left">'.$course['CourseDesc'].'</p>';

	 echo '<p style="text-align:right"><a class="categoryHref"  href="course?id='.$course['CourseId'].'">INFO</a></p>';
	 	 if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){
	 echo '<a class="AdminControlButtons" style="margin-left:1%;" href="editCourse?id='.$course['CourseId'].'">Edit</a>';
	 echo '<a class="AdminControlButtonsRight" style="margin-left:1%;" href="deleteCourse?id='.$course['CourseId'].'">Delete</a>';
	   }}
	   
	 echo '</div>';
 
 }
 ?>

 
<div style="clear:both"></div>
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>