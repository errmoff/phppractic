   <?php
 ob_start();
 
 echo '<h2 class="bodyHeaderMain">Info about</h2>';

 
 echo '<div class="courseDetailDiv">';
 echo '<p style="text-align:center">'.$course['CourseName'].'</p>';
 
 echo '<p>'.$course['CourseDesc'].'</p>';
 echo '<p>The length of the course: '.$course['CourseTime'].'</p>';
 echo '<p>Date: '.$course['CourseDate'].'</p>';
 echo '<p>Language: '.$course['CourseLanguage'].'</p>';
 echo '<p>Adress: '.$course['CoursePlace'].'</p>';
 echo '<p>Price: '.$course['CoursePrice'].'</p>';
 
 
  if(isset($_SESSION['UserName'])){
	  if($course['StatusId'] == 1){
		  if($status['UserId'] != $_SESSION['UserId']){
 echo '<p style="text-align:center"><a class="categoryHref" href="userAddCourse?id='.$id.'">Sign up for a course</a></p>';
		  }else{
			  echo '<p style="text-align:center">You are already enrolled in this course</p>';
				
		  }
		  
  if($_SESSION['PrivilegesId'] >= 2){
	 echo '<p style="text-align:center"><a href="courseEnd?id='.$id.'" class="categoryHref">Complete course</a></p>';
	 
 }
	  }elseif($course['StatusId'] == 2) {
	 echo '<p style="text-align:center">The course is completed</p>';
	  }else{
		  echo '<p style="text-align:center">You left this course</p>';
		  }
	  

  }

  
  echo '</div>';
  echo '<p style="cursor:pointer; margin-right: 5%;"><a class="inputAdminMenu" onclick="history.back()">Back</a></p><br><br>';
  

 if($course['StatusId'] >= 2) {
	 echo '<br>';
	 echo '<p class="bodyHeader">Comments:</p>';

if(isset($_SESSION['UserName'])){
echo '<form class="registerForm" style="text-align:center" method="POST" action="addComment?id='.$id.'">';
 
 echo '<h2 style="font-size:1.4vw; text-align:center" class="bodyHeaderMain">Make a feedback</h2>';
 
 
echo  '<p style="float:none">Your comment:</p> <textarea style="text-align:center;float:none;width:50%;margin-left:10%;max-width:80%;" class="inputLogReg" type="text" placeholder="feedback" name="Comment" required></textarea>';

 

echo  '<p style="text-align:center;"><input class="logRegButton" type="submit" name="addComment" value="Add"></p>';
 

 echo '</form>';
}
 if($commentsList == NULL){
	 echo '<p class="bodyHeader">No comments!</p>';
 }
 
elseif($commentsList != NULL){
	echo '<h2 style="text-align: center; margin: 5px;">Latest commentaries</h2>';
	 foreach($commentsList as $comm){
		 foreach($usersList as $user){
			if($user['UserId'] == $comm['UserId']){
				echo '<h3 style="text-align: left; margin-left: 20px;">'.$comm['CommentDate'].'</h3>';
				echo '<div class="commentDiv">';
						echo '<p style="float:left">'.$user['FirstName'].' '.$user['SecondName'].'</p>';
						echo '<p style="float:none;clear:both;text-align:center">'.$comm['Comment'].'</p>';
						echo '<p style="float:left">'.$user['UserEmail'].'</p>';
						 if(isset($_SESSION['UserName'])){
						 if($_SESSION['PrivilegesId'] >= 2){
							
							echo '<p style="text-align:center;float:right; margin-right: 20px; margin-top: 60px;"><a class="AdminControlButtons"  href="deleteComment?comId='.$comm['CommentId'].'&&id='.$id.'">Delete</a></p>';
						
						  }}
						  echo '<p style="float:none; clear:both"> </p>';
				echo '</div>';
				

			}
		 }
	 }
 
 }
 }

 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>