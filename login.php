
<?php 
    include_once 'header.php';
?>

<center>
    <section class="signup-form">
        <h2>Log In</h2>
        <hr>
        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username / Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log In</button>
        </form>
         <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput") {
                echo "<p>Noticed empty fields!</p>";
            }
            else if($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login</p>";
            }
        }
    ?>
    </section>
</center>