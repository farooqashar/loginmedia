<?php

include_once 'header.php'

?>

<h1>Sign Up</h1>

<form action="includes/signup.include.php" method="post">

    <div class="form-group">
        <label className="form-label" htmlFor="name">
            Full Name:
        </label>
        <input rows="1" cols="47" required class="form-control" type="text" name="name" placeholder="Enter Full Name Here">
    </div>

    <div class="form-group">
        <label className="form-label" htmlFor="email">
            Email:
        </label>
        <input rows="1" cols="47" required class="form-control" type="text" name="email" placeholder="Enter Email Here">
    </div>

    <div class="form-group">
        <label className="form-label" htmlFor="username">
            Username:
        </label>
        <input rows="1" cols="47" required class="form-control" type="text" name="username" placeholder="Enter Username Here">
    </div>

    <div class="form-group">
        <label className="form-label" htmlFor="password">
            Password:
        </label>
        <input rows="1" cols="47" required class="form-control" type="password" name="password" placeholder="Enter Password Here">
    </div>

    <div class="form-group">
        <label className="form-label" htmlFor="confirmpassword">
            Repeat Password:
        </label>
        <input rows="1" cols="47" required class="form-control" type="password" name="confirmpassword" placeholder="Enter Password Again">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
    </div>

</form>

<?php

if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyInput") {

        echo "
                <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
            <div class='toast-header'>
                <strong class='mr-auto'>Error</strong>
                <small>Login Issue</small>
                <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='toast-body'>
                Input cannot be empty.
            </div>
            </div>
        ";
    } else if ($_GET["error"] == "invalidUsername") {
        echo "<strong><p style='color:blue;'>Username is invalid.</p></strong>";
    } else if ($_GET["error"] == "invalidEmail") {
        echo "<strong><p style='color:blue;'>Email is invalid.</p></strong>";
    } else if ($_GET["error"] == "passwordsDoNotMatch") {
        echo "<strong><p style='color:blue;'> Passwords do not match.</p></strong>";
    } else if ($_GET["error"] == "usernameAlreadyExists") {
        echo "<strong><p style='color:blue;'> Username already exists. Try again. </p></strong>";
    } else if ($_GET["error"] == "None") {
        echo "
               <strong><p style='color:blue;'> Sign Up Successful!</p></strong>
        ";
    }
}

?>

<?php

include_once 'footer.php'

?>