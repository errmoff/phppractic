<?php $host = explode('?',$_SERVER['REQUEST_URI'])[0];
$num=substr_count($host, '/');
$path = explode('/', $host)[$num]; ?>
 
 <!DOCTYPE html>
 <html>
<head>
<link rel="stylesheet" href="css/style.css" />	
<title>RegisterCourses</title>
</head>

<meta http-equiv="content-script-type" content="text/javascript" />
<meta charset="utf-8" />
<body> 

<div class="nav"> <!--  Nav -->
 <ul>
 <li><a class="navBuutons" <?php if($path == ''){echo 'style="text-decoration:underline"';} ?> href="./">Home page</a></li>
 <li><a class="navBuutons" <?php if($path == 'courses'){echo 'style="text-decoration:underline"';} ?> href="courses">Categories</a></li>
 <li><a class="navBuutons" <?php if($path == 'contacts'){echo 'style="text-decoration:underline"';} ?> href="contacts">Contacts</a></li>
	 <?php
	 if(isset($_SESSION['UserName'])){
		 echo ' <li style="margin-left:4vw"><a class="navBuutons" href="logout">Log out</a></li>';
		 echo ' <li style="color:#B18322;"><a class="navBuutons" href="profile">My profile</a></li>';
		 echo '	<b class="navYouLogAs">You are logged in as: '.$_SESSION["UserName"].'</b> ';
		 // echo '<img width="50px" height="50px" src="images\'.$_SESSION["PrivilegesId"]." alt="'.$_SESSION["UserName"].'">';
	 }
	 else{
	 ?>
 
	<li style="margin-left:1vw"><a class="navBuutons" <?php if($path == 'logReg'){echo 'style="text-decoration:underline"';} ?> href="login">Authorization</a></li>
 
 <?php
 }
 ?>

 
 
 </ul>
 
</div> <!-- End nav -->
<div class="body">

<div class="content"> <!-- Content -->

<?php
if(isset($content)) echo $content;
?>

</div> <!-- End content -->
</div>
<div class="footer">
<b style="margin-right:10px;">Our phone: +37255560443</b><br>
<b style="margin-right:10px;">E-mail: fec@nnet.eu</b><br>
<b style="margin-right:10px;">2019 Free Education Courses  &copy; FEC</b>
</div>

 </body>
 </html>