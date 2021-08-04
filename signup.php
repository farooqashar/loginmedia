<?php 

include_once 'header.php'

?>

<h1>Sign Up</h1>

<form action="includes/signup.include.php" method="post">
    <input type="text" name="name" placeholder="Enter Full Name Here">
    <input type="text" name="email" placeholder="Enter Email Here">
    <input type="text" name="username" placeholder="Enter Username Here">
    <input type="password" name="password" placeholder="Enter Password Here">
    <input type="password" name="confirmpassword" placeholder="Enter Password Again">

    <button type="submit" name="submit">Sign Up</button>

</form>

<?php 

include_once 'footer.php'

?>
