<?php


session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'userregistration');
$name=$_post['user'];
$pass=$_post['passpord'];

$s'select * from usertable where name = "$name" ';

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if ($num==1){
	echo 'user name already taken'
	
}else{$reg='insert into usertable(name,passpord) values ("$name","$pass")';
	mysqli_query($con,$reg)}
	echo'registeration successflu!'
	

?>