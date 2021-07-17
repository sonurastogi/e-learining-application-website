<?php
//include('conm.php');

$ID=$_GET['ID'];
$dbconnect = mysqli_connect('127.0.0.2','webttech','9Ejc3e0o2E','webttech_try');

$query2="DELETE FROM Faculties_accounts WHERE ID='$ID'";
$data1=mysqli_query($dbconnect,$query2);

if($data1){
echo "<font color='green'> Record Deleted from the Table";
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://webtgroup.online/pr1/sel.php">

<?php
}

else{  echo "<font color='green'> Record Deleted from the Table Failed Failed Failed";


}

?>