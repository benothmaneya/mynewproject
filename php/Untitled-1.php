<?php
$title="eya ben othman ";
$string="bonjour tout le monde ";
echo "$string";
echo $string [3];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php
    echo"$title";
  

    ?>
    </title>
</head>
<body>
    <?php 
        echo "<h1> welcome to $title </h1>"
     
        ?>
    
</body>
<form action="Untitled-1.php" method="GET">
    name:<input type ="text" name="f-name">
    <input type="submit">

</form>
<?php
echo $_GET["f-name"];

echo 20+10;
?>
</html>