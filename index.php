<?php 

include_once 'header.php'

?>

<h1>Home Page(TBD STYLED LATER)</h1>

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
