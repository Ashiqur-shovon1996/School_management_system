<?php include('navbar.php');?>
<h1>Gallery</h1>
<hr>
<?php
	session_start();
	if(isset($_SESSION['user'])){
		echo "User Name: ". $_SESSION['user']; 
	echo"<br>";
	echo "User Password: ". $_SESSION['pass']; 
	}
?>
<html>
<head>
<title>Gallary</title>
<body>
    
<h2 style="background-color:white;"><pre class="tab"> 

            
            <h3>1.Panam Nagar</h3>
            <img src="g-1.jpg" alt="Travel" width="300" height="300">

            <h3>2.Bichnakandi</h3>
            <img src="g-2.jpg" alt="Travel" width="300" height="300">
            <h3>3.Rain Forest</h3>
            <img src="g-3.jpg" alt="Travel" width="300" height="300">
            <h3>4.Potenga sea beach</h3>
            <img src="g-4.jpg" alt="Travel" width="300" height="300">
            <h3>5.Tanguar-Haor</h3>
            <img src="g-5.jpg" alt="Travel" width="300" height="300">
            <h3>6.Nikoli Haor</h3>
            <img src="g-6.jpg" alt="Travel" width="300" height="300">
            <h3>7.Lalbag Kella</h3>
            <img src="g-7.jpg" alt="Travel" width="300" height="300">
            <h3>8.Ahsan Manzil</h3>
            <img src="g-8.jpg" alt="Travel" width="300" height="300">
       
</body>
</html>