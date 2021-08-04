<?php

session_unset();

session_destoy();

header("location: ../index.php");
exit();
