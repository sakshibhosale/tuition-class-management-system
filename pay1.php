<?php
include "connection.php";
$n=$_GET['n'];
$no=$_GET['no'];
$em=$_GET['em'];
$ey=$_GET['ey'];
$cv=$_GET['cvv'];
//$a=$_GET['at'];
//session_start();
//echo" TOTAL".$_SESSION['tot']."<br>";
//$x=$_SESSION['tot'];


	$s=pg_query("insert into pay(pname,cno,em,ey,cvv)values('$n','$no','$em','$ey','$cv');");
if(!$s)
{
echo"not saved";
}
else
{
echo"saved";
header("location:http://192.168.100.252/ty10/project/main1.html");
exit();

}

