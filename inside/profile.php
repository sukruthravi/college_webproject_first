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
    background: url(gallery/bg.png); 
	background-repeat:no-repeat;
}
#boxid
{
    height:40px;
	width:250px;
    font-size:14pt;
	margin-top:150px;
}
#boxid2{
	height:40px;
	width:180px;
	font-size:14pt;
	margin-top:300px;

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
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5" ><a href="photo.html">Home</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="search.html">Search</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="upload.html">Upload</a></font></td>
<td><font style="color:#175E61; padding-left:20px; padding-right:10px;" face="verdana" size="5"><a href="mygallery.html">MyGallery</a></font></td>
<td><font style="color:white; padding-left:10px; padding-right:10px; background-color:#2CADB3;" face="verdana" size="5"><a href="profile.html">Profile</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="../login.html">Logout</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="frnds.php">Friends</a></font></td>
<td><font style="color:#175E61; padding-left:20px;" face="verdana" size="5"><a href="about.html">About us</a></font></td>





</tr>
</p></div>

<body>
<pre>
<center>
<?php
$conn = new mysqli("localhost","root","","nmit");

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
$sql = "select * from signup where email='".$_POST["email"]."'";

$res=$conn->query($sql);

if($res->num_rows >0)
		{
			while($row=$res->fetch_assoc())
			{
				if($row["password"]==$_POST["password"])
				{
				echo "Welcome  ". $row["first_name"];
				echo "<br><br>";
				echo "<table border=1>";
				echo "<tr> <td>First Name</td><td>". $row["first_name"] . "</td></tr>";
				echo "<tr><td>Last Name</td><td>". $row["last_name"] . "</td></tr>";
				echo "<tr><td>Email</td><td>". $row["email"] . "</td></tr>";
				echo "<tr><td>Phone No</td><td>". $row["phoneno"] . "</td></tr>";
				echo "<tr><td>Branch</td><td>". $row["branch"] . "</td></tr>";
				echo "<tr><td>USN</td><td>". $row["usn"] . "</td></tr>";
				echo "<tr><td>Pasword</td><td>". $row["password"] . "</td></tr>";
				echo "</table>";
				}
				else
				echo file_get_contents("loginf.html");
				break;
			}
		}
else
	{
		echo "USERNAME DOES NOT EXIST<br><br>";
		echo "<a href='login.html'>TRY AGAIN</a>";
	}
?>
</center>
</pre>
</body>
</html>