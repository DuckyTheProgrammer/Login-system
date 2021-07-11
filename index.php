<body>
<head>
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
.bg-plc-holder img{
   width: 100%;
   height: 45vh;
   margin-top: .1%;
   opacity: 0.47;
}
.title-1-ind {
    text-transform: uppercase;
    margin-top: -13%;
    margin-left: 30%;
    position:absolute;
    font-size: 30px;                                                                    
    letter-spacing: 10px;
}
.par-2 {
    text-transform: uppercase;
    margin-top: -10%;
    margin-left: 29%;
    position:absolute;
    font-size: 17px;                                                                    
    letter-spacing: 3px;
}
</style>
</head>
</body>
<?php 
    include_once 'header.php';
    
    if (isset($_SESSION["useruid"])) {
        echo "<div class='bg-plc-holder'>
            <img src='img/bg-1.jpg'>
        <p class='title-1-ind'>welcome to the page " . $_SESSION['useruid'] . ".</p>
        <p class='par-2'>Good job ". $_SESSION['useruid'] ." you successfully logged on your account! </p>
        <button action='profile.php' type='file' class='pf-btn'>UPDATE PROFILE</button>
        echo 'pog';
    </div>";
    } else {
        include_once 'starter.php';
    }
?>
</body>
</html>