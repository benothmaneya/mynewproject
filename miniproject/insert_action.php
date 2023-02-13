<html>
<head> </head>
<body>	
<?php
$id=$_POST['id'];
$name=$_POST['n'];
$fname=$_POST['fn'];
$psw=$_POST['psw'];
include("connect.php");
$res=mysqli_query($conn,"insert into etudiant(id,nom,prenom,psw) values 
('$id','$name','$fname','$psw')");
if ($res)
	echo "ok";
else 
echo "erreur";


?>
</body>
</html>
