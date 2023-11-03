<?php
require("connect_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username = $_POST["user"];
  $Password = $_POST["password"];

  // Check if the provided Username and Password match the expected values
  if ($Username === "Admin" && $Password === "0123456789") {
      // Successful login, redirect to the "building.php" page
      header("Location: building.php");
      exit;
  } else {
      // Invalid login, display an error message
//echo '<p style="color: red; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Invalid username or password. Please try again.</p>';


  }
}
?>
<!-- Your HTML content remains the same -->

<!DOCTYPE html>
<html lang="en">
<style>
  @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400");

body,
html {
  font-family: "Source Sans Pro", sans-serif;
  background: #2ebf91;
  padding: 0;
  margin: 0;
}

.container {
  text-align: center;
  background: #2c3338;
  border-radius: 9px;
  border-top: 10px solid #0c787d;
  border-bottom: 10px solid #0c787d;
  width: 400px;
  height: 500px;
}

.box h4 {
  font-family: "Source Sans Pro", sans-serif;
  color:#129aa1;
  font-size: 20px;
  margin-top: 94px;
}

.box h4 span {
  color: #dfdeee;
  font-weight: lighter;
}

.box h5 {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 13px;
  color: #a1a4ad;
  letter-spacing: 1.5px;
  margin-top: -15px;
  margin-bottom: 70px;
}

.box input[type="text"],
.box input[type="password"] {
  display: block;
  margin: 20px auto;
  background-color: #3b4148;
  border: 0;
  border-radius: 5px;
  padding: 14px 10px;
  width: 320px;
  outline: 0;
  color: #a9a9a9;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
::-webkit-input-placeholder {
  color: #565f79;
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
  border: 1px solid #79a6fe;
}

a {
  color:#129aa1;
  text-decoration: none;
}
.btn1 {
  border: 0;
  background: #0c787d;
  color: #dfdeee;
  border-radius: 7px;
  width: 340px;
  height: 49px;
  font-size: 16px;
  transition: 0.3s;
  cursor: pointer;
  margin-top: 20px;
}

.btn1:hover {
  background: #129aa1;
}

.forgetpass {
  position: relative;
  float: right;
  right: 28px;
}

</style>
<head>
  <meta charset="UTF-8" />
  <title>
    Webleb
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="/css/styles.css" />
</head>
<body style="display: flex; justify-content:center ; align-items: center;height: 100vh;overflow: hidden;">
    <div class="container">
      <form name="form1" class="box" method="post">
        <h4>Login</span></h4>
        <h5>Log in to your dorm.</h5>
        <input type="text" name="user" placeholder="Username" autocomplete="off" />
        <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off" />
        <input type="submit" value="Sign in" class="btn1" />
      </form>
    </div>
</body>
</html>
