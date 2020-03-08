<?php 


class Controller{
	public static function StartSite(){
		include_once 'view/start.php';
		
	}
	
	public static function AboutUs(){
		include_once 'view/aboutUs.php';
	}
	
	public static function Courses(){
		$categor=Model::getCategoryList();
		include_once 'view/courses.php';
	}
	
	public static function Contacts(){
		include_once 'view/contacts.php';
	}
	
	public static function Login(){
		include_once 'view/login.php';
	}
	public static function Reg(){
		include_once 'view/Reg.php';
	}
	
	public static function CoursesList($id){;
	$categoryList=Model::getCoursesList($id);
	include_once 'view/coursesList.php';	
		
	}
		

	
	public static function CoursesDetail($id){
	$course=Model::getCourseDetail($id);
	$status=Model::getUserCoursesList($id);
	$commentsList=Model::getCommentsList($id);
	$usersList=Model::getUsersList();
	include_once 'view/courseDetail.php';	
	}
	
	public static function LoginResult(){
		$result = Model::LoginResult();
		header('Location: CorrectLogin');
		
		
	}
	
	public static function MyProfile($id){
		$profile=Model::ProfileInfo($id);
		include_once 'view/myProfile.php';
		
	}
	
	
	public static function RegisterResult(){
		$result = Model::RegisterResult();
		header('Location: profile');
		
	}
	

	public static function DelCategory($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DelCategory($id);
		}
		header('Location:courses');
		
	}
	
	public static function DelCourse($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DelCourse($id);
	
		}
		header('Location:courses');
		
	}
	
	
	public static function Logout(){
		$result = Model::Logout();
		header('Location: ./');
		} 
	
	public static function CorrectLogin(){
		
		include_once 'view/CorrectLogin.php';
	}
		
	public static function CorrectRegister(){
		$result= Model::getUsersList();
		include_once 'view/CorrectRegister.php';
	}
	
	public static function Profile(){
		
		include_once 'view/profile.php';
	}
	
	public static function Politics(){
	include_once 'view/politics.php';
	}
	
		
		public static function ProfileEditForm($id){
		$profile=Model::ProfileInfo($id);
		include_once 'view/profileEdit.php';
			
		}
		public static function ProfileEditResult($id){
		$result=Model::ProfileEdit($id);
		include_once 'view/profile.php';
		}	
		
		public static function EditCategory($id){
		$category=Model::getCategory($id);
		include_once 'view/editCategory.php';
			
		}
		
	
		public static function EditCategoryResult($id){
		$result=Model::EditCategory($id);
		header('Location:courses');
		}		
		
		
		public static function EditCourse($id){
		$course=Model::getCourseDetail($id);
		include_once 'view/editCourse.php';
			
		}
		
		public static function EditCourseResult($id){
		$result=Model::EditCourse($id);
		header('Location:course?id='.$id.'');
		}
	
	
	
		public static function AddCategory(){
		include_once 'view/addCategory.php';
		}	
		
		public static function AddCategoryResult(){
		$result = Model::AddCategoryResult();
		header('Location:courses');

	}
	
		
		public static function AddCourse($id){
		include_once 'view/addCourse.php';
		}
		
		public static function AddCourseResult($id){
		$result = Model::AddCourseResult($id);
		
		header('Location:category?id='.$id.'');
	}
	
		public static function UserAddCourse($id){
		$result = Model::UserAddCourse($id);
		$UserId = $_SESSION['UserId'];
		header('Location:myCourses?id='.$UserId.'');
	}
	
	public static function MyCourses($id){
	$myCourses = Model::GetMyCourses($id);
	include_once 'view/myCourses.php';
	}
	
	public static function CourseEnd($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result=Model::CourseEnd($id);
		}
		header('Location:courses');
	}
	
		
	public static function AdminMenu(){
		$UserList=Model::getUsersList();
		include_once 'view/adminMenu.php';
	}
	
	public static function addUserForm(){
		
		include_once 'view/addUser.php';
	}
		
	public static function DeleteProfile($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DeleteProfile($id);
		}
		header('Location:adminMenu');
	}
	
	public static function DeleteComment($comId, $id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DeleteComment($comId);
		}
		header('Location:course?id='.$id.'');
	}
		public static function AddComment($id){
		if($_SESSION['PrivilegesId'] >= 1){
		$result = Model::AddComment($id);
			}
		header('Location:course?id='.$id.'');
	}
	
	public static function error404(){
		
		include_once 'view/error404.php';

	}
	

	

}//class