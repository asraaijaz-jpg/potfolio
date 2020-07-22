<?php 
echo "<body style=\"box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); 
  transition:0.3s; height:300px; width:700px; line\">"; 
 
echo "<div style=\"float:left;\">"; 
$destination=""; 
$source=$_FILES['FileToUploads']['tmp_name']; 
$name=$_FILES["FileToUploads"]["name"]; 
$ext=substr($name,strlen($name)-3,strlen($name)); 
if($_FILES['FileToUploads']['size']>2222222){ 
    echo "Sorry your File is to Large."; 
   } 
else{ 
if($ext=='jpg' || $ext=='png' || $ext=='PNG' || $ext=='JPG'){ 
   $destination=$destination."mypic".$ext; 
 
   $root = getcwd(); 
   $flag= move_uploaded_file($source,$destination); 
   if($flag){ 
    echo "<img style=\"height=100px; width:200px; border-radius: 30%;\" src=\"mypic".$ext."\">"; 
   } 
   else{ 
    echo "Error"; 
   } 
   } 
else{ 
    echo "File Extension Does NOT Matched."; 
} 
} 
echo "</div>"; 
 
 
 
echo "<div style=\"float:left; margin-left:40px;\">"; 
echo "&nbsp;&nbsp;&nbsp;&nbsp;<h1 style=\"margingleft:50px;\">".$_POST['fname'].$_POST['lname']."</h1>"; 
echo "<p style=\"color:rgb(128,128,128);\">Sukkur Sindh,Pakistan<br/>"; 
echo $_POST['email']."<br>"; 
echo $_POST['dob']."<br>"; 
 
if($_POST['gender']=='female'){ 
echo $_POST['gender']."<br>"; 
} 
else if($_POST['gender']=='male') 
{ 
echo "<img style=\"width:21px; height:20px;\" src=\"male.png\">&nbsp;&nbsp;".$_POST['gender']."<br>"; 
} 
else{ 
    echo "Please select one of Them. Else we think you belong to another gender"; 
} 
