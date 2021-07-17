<?php

require('conm.php');



$Name = $_POST['Name'];
$City = $_POST['City'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$psw_repeat=$_POST['psw_repeat'];

$filename=$_FILES["uploadfile"][name];
$tempname=$_FILES["uploadfile"][tmp_name];
$folder="student/".$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);
//echo "<img src='$folder' height='100' width='100'/>"; 
//$dbconnect = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try');
//$sql = "insert into Faculties_accounts(Name,City,email,psw,psw_repeat) values ('$Name','$City','$email','$psw','$psw_repeat')";
$sql = "insert into Faculties_accounts(Name,Image,City,email,psw,psw_repeat) values ('$Name','$folder','$City','$email','$psw','$psw_repeat')";

$run = mysqli_query($dbconnect,$sql);
$total=mysqli_num_rows($run);

//192.168.0.100





if($run  == true)
{
echo "DATA INSERTED SUCCESSFULLY  IN  THE   TABLE";
?>

<META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://webt.tech/pr1/home1.html">

<?php
}
else
{
echo "DATA IS NOT INSERTED";
}

	

?>