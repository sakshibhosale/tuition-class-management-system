<?php
include "connection.php";
$n=$_GET['t1'];
$c=$_GET['c'];
$g=$_GET['g'];
$cn=$_GET['t3'];
$a=$_GET['t4'];
$dob=$_GET['t5'];
$email=$_GET['t6'];
$sc_name=$_GET['t7'];
$b_name=$_GET['t8'];
$wut=$_GET['t9'];

setcookie("t1",$n);
echo "NAME".$_COOKIE["t1"];

$s= "INSERT INTO studentt(sname,class,gender,contactno,addr,dob,email,scname,board,wut)values('$n','$c','$g','$cn','$a','$dob','$email','$sc_name','$b_name','$wut');";
$z=pg_query($s);
if(!$z)
{
	echo"failed";
}
else
{
	echo"saved";
	// header('Location:http://192.168.100.252/ty10/project/subject.php');
     exit();

}
/*
$sc="insert into school()values()";
$y=pg_query($sc);
if(!$y)
{
	echo"failed";
}
else
{
	echo"saved";
	
}
/*
$l="insert into login(username,password)values('$uname','$pwd')";
$x=pg_query($l);
if(!$x)
{
	echo"failed";
}
else
{
	echo"saved";
} 

 header('Location:http://192.168.100.252/ty10/project/s_subject.html');
     exit();
*/?>
