<?php include('navbar.php');?>
 <h1>Find Your Own Way</h1>
 <hr>
<img src="1.jpeg" alt="Travel" width="auto" height="auto">
<?php
		
session_start();
	if(isset($_SESSION['postt'])){
		echo "<h3> Post: ". $_SESSION['postt']. "</h3>"; 
	echo"<br>";
	echo "Posted by ". $_SESSION['user']; 
	}

 ?>
