
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$title?></title>
		<link rel="stylesheet" href="../Style/sidebar.css">
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr id="header">
              <td><a href="dashboard.php"><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></a></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="dashboard.php">Back</a> |
                <a href="../Controller/logout.php"><span class="tab">Logout</a>

              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="100%" cellspacing="0" border="1">
            <tr id="navigation">
              <td width="250px">
                <center>
                  <h3>Login As</h3>
                  <h2>
										<a href="viewProfile.php"><?php echo $_COOKIE['name'];?></a>
									</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
