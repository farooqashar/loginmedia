<?php

include_once 'header.php'

?>

<h1>Sign In</h1>

<form action="includes/login.include.php" method="POST">
    <input rows="1"
              cols="47"
              required
              class="form-control"
              type="text" name="nameusername" placeholder="Enter Email or Username Here">
    <input rows="1"
              cols="47"
              required
              class="form-control"
              type="password" name="loginpassword" placeholder="Enter Password Here">

    <button type="submit" name="submit">Sign In</button>

</form>

<?php

include_once 'footer.php'

?>