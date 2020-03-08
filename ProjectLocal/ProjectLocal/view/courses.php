   <?php
 ob_start();
 ?>
  <h2 class="bodyHeaderMain">Free Courses</h2>
  <?php
  if(isset($_SESSION['UserName'])){
	  if($_SESSION['PrivilegesId'] >= 2){
		echo '<a class="AdminControlButtons" style="margin-left: 10%" href="addCategory">New</a>';
	  }
  }
  ?>
  <p class="bodyHeader" style="font-size:1.3vw";>Select course category:</p> 
  
<div class="categoryDiv">  
  <?php
  
if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){
		
}}
 foreach($categor as $category){
	 
	 echo '<li style="list-style-type: none; margin: 30px; min-width: 200px;">';
	 echo '<a class="CourseUnitDiv" href="category?id='.$category['CategoryId'].'">'.$category['CategoryName'].'</a>';
	   if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){
		  
	 echo '<a class="AdminControlButtonsRight" style="margin-left:1%;" href="editCategory?id='.$category['CategoryId'].'"><b>Edit</b></a>';
	 echo '<a class="AdminControlButtons" style="margin-left:1%;" href="deleteCategory?id='.$category['CategoryId'].'"><b>Delete</b></a>';
	   }} 
	 
	 echo '</li>';
	 
 }
  
  ?>
 </div> 
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>