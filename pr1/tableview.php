<?php
 include("conm.php");
  
//   $dbhost = 'localhost:3036';
 //  $dbuser = 'root';
  // $dbpass = 'rootpassword';
   
//    include("menu.php"); 
   
  // $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  $dbconnect = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try');
   
   if(! $dbconnect ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql1 = 'SELECT Name, City, email,psw,psw_repeat FROM Faculties_accounts';
  mysql_select_db('Faculties_accounts');
   $retval = mysql_query( $sql1, $dbconnect );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "EMP ID :{$row['Name']}  <br> ".
         "EMP NAME : {$row['City']} <br> ".
         "EMP SALARY : {$row['email']} <br> ".
         "EMP SALARY : {$row['psw']} <br> ".
         "EMP SALARY : {$row['psw_repeat']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($dbconnect);
?>