 <?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login System</title>
        <style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Noto Sans JP", sans-serif;
}
body {
    overflow: hidden;
}
nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
  min-height: 8vh;
  background-color: white;
}
.logo {
  color: black;
  letter-spacing: 3px;
  text-transform: uppercase;
  font-size: 30px;
}
ul {
  display: flex;
  justify-content: space-around;
  width: 43%;
}

ul li a {
  color: black;
  text-decoration: none;
  font-size: 16px;
  text-transform: uppercase;
  padding: 7px 13px;
  border-radius: 3px;
}
ul li {
  list-style: none;
}
.signup-form input {
  display: block;
}
.signup-form {
  padding: 10%;
}
.signup-form input {
  width: 30%;
  margin-top: 2%;
  padding: 0% 1%;
  border: solid 0.1px rgb(168, 168, 168);
  height: 3vh;
}
.signup-form h2 {
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 21px;
}

hr {
  margin-top: 2%;
}
.plc {
  color: white;
}

ul li a.active,ul li a:hover {
    background: black;
    color: white;
    transition: .5s;
}
    </style>
</head>
<body>
    
    <nav>
        <div class="logo">
        <h4>TITLE</h4>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blogs.php">SOME THINGIES</a></li>
            <li><a href="about.php">About Us</a></li>
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profile Page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                       
                } else {
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo " <li><a href='login.php'>Log In</a></li>";
                }
            ?>
        </ul>  
    </nav>  
