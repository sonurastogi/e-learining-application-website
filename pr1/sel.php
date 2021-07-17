<style>

  body {
  background-color: lightblue;
}
    
    th{
        
   padding:20px;
   color:grey;
        
    }
    
   #ss{color:violet;}
    
    .gg{
        color:blue;
    }
</style>


<?php

require('conm.php');

//$con = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try');
$con=$dbconnect;
function show(){

global $con;

//echo $result['Image'];

$query="SELECT * FROM `Faculties_accounts`";
$run = mysqli_query($con,$query);
$total=mysqli_num_rows($run);
//$result=mysqli_fetch_assoc($run);


if($total!=0){
    echo"Total Accounts are".$total;
    ?>
    
    <table>
       <tr >
           <th id="ss">Faculty ID</th>
           <th>Image</th>
           <th>Name</th>
           <th>City</th>
           <th>email</th>
           <th>psw</th>
           <th>psw_repeat</th>
           <th colspan="2">Operations</th>
            </tr> 
        
      
    
    
    
    <?php
    
   // $a=5;
   
    while($result=mysqli_fetch_assoc($run)){
   //do{
   //while($result){
     $Image2= $result['Image'];
      echo"<tr><td >".$result['ID']."</td>
           <td><img src='".$result['Image']."' width='100' height='100' /></td>
         
           <td>".$result['Name']."</td>
           <td>".$result['City']."</td>
           <td>".$result['email']."</td>
           <td>".$result['psw']."</td>
           <td>".$result['psw_repeat']."</td>
           <td><a href='update.php?ID=$result[ID]&n=$result[Name]&c=$result[City]&e=$result[email]&p=$result[psw]&ps=$result[psw_repeat]&Im= $Image2'>Edit</a> </td>
           <td><a href='delete.php?ID=$result[ID]' onclick='return check()'>Delete</a></td>
           
            </tr> ";
      
    } // while($result=mysqli_fetch_assoc($run));                   
    
    
  /*    while($run){
      <td><img src='".$result['Image']."' width='100' height='100' /></td>
      echo"<tr><td>".$run['ID']."</td>
           <td><img src='".$run['Image']."' width='100' height='100' /></td>
         
           <td>".$run['Name']."</td>
           <td>".$run['City']."</td>
           <td>".$run['email']."</td>
           <td>".$run['psw']."</td>
           <td>".$run['psw_repeat']."</td>
           <td><a href='update.php?ID=$result[ID]&n=$result[Name]&c=$result[City]&e=$result[email]&p=$result[psw]&ps=$result[psw_repeat]&Im=$result[Image]'>Edit</a> </td>
           <td><a href='delete.php?ID=$result[ID]' onclick='return check()'>Delete</a></td>
           
            </tr> ";
      
    }
     */

//while($data= mysqli_fetch_assoc($run)){

//echo "<pre>";
//print_r($data);

//foreach($data as $key=>$key_val){
 //   echo $key.":".$key_val."<br>";
//}
//echo "<br><br><br>";
//}
}
else{
echo " fail";}
    
    
}//    Close for show function in which we have written the code...
 // echo $result['Name']."".$result['City']."".$result['email']."".$result['psw']."".$result['psw_repeat']."<br/><br/><br/>";
?>



<script>
    
    
    function check(){
       return confirm('Are You Sure YOu want to delete this data???');
    }
</script>

</table>
    






<html>
<head><title>Test</title> </head>
<body>

<?php  show();   ?>


</body>
</html>