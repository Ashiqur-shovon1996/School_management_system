<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="../Style/register.css">
    <style media="screen">
      .error {color: #FF0000;}

    </style>

  </head>
  <body>
    
<?php
// define variables and set to empty values
$idErr = $nameErr = $emailErr = $passwordErr = $confirmpassErr = $genderErr = "";
$id = $name = $email = $gender =$password = $confirmpass = "";
$congrats_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//id validation
  if (empty($_POST["id"])) {
    $idErr = "Id is required";
  } else {
    $id = input($_POST["id"]);
    if (!preg_match("/^[1-9]\d*$/",$id)) {
      $idErr = "Only numeric values are allowed";
    }
  }

  //name validation
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  //email validation 
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


  //pass validation
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = input($_POST["password"]);
    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/",$password)) {
      $passwordErr = "Minimum five characters, at least one letter and one number";
    }
  }

  // repass validation
  if (empty($_POST["repass"])) {
    $confirmpassErr = "Confirm password must need to match with password";
  } else {
    $confirmpass = input($_POST["repass"]);
    if ($password !== $confirmpass) {
      $confirmpassErr = "Password didnot match...!!";
    }
  } 

}

function input($data) {
  $data = trim($data); 
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="adminlogin.php">Back</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table align="center" >
            <tr>
              <td>
                <form class="" id="myform" action="" method="post">
                  <fieldset>
                    <legend>REGISTER</legend>
                    <table>
                      <tr>
                        <td colspan="2">
                          <center>
                          <div id="error_messege">
                          </div>
                        </center>
                        </td>
                      </tr>
                      <tr>
                        <td>ID</td>
                        <td>: <input type="text" id="id" name="id" value=""> <br> <span class="error"><?php echo $idErr;?></span></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td>: <input type="text" id="name" name="name" placeholder="Enter Full Name"> <br> <span class="error"> <br> <?php echo $nameErr;?></span></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>: <input type="email" id="email" name="email" value=""><br> <span class="error"> <br> <?php echo $emailErr;?></span></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>:   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                                <span class="error"><?php echo $genderErr;?></span></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" id="password" name="password" value=""><br> <span class="error"><?php echo $passwordErr;?></span></td>
                      </tr>
                      <tr>
                        <td>Confirm Password</td>
                        <td>: <input type="password" id="repass" name="repass" value=""><br> <span class="error"><br> <?php echo $confirmpassErr;?></span></td>
                      </tr>
                    </table>
                    <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit" onsubmit> <br><br>
                      </center>

                  </fieldset>
                  
                </form>
            </td>

          </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td align="center" >Copyright Ⓒ Spring - 2022</td>
      </tr>

    </table>
  </body>
</html>
