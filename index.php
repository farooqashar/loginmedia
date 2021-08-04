<?php

include_once 'header.php'

?>

<h1>Login System</h1>
<p class="text-warning container">Check out the site!</p>

<?php
if (isset($_SESSION["userUserName"])) {
    echo "<p>Hello There" . $_SESSION["userId"] . "</p>";
}

if (isset($_GET["message"])) {
    if ($_GET["message"] == "SUCCESSFULLOGIN") {
        echo "<p>Login Successful!</p>";
    }
}
?>

<?php

include_once 'footer.php'

?>