<?php 

include_once 'header.php'

?>

<h1>Sign In</h1>

<form action="includes/login.include.php" method="POST">
    <input type="text" name="nameusername" placeholder="Enter Email or Username Here">
    <input type="password" name="loginpassword" placeholder="Enter Password Here">

    <button type="submit" name="submit">Sign In</button>

</form>

<?php 

include_once 'footer.php'

?>
