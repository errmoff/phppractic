       <?php
 if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){

echo '<p style="margin-left: 5%; text-decoration: none; cursor:pointer" ><a class="AdminControlButtons"  onclick="history.back()">Previous</a></p>';

echo '<form class="registerForm" style="text-align:center" method="POST" action="addCourseResult?id='.$id.'">';
 ?>
 <h2 style="font-size:1.4vw; text-align:center" class="bodyHeaderMain">Add course</h2>
 
 
 <p style="float:none">Course name:</p> <input  style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Course name" name="CourseName" required>
 <p style="float:none">Course description:</p> <textarea style="text-align:center;float:none;width:50%;margin-left:10%;" class="inputLogReg" type="text" placeholder="Course description" name="CourseDesc" required></textarea>
 <p style="float:none">Course time:</p> <input  style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Course time" name="CourseTime" required>
 <p style="float:none">Date:</p> <input  style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Date" name="CourseDate" required>
 <p style="float:none">Language:</p> <input  style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Language" name="CourseLanguage" required>
 <p style="float:none">Place/Adress:</p> <input  style="text-align:center;float:none;width:50%;margin-left:10%" class="inputLogReg" type="text" placeholder="Adress" name="CoursePlace" required>

 

 <p style="text-align:center;"><input class="logRegButton" type="submit" name="addCourse" value="Add"></p>
 

 </form>
 
 
 
 
 
      <?php
	 } else {
	 echo '<p class="correctLogin">You dont have enough permissions!</p>';
	 echo '<p style="text-align:center;"><a href="courses" class="AdminControlButtons">Back</a></p>';
	 }
 }
 else {
	 echo '<p class="correctLogin">You are not logged in!</p>';
	 echo '<p style="text-align:center;"><a href="logReg" class="AdminControlButtons">Log in</a></p>';
 }
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>