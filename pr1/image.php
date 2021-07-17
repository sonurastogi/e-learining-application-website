<html>
<body>
    
    <form action='' method='post' enctype='multipart/form-data'>
        
        <input type='file' name="uploadfile" value=''/>
        <input type='submit' name="uploadfile" value='Upload File'/>
        
        
        
        
    </form>
    
    
    
</body>    
    
    
    
</html>
<?php

//echo $_FILES["uploadfile"];
//print_r($_FILES["uploadfile"]);
$filename=$_FILES["uploadfile"][name];
$tempname=$_FILES["uploadfile"][tmp_name];
$folder="student/".$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='100' width='100'/>"; 
?>