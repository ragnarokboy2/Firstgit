<?php
require('connection.php');
?>

<?php
if(isset($_GET['q'])){
$a=$_GET['q'];
}
else {
header('refresh:5,url=index.html');
}
if(isset($_GET['searchtype'])){
$type1=$_GET['searchtype'];
}
else {
header('refresh:5,url=index.html');
}

if($type1=="Web Search"){
$link="https://www.google.com/search?q=$a";
$sql1="select * from searchdetails where keyword='$a'";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result,MYSQL_ASSOC);
$b=$row['searchcount'];
if (mysqli_num_rows($result)==1)
{
$d=$b+1;
$sql2="update searchdetails set searchcount='$d' where keyword='$a'";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.com/search?q=$a"); } 
}
else {
$sql2="INSERT INTO searchdetails (keyword,searchcount) VALUES ('$a','1')";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.com/search?q=$a"); } 
}
}
else if($type1=="Video Search")
{
$link="http://www.youtube.com/results?search_query=$a";
$sql1="select * from videosearchdetails where keyword='$a'";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result,MYSQL_ASSOC);
$b=$row['searchcount'];
if (mysqli_num_rows($result)==1)
{
$d=$b+1;
$sql2="update videosearchdetails set searchcount='$d' where keyword='$a'";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:http://www.youtube.com/results?search_query=$a"); } 
}
else {
$sql2="INSERT INTO videosearchdetails (keyword,searchcount) VALUES ('$a','1')";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:http://www.youtube.com/results?search_query=$a"); } 
}
}
else if($type1=="Image Search")
{
$link="https://www.google.com/images?q=$a";
$sql1="select * from imagesearchdetails where keyword='$a'";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result,MYSQL_ASSOC);
$b=$row['searchcount'];
if (mysqli_num_rows($result)==1)
{
$d=$b+1;
$sql2="update imagesearchdetails set searchcount='$d' where keyword='$a'";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.com/images?q=$a"); } 
}
else {
$sql2="INSERT INTO imagesearchdetails (keyword,searchcount) VALUES ('$a','1')";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.com/images?q=$a"); } 
}
}
else if($type1=="Map Search")
{
$link="https://www.google.co.in/maps/place/$a";
$sql1="select * from mapsearchdetails where keyword='$a'";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result,MYSQL_ASSOC);
$b=$row['searchcount'];
if (mysqli_num_rows($result)==1)
{
$d=$b+1;
$sql2="update mapsearchdetails set searchcount='$d' where keyword='$a'";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.co.in/maps/place/$a"); } 
}
else {
$sql2="INSERT INTO mapsearchdetails (keyword,searchcount) VALUES ('$a','1')";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.co.in/maps/place/$a"); } 
}
}

else if($type1=="News Search")
{
$link="https://www.google.co.in/search?q=$a&tbm=nws";
$sql1="select * from newssearchdetails where keyword='$a'";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result,MYSQL_ASSOC);
$b=$row['searchcount'];
if (mysqli_num_rows($result)==1)
{
$d=$b+1;
$sql2="update newssearchdetails set searchcount='$d' where keyword='$a'";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.co.in/search?q=$a&tbm=nws"); } 
}
else {
$sql2="INSERT INTO newssearchdetails (keyword,searchcount) VALUES ('$a','1')";
if(!mysqli_query($conn,$sql2)){echo "There was an error";}else {header("Location:https://www.google.co.in/search?q=$a&tbm=nws"); } 
}
}


?>

<?php
include("closeconnection.php");
?>