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

if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyInput") {
        echo "<p>Input cannot be empty.</p>";
    } else if ($_GET["error"] == "invalidUsername") {
        echo "<p>Username is invalid.</p>";
    } else if ($_GET["error"] == "invalidEmail") {
        echo "<p>Email is invalid.</p>";
    } else if ($_GET["error"] == "passwordsDoNotMatch") {
        echo "<p>Passwords do not match.</p>";
    } else if ($_GET["error"] == "usernameAlreadyExists") {
        echo "<p>Username already exists. Try again. </p>";
    } else if ($_GET["error"] == "None") {
        echo "<p>Sign Up Successful!</p>";
    }
}

?>

<?php

include_once 'footer.php'

?>