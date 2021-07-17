<?php

//include("conm.php");
//echo $_GET['ID'];
//echo $_GET['n'];
//echo $_GET['c'];
//echo $_GET['e'];
//echo $_GET['p'];
//echo $_GET['ps'];
echo $_GET['Im'];


?>







<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>
<style>

</style>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">sign up</button>

<!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="Home.html" class="w3-button w3-bar-item">Home</a>
 
  
</nav>

<form action="" style="border:1px solid #ccc" method="post"  enctype='multipart/form-data'>
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to update an account.</p>
    <hr>
<label for="email"><b>Teacher ID</b></label>
    <input type="text" placeholder="Enter Name" name="ID" value="<?php echo $_GET['ID'];  ?>" required>
<label for="email"><b>Teacher Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" value="<?php echo $_GET['n'];  ?>" required>

<label for="email"><b>  City </b></label>
    <input type="text" placeholder="Enter City" name="City" value="<?php echo $_GET['c']; ?>" required>






    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_GET['e']; ?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" value="<?php echo $_GET['p']; ?>" required>

    <label for="psw_repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" value="<?php echo $_GET['ps']; ?>" ></br>
    
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="file"  name="uploadfile" value="<?php echo $_GET['Im']; ?>" >
    You have choosen:<?php echo $_GET['Im']; ?> 
   

    <div class="clearfix">
      
      <input type="submit"  name="submit1" class="signupbtn" value="Update" />
    </div>
  </div>
</form>


<?php
if($_POST['submit1']){
 $ID=   $_POST['ID'];
 $Name=   $_POST['Name'];
 $City=   $_POST['City'];
 $email=   $_POST['email'];
 $psw=   $_POST['psw'];
 $psw_repeat=$_POST['psw_repeat'];
$filename=$_FILES["uploadfile"][name];
$tempname=$_FILES["uploadfile"][tmp_name];
//$folder1="student/";
$folder="student/".$filename;
move_uploaded_file($tempname,$folder);





// $Im=$_GET['Im'];
 //$Im= $_POST['uploadfile'];  
    
   //echo "Button Pressed";
   $dbconnect = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try'); 
   $query1="UPDATE Faculties_accounts  SET NAME='$Name', Image='$folder',  City='$City' ,email=' $email',psw='$psw',psw_repeat='$psw_repeat' WHERE ID='$ID'";
    $data1=mysqli_query($dbconnect,$query1);
    
   if( $data1){  echo "Record Updated Successfully";
       
       
       
       ?>
       
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://webtgroup.online/pr1/sel.php">
<?php
   }
    else{echo "Record Not not not Updated Successfully";}
    
    
    }

else{
    
  echo "<font color='blue'>submit Button not Pressed"; 
   
   
 /*  $Name=   $_GET['Name'];
 $City=   $_GET['City'];
 $email=   $_GET['email'];
$psw=   $_GET['psw'];
 $psw_repeat=$_GET['psw_repeat'];
    
    
    
   $dbconnect = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try');
    $query1="UPDATE Faculties_accounts  SET  NAME='$Name', City='$City' ,email=' $email',psw='$psw',psw_repeat='$psw_repeat' WHERE ID=''";
    $data1=mysqli_query($dbconnect,$query1);
   
   if( $data1){  echo "Record Updated Successfully";}
   else{echo "Record Not not not Updated Successfully";} 
}

*/

?>




<?php
//<script lang="JavaScript">
    
    
   
  // function update(){
        
        
       //document.write( "Hello everyone"); 
        
    //   <?php
       
       
    //   $Name=   $_GET['Name'];
 //$City=   $_GET['City'];
//$email=   $_GET['email'];
// $psw=   $_GET['psw'];
 //$psw_repeat=$_GET['psw_repeat']; 
    
    
    
   //$dbconnect = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try');
    //$query1="UPDATE Faculties_accounts  SET  NAME='$Name', City='$City' ,email=' $email',psw='$psw',psw_repeat='$psw_repeat' WHERE ID=''";
 // $data1=mysqli_query($dbconnect,$query1);
    
  // if( $data1){  echo "Record Updated Successfully";}
   //else{echo "Record Not not not Updated Successfully";} 
       
       
        //}
       
       
      
      //  </script>
        
        
        
        
        
       
}
   



?>



</body>
</html>