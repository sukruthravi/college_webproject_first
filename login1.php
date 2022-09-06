<!DOCTYPE html5>
<html>
<body>

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
				echo file_get_contents("inside/profile.html");
				break;
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

</body>
</html>