<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="projectvote";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if (!$conn) {
    die("Connection failed");
}
else 
{
$sql="CREATE TABLE votesignup(id int(100) NOT NULL AUTO_INCREMENT,name text(100) NOT NULL,email text(100) NOT NULL,contactno int(10) NOT NULL,password text(20) NOT NULL,PRIMARY KEY(id))";
if(!mysqli_query($conn,$sql))
{
die("Error in creation");
}
else
{
echo("success");
}
}
mysqli_close($conn);
?>