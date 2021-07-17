<?php

//require('conm.php');



$Name = $_POST['user'];
$pass = $_POST['pass'];
$email= $_POST['email'];

//$email=$_POST['email'];
//$psw=$_POST['cpa'];
//$psw_repeat=$_POST['psw_repeat'];

//$filename=$_FILES["uploadfile"][name];
//$tempname=$_FILES["uploadfile"][tmp_name];
//$folder="student/".$filename;
//echo $folder;
//move_uploaded_file($tempname,$folder);
//echo "<img src='$folder' height='100' width='100'/>"; 
$dbconnect = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try');
//$sql = "insert into Faculties_accounts(Name,City,email,psw,psw_repeat) values ('$Name','$City','$email','$psw','$psw_repeat')";
$sql = "insert into test1(Name,Password,email) values ('$Name','$pass','$email')";

$run = mysqli_query($dbconnect,$sql);
$total=mysqli_num_rows($run);

//192.168.0.100





if($run  == true)
{
echo "Registration Successfull";


}
else
{
echo "DATA IS NOT INSERTED";
echo $Name;
echo $pass;
echo $email;
}

	

?>