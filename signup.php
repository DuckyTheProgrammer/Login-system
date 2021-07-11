                                                                            
<?php 
    include_once 'header.php';
?>

<center>
    <section class="signup-form">
        <h2>Sign Up</h2>
        <hr>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
        echo '<br>';
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput") {
                echo "<p>Detected empty fields!</p>";
            }
            else if($_GET["error"] == "invaliduid") {
                echo "<p>Please choose proper username!</p>";
            }
            else if($_GET["error"] == "invalidemail") {
                echo "<p>Please choose proper email!</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords deosn't match</p>";
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong</p>";
            }
             else if($_GET["error"] == "usernametaken") {
                echo "<p>Either username or email is taken.</p>";
            }
             else if($_GET["error"] == "none") {
                echo "<p>Successfully registered</p>";
            }
        }
    ?>
    </section>

</center>