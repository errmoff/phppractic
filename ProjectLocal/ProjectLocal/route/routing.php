<?php

$host = explode('?',$_SERVER['REQUEST_URI'])[0];
$num=substr_count($host, '/');
$path = explode('/', $host)[$num];

if($path == '' OR $path == 'index.php')
{
	$response = Controller::StartSite();
}
elseif($path == 'aboutUs'){
	$response = controller::AboutUs();
}

elseif($path == 'courses'){
	$response = controller::Courses();
	
}
elseif($path=='category' && isset($_GET['id'])){
	$response = controller::CoursesList($_GET['id']);
}

elseif($path=='course' && isset($_GET['id'])){
	$response = controller::CoursesDetail($_GET['id']);
}

elseif($path == 'contacts'){
	$response = controller::Contacts();
}


elseif($path == 'login'){
	$response = controller::Login();
}
elseif($path == 'reg'){
	$response = controller::reg();
}


elseif($path=='loginResult'){
	$response = Controller::LoginResult();

}	

elseif($path =='CorrectLogin'){
	$response = Controller::CorrectLogin();
}elseif($path =='CorrectRegister'){
	$response = Controller::CorrectRegister();
}

elseif($path == 'profile'){
	$response = Controller::Profile();
	
}

elseif($path=='registerResult'){
$response = Controller::RegisterResult();	
}
	
elseif($path=='logout'){
	$response = Controller::Logout();
	
}

elseif($path=='politics'){
	$response = Controller::Politics();
}

elseif($path=='MyProfile' && isset($_GET['id'])){
	$response = Controller::MyProfile($_GET['id']);
}

elseif($path=='ProfileEdit' && isset($_GET['id'])){
$response = Controller::ProfileEditForm($_GET['id']);

}
	
elseif($path=='ProfileEditResult' && isset($_GET['id'])){
	$response = Controller::ProfileEditResult($_GET['id']);

}
	

elseif($path=='editCategory' && isset($_GET['id'])){
	$response = Controller::EditCategory($_GET['id']);

}

	elseif($path=='editCategoryResult' && isset($_GET['id'])){
	$response = Controller::EditCategoryResult($_GET['id']);

}
	
	
elseif($path=='editCourse' && isset($_GET['id'])){
	$response = Controller::EditCourse($_GET['id']);

}

	elseif($path=='editCourseResult' && isset($_GET['id'])){
	$response = Controller::EditCourseResult($_GET['id']);

}
	
elseif($path=='addCategory'){
	$response = Controller::AddCategory();
}
	elseif($path=='editCategoryResult' && isset($_GET['id'])){
	$response = Controller::EditCategoryResult($_GET['id']);

}
	
elseif($path=='addCourse' && isset($_GET['id'])){
	$response = Controller::AddCourse($_GET['id']);
}

elseif($path=='addCategoryResult'){
	$response = Controller::AddCategoryResult();
}

elseif($path=='addCourseResult' && isset($_GET['id'])){
	$response = Controller::AddCourseResult($_GET['id']);
}

elseif($path=='deleteCategory' && isset($_GET['id'])){
	$response = Controller::DelCategory($_GET['id']);
}

elseif($path=='deleteCourse' && isset($_GET['id'])){
	$response = Controller::DelCourse($_GET['id']);
}

elseif($path=='userAddCourse' && isset($_GET['id'])){
	$response = Controller::UserAddCourse($_GET['id']);
}

elseif($path=='myCourses' && isset($_GET['id'])){
	$response = Controller::MyCourses($_GET['id']);
}
elseif($path=='courseEnd' && isset($_GET['id'])){
	$response = Controller::CourseEnd($_GET['id']);
}

elseif($path=='adminMenu'){
	$response = Controller::AdminMenu();
	
}

elseif($path=='addUser'){
	$response = Controller::addUserForm();
}

elseif($path=='deleteProfile' && isset($_GET['id'])){
	$response = Controller::DeleteProfile($_GET['id']);
}

elseif($path=='deleteComment' && isset($_GET['comId']) && isset($_GET['id'])){
	$response = Controller::DeleteComment($_GET['comId'], $_GET['id']);
	
}

elseif($path=='addComment' && isset($_GET['id'])){
	$response = Controller::AddComment($_GET['id']);
}

else {
	$response = Controller::error404();
}
?>
