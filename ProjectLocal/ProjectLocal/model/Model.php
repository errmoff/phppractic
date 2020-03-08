<?php


class Model{

	public static function getCategoryList(){
	$sql = "SELECT * FROM `categories` ORDER BY `categories`.`CategoryName` ASC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;	
	}	
	
	public static function getUsersList(){
	$sql = "SELECT * FROM `users`";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;	
	}
	
	
	public static function getCoursesList($id){
	$sql = "SELECT course.*, categories.* FROM `course`,`categories` WHERE course.CategoryId = categories.CategoryId AND categories.CategoryId=".$id." ORDER BY `CourseName` DESC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
		
	}	
	
	public static function getCommentsList($id){
	$sql = "SELECT * FROM comments WHERE CourseId=".$id." ORDER BY `CommentDate` DESC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
		
	}
	
	public static function getCourseDetail($id){
	$sql = "SELECT course.*, categories.* FROM `course`,categories WHERE course.CategoryId = categories.CategoryId AND course.CourseId=".$id;
	$db=new database();
	$row=$db->getOne($sql);
	return $row;
		
		
	}	
	
	
		
	public static function getUserCoursesList($id){
	$sql = "SELECT usercourses.*, course.* FROM `usercourses`,course WHERE course.CourseId = usercourses.CourseId AND course.CourseId=".$id;
	$db=new database();
	$row=$db->getOne($sql);
	return $row;
		
		
	}	
	
	
	
	public static function getCategory($id){
	$sql = "SELECT * FROM categories WHERE CategoryId=".$id;
	$db=new database();
	$row=$db->getOne($sql);
	return $row;
		
		
	}
	
	public static function LoginResult(){
		$result =false;
		
		$username=$_POST['UserName'];
		$password=$_POST['UserPass'];
		
		$sql="SELECT * FROM `users` WHERE `UserName` = '$username' AND UserPass = '$password'";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		$_SESSION["UserEmail"]=$item['UserEmail'];
		$_SESSION["UserName"]=$item['UserName'];
		$_SESSION["PrivilegesId"]=$item['PrivilegesId'];
		$_SESSION["UserFirstName"]=$item['FirstName'];
		$_SESSION["UserSecondName"]=$item['SecondName'];
		$_SESSION["UserNumber"]=$item['UserNumber'];
		$_SESSION["UserId"]=$item['UserId'];
		
		}
		
		
		return $result;
		
		
	}

	public static function RegisterResult(){
		$result =false;
		
		$username=$_POST['UserName'];
		$password=$_POST['UserPass'];
		$Name=$_POST['UserFirstName'];
		$Surname=$_POST['UserSecondName'];
		$Number=$_POST['UserNumber'];
		$Email=$_POST['UserEmail'];

		$sql="INSERT INTO `users` (`UserId`, `UserName`, `UserEmail`, `UserPass`, `PrivilegesId`, `FirstName`, `SecondName`, `UserNumber`) VALUES (NULL, '$username', '$Email', '$password', '1', '$Name', '$Surname', '$Number');";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;

		
	}
	
	
	
	
	
	
	public static function Logout(){
		unset($_SESSION['UserEmail']);
		unset($_SESSION['UserName']);
		unset($_SESSION['UserPass']);
		session_destroy();
		
	}
	
	
	public static function ProfileInfo($id){
	$sql="SELECT * FROM `users` WHERE UserId =$id";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
	
}

	public static function ProfileEdit($id){
		$sql="SELECT * FROM `users` WHERE `UserId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		
		$Name=$_POST['FirstName'];
		$Surname=$_POST['SecondName'];
		$Number=$_POST['UserNumber'];
		$Email=$_POST['UserEmail'];
		if($id != $_SESSION['UserId']){
		$PrivilegesId=$_POST['PrivilegesId'];

		$sql="UPDATE `users` SET `FirstName` = '$Name' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `SecondName` = '$Surname' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserNumber` = '$Number' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserEmail` = '$Email' WHERE `UserId` = $id;"
		."UPDATE `users` SET `PrivilegesId` = $PrivilegesId WHERE `UserId` = $id";
		}else{
		$sql="UPDATE `users` SET `FirstName` = '$Name' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `SecondName` = '$Surname' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserNumber` = '$Number' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserEmail` = '$Email' WHERE `UserId` = $id;";}
		
		$item = $db->executeRun($sql);
		return $row;
		
	}
	
	public static function EditCategory($id){
		$sql="SELECT * FROM categories WHERE CategoryId=".$id;
		$db=new database();
		$row = $db->getOne($sql);
		
		$CategoryName=$_POST['CategoryName'];


	
		
		$sql="UPDATE `categories` SET `CategoryName` = '".$CategoryName."' WHERE `CategoryId` = $id;" ;
		$item = $db->executeRun($sql);
		return $row;
		
	}
	
		public static function EditCourse($id){
		$sql="SELECT * FROM courses WHERE CourseId=".$id;
		$db=new database();
		$row = $db->getOne($sql);
		
		$CourseName=$_POST['CourseName'];
		$CourseDesc=$_POST['CourseDesc'];
		$CourseTime=$_POST['CourseTime'];
		$CourseDate=$_POST['CourseDate'];
		$CourseLanguage=$_POST['CourseLanguage'];
		$CoursePlace=$_POST['CoursePlace'];
		$CoursePrice=$_POST['CoursePrice'];


	
		
		$sql="UPDATE `course` SET `CourseName` = '".$CourseName."' WHERE `CourseId` = $id;" 
		."UPDATE `course` SET `CourseDesc` = '".$CourseDesc."' WHERE `CourseId` = $id;" 
		."UPDATE `course` SET `CourseTime` = '".$CourseTime."' WHERE `CourseId` = $id;" 
		."UPDATE `course` SET `CourseDate` = '".$CourseDate."' WHERE `CourseId` = $id;" 
		."UPDATE `course` SET `CourseLanguage` = '".$CourseLanguage."' WHERE `CourseId` = $id;" 
		."UPDATE `course` SET `CoursePlace` = '".$CoursePlace."' WHERE `CourseId` = $id;" 
		."UPDATE `course` SET `CoursePrice` = '".$CoursePrice."' WHERE `CourseId` = $id";
		$item = $db->executeRun($sql);
		return $row;
		
	}
	
	public static function AddCategoryResult(){
		
		$result =false;
		
		$CategoryName=$_POST['CategoryName'];


		$sql="INSERT INTO `categories` (`CategoryId`, `CategoryName`) VALUES (NULL, '$CategoryName');";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;
		
		
	}	
	
	public static function AddCourseResult($id){
		
		$result =false;
		
		$CourseName=$_POST['CourseName'];
		$CourseDesc=$_POST['CourseDesc'];
		$CourseTime=$_POST['CourseTime'];
		$CourseDate=$_POST['CourseDate'];
		$CourseLanguage=$_POST['CourseLanguage'];
		$CoursePlace=$_POST['CoursePlace'];
		$CoursePrice=$_POST['CoursePrice'];


		$sql="INSERT INTO `course` (`CourseId`, `CategoryId`, `CourseName`, `CourseDesc`, `CourseTime`, `CourseDate`, `CourseLanguage`, `CoursePlace`, `CoursePrice`) VALUES (NULL, '$id', '$CourseName', '$CourseDesc', '$CourseTime', '$CourseDate', '$CourseLanguage', '$CoursePlace', '$CoursePrice');";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;
		
		
	}
	
	
	
	public static function DelCategory($id){
		

		$sql="SELECT * FROM `categories` WHERE `CategoryId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		$sql="DELETE FROM `course` WHERE `CategoryId` = $id";
		$sql1="DELETE FROM `categories` WHERE `CategoryId` = $id";
		$item = $db->executeRun($sql);
		$item1 = $db->executeRun($sql1);
		return;
		
	}	
	public static function DelCourse($id){
		

		$sql="SELECT * FROM `course` WHERE `CourseId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		$sql="DELETE FROM usercourses  WHERE `CourseId` = $id";
		$sql1="DELETE FROM course  WHERE `CourseId` = $id";
		$item = $db->executeRun($sql);
		$item1 = $db->executeRun($sql1);
		return;
		
	}
	
	public static function UserAddCourse($id){
		$result =false;
		
		$UserId=$_SESSION['UserId'];


		$sql="INSERT INTO `usercourses` (`UserId`, `CourseId`, `CourseRegisterDate`) VALUES ('$UserId', '$id', NOW());";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;
		
		
		
	}
	
	
	public static function GetMyCourses($id){
	$sql = "SELECT course.*, usercourses.* FROM `course`,`usercourses` WHERE course.CourseId = usercourses.CourseId AND usercourses.UserId=".$id." ORDER BY `CourseName` DESC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
		
		
		
	}

	
	
	public static function CourseEnd($id){
		
		$sql="SELECT * FROM courses WHERE CourseId=".$id;
		$db=new database();
		$row = $db->getOne($sql);

		$sql="UPDATE `course` SET `StatusId` = 2 WHERE `CourseId` = $id;";
		$item = $db->executeRun($sql);
		return $row;
		
	
	}
	
	public static function DeleteProfile($id){

		$sql="SELECT * FROM `users` WHERE `UserId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		$sql="DELETE FROM `users` WHERE `UserId` = $id";
		$item = $db->executeRun($sql);
		return;
		
		
		
		
	}
	
	public static function DeleteComment($comId){

		$sql="SELECT * FROM `comments` WHERE `CommentId` = $comId";
		$db=new database();
		$row = $db->getOne($sql);
		$sql="DELETE FROM `comments` WHERE `CommentId` = $comId";
		$item = $db->executeRun($sql);
		return;
		
		
		
		
	}
	public static function AddComment($id){
		$result =false;
		
		$Comment=$_POST['Comment'];
		$UserId=$_SESSION['UserId'];


		$sql="INSERT INTO `comments` (`UserId`, `CourseId`, `Comment`, `CommentDate`, `CommentId`) VALUES ('$UserId', '$id', '$Comment', NOW(), NULL);";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;
		
	}

	
	
	
}//class


