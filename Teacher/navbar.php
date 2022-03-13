<?php
date_default_timezone_set('asia/dhaka');
$time = date('m/d/Y h:i:s a', time());
?>
<!DOCTYPE html>
<html>

<head>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 5px;
      overflow: hidden;
      background-color: #0494aa;
    }

    li {
      float: left;
      border-right: 1px solid #bbb;
    }

    li:last-child {
      border-right: none;
    }

    li a {
      display: flex;
      color: #056432;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #111;
    }

    .active {
      background-color: #000000;
    }
  </style>
</head>

<body>

  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="gallery.php">Gallery</a></li>
	<li><a href="manager.php">Manager Page</a></li>
	<li><a href="employee.php">Employee Page</a></li>
	<li><a href="customer.php">Customer Page</a></li>
	<li><a href="login.php">Login</a></li>


    <li style="float:right"><a href="logout.php">Logout</a></li>
  </ul>

</body>

</html>