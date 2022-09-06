<!DOCTYPE html>
<html>
<style>
div.fixed{
	background-color:white;
    background-size:100% ;
	position:relative;
	width:100%;
}
p{
padding-left:20px;
}
body {
    background: url(gallery/home.png); 
	
}
#allign
{
	margin-left:70px;
}
#btn
{
    height:40px;
	width:100px;
    font-size:14pt;
	margin-top:0;
	margin-left:242px;
	
}
a 
{
  color:inherit;
  text-decoration: none;
}
</style>
<div class="fixed"><font style="color:#00B4BA; padding-left:20px;" face="garamond" size="15">Gallery</font>
<p style="background-color:#57CEDC;">
<tr>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="photo.html">Home</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="search.html">Search</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="upload.html">Upload</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="login.html">MyGallery</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="login.html">Profile</a></font></td>
<td><font style="color:#175E61; padding-left:20px; padding-right:10px;" face="verdana" size="5"><a href="login.html">Login</a></font></td>
<td><font style="color:white; padding-left:10px; padding-right:10px; background-color:#2CADB3;" face="verdana" size="5"><a href="reg.html">Register</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="login.html">Friends</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="about.html">About us</a></font></td>

</tr>
</p></div>
<body>
<center><h2>
<?php
$conn = new mysqli("localhost","root","","nmit");

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}

$sql = "select * from signup where usn='".$_POST["usn"]."'";

$res=$conn->query($sql);

if($res->num_rows >0)
{
echo "USN ALREADY EXISTS";
}
else
{

	$sql = "insert into signup values ('" .$_POST["first_name"] ."','" .$_POST["last_name"] ."','" .$_POST["email"] ."'," .$_POST["phoneno"] .",'" .$_POST["branch"] ."','" .$_POST["usn"] ."','" .$_POST["password"] ."')";

	if ($conn->query($sql)==TRUE){
	echo "New record created successfully";
	}
	else
	{
	echo "Error: ".$sql."<br>".$conn->error;
	}
}
?>


</h2></center>

</body>
</html>