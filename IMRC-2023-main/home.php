<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <img src='img/logo.png' height="230" width="440" />
</head>
<body>

     <h1>Greetings! <?php echo $_SESSION['name']; ?></h1>


     <a href=logout.php class="btnn"> Logout</a>
 
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>