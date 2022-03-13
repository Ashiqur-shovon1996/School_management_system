<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="../Style/adminlogin.css">

  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="/School_management_system">Back</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <div id="formtable" class="">

          <table  align="center" >
            <tr>
              <td>
                <form class="" id="inform" action="" method="post">
                  <fieldset>
                    <table>
                      <tr>
                        <td colspan="2">
                          <center>
                          <div id="error_messege">
                          </div>
                        </center>
                      </tr>
                      <tr>
                        <td>ID</td>
                        <td>: <input type="text" id="id" name="id" value=""></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" id="password" name="password" value=""></td>
                      </tr>
                    </table>
                    <input type="checkbox" name="" value=""> Remember Me 
                  </fieldset>
                </form>

                <a href="dashboard.html">
                    <button class="log-btn">LOGIN</button>
                </a>
                    <br>
                <a href="register.php">SIGN UP</a>
            </td>

          </tr>
          </table>
          </div>
        </td>
      </tr>

      <tr>
        <td align="center" >Copyright Ⓒ Spring - 2022</td>
      </tr>

    </table>

  </body>
</html>
