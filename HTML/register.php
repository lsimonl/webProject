<?php
include_once("functions/fileSystem.php"); 
include_once("functions/database.php"); 
if(empty($_POST)){ 
     exit("您提交的表单数据超过post_max_size的配置！<br/>"); 
} 
$password = $_POST['password']; 
$confirmPassword = $_POST['confirmPassword']; 
if($password!=$confirmPassword){ 
     exit("输入的密码和确认密码不相等！"); 
} 
$userName = $_POST['userName']; 
$domain = $_POST['domain']; 
$userName = $userName.$domain; 
//判断用户名是否占用
$userNameSQL = "select * from users where userName='$userName'"; 
getConnection(); 
$resultSet = mysql_query($userNameSQL); 
if(mysql_num_rows($resultSet)>0){ 
     closeConnection(); 
     exit("用户名已经被占用，请更换其他用户名！"); 

$registerSQL = "insert into users values(null,'$userName','$password','$sex', '$interests','$myPictureName','$remark')"; 
$message = upload($_FILES['myPicture'],"uploads"); 
if($message=="文件上传成功！"||$message=="没有选择上传附件！"){ 
     mysql_query($registerSQL); 
     $userID = mysql_insert_id(); 
     echo "用户信息成功注册！<br/><br/><br/>"; 
}else{ 
     exit($message); 
} 

//从数据库中提取用户注册信息 
$userSQL = "select * from users where user_id=$userID"; 
$userResult = mysql_query($userSQL); 
if($user = mysql_fetch_array($userResult)){ 
     echo "您注册的用户名为：".$user["userName"]."<br/><br/>"; 
     echo "您填写的登录密码为：".$user["password"]."<br/><br/>"
     

}else{ 
     exit("用户信息注册失败！"); 
} 
closeConnection(); 
?> 
