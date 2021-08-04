<?php

include_once 'header.php'

?>

<h1>Sign Up</h1>

<form action="includes/signup.include.php" method="post">

    <div class="form-group">
    <label className="form-label" htmlFor="name">
              Full Name:
    </label>
    <input 
    rows="1"
              cols="47"
              required
              class="form-control"
              type="text" name="name" placeholder="Enter Full Name Here">
    </div>

    <div class="form-group">
    <label className="form-label" htmlFor="email">
              Email:
    </label>
    <input  rows="1"
              cols="47"
              required
              class="form-control"
              type="text" name="email" placeholder="Enter Email Here">
    </div>

    <div class="form-group">
    <label className="form-label" htmlFor="username">
              Username:
    </label>
    <input 
    rows="1"
              cols="47"
              required
              class="form-control"
              type="text" name="username" placeholder="Enter Username Here">
    </div>
    
    <div class="form-group">
    <label className="form-label" htmlFor="password">
              Password:
    </label>
    <input rows="1"
              cols="47"
              required
              class="form-control"
              type="password" name="password" placeholder="Enter Password Here">
    </div>

    <div class="form-group">
    <label className="form-label" htmlFor="confirmpassword">
              Repeat Password:
    </label>
    <input rows="1"
              cols="47"
              required
              class="form-control"
              type="password" name="confirmpassword" placeholder="Enter Password Again">
    </div>

    <div class="form-group">
    <button type="submit" name="submit">Sign Up</button>
    </div>

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