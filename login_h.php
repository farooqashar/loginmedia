<?php

include_once 'header.php'

?>

<h1>Sign In</h1>

<form action="includes/login.include.php" method="POST">

    <div class="form-group">
    <label className="form-label" htmlFor="nameusername">
              Email/Username:
    </label>
    <input rows="1"
              cols="47"
              required
              class="form-control"
              type="text" name="nameusername" placeholder="Enter Email or Username Here">

        </div>

<div class="form-group">
<label className="form-label" htmlFor="nameusername">
              Password:
    </label>
    <input rows="1"
              cols="47"
              required
              class="form-control"
              type="password" name="loginpassword" placeholder="Enter Password Here">
</div>

    <div class="form-group">
    <button class="btn btn-primary" type="submit" name="submit">Sign In</button>
</div>

</form>

<?php

include_once 'footer.php'

?>