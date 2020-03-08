       <?php
 if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){



echo '<form class="registerForm" style="text-align:center" method="POST" action="editCourseResult?id='.$id.'">';
 
?>
 <h2 style="font-size:1.4vw; text-align:center" class="bodyHeaderMain">Course editor</h2>
 
 
 <p style="float:none">Course name:</p> <input <?php echo 'value="'.$course['CourseName'].'"' ?> style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Course name" name="CourseName" required>
 <p style="float:none">Desc:</p> <textarea  style="text-align:center;float:none;width:50%;margin-left:10%;" class="inputLogReg" type="text" placeholder="Desc" name="CourseDesc" required><?php echo $course['CourseDesc'] ?></textarea>
 <p style="float:none">Course length:</p> <input <?php echo 'value="'.$course['CourseTime'].'"' ?> style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Length" name="CourseTime" required>
 <p style="float:none">Date:</p> <input <?php echo 'value="'.$course['CourseDate'].'"' ?> style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Date" name="CourseDate" required>
 <p style="float:none">Language:</p> <input <?php echo 'value="'.$course['CourseLanguage'].'"' ?> style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Language" name="CourseLanguage" required>
 <p style="float:none">Adress:</p> <input <?php echo 'value="'.$course['CoursePlace'].'"' ?> style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Adress" name="CoursePlace" required>

 

 <p style="text-align:center;"><input class="logRegButton" type="submit" name="editCourse" value="Edit"></p>
 

 </form>
   <p style=" cursor:pointer; margin-left: 645px; margin-top: -20px;"><a class="logRegButton"  onclick="history.back()">Back</a></p>
 
 
 
      <?php
		  
	 } else {
	 echo '<p class="correctLogin">You dont have enough permissions!</p>';
	 echo '<p style="text-align:center;"><a href="courses" class="backToLogin">Back</a></p>';
	 }
 }
 else {
	 echo '<p class="correctLogin">You didnt come in!</p>';
	 echo '<p style="text-align:center;"><a href="login" class="backToLogin">Log in</a></p>';
 }
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>