<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PAGE</title>

</head>
<body>

<div id="maincolumn">
<?php
include("connect.php");

$id = $_POST['id'];
$psw = $_POST['password'];
$query = mysqli_query ($conn,"select * from etudiant where id='$id'");
while ($row = mysqli_fetch_assoc($query))
		{
		$dbid = $row['id'];
		$dbpsw = $row['psw'];
                $dbnom=$row['nom'];
		
		}
		// check if they match
			if ($id==$dbid && $psw==$dbpsw)
			{
			
			echo "bienvenue $dbnom";
			}
			else{
			echo"<p><h5>login ou mot de passe incorrect</h5></p>";
	               header("location:wrong_username_password.php");
                        }	

		
?>
</div>
<div class="clear"></div>

</body>
</html>