<?php 

function emptyInput($name,$email,$username,$password, $confirmpassword ) {

    $result;

    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;

}

function invalidUsername($username) {
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {

    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;

}

function passwordMatch($password,$confirmpassword) {

    $result;

    if ($password !== $confirmpassword) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;

}

function usernameEmailExists($conn, $username, $email) {

    $sql = "SELECT * FROM users WHERE usersUserName = '$username' OR usersEmail = '$email';";

    $result = $conn->query($sql);
    // echo var_dump(get_object_vars(usernameEmailExists($conn, $username, $email)));
    // echo mysqli_fetch_assoc($result);
    // echo $result -> $result[1];
    // echo mysqli_num_rows($result);
    // echo mysqli_fetch_row($result)[1];

    if ($result -> num_rows !== 0) {
        return mysqli_fetch_row($result);
    } else {
        return false;
    }

    $conn -> close();

    // $stmt = mysqli_stmt_init($conn);
    // if (!mysql_stmt_prepare($stmt, $sql)) {
    //     header("location: ../signup.php?error=stmtFailure");
    //     exit();
    // }

    // mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    // mysqli_stmt_execute($stmt);
    
    // $results = mysqli_stmt_get_result($stmt);

    // if ($row = mysqli_fetch_assoc($results)) {
    //     return $row;

    // } else {
    //     $result = false;
    //     return $result;
    // }

    // mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password) {

    $sql = "INSERT INTO users (usersName, usersEmail, usersUserName, usersPassword) VALUES (" . "'$name'" . ",'$email'" . ",'$username','$password');";
    echo $sql;
    $conn->query($sql);

    $conn -> close();
    header("location: ../signup.php?error=None");
    exit();

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    //   } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //   }

    // $conn -> $sql;
    // mysqli_query($conn, $sql);

    // $conn -> query($sql);

    // $stmt = mysqli_stmt_init($conn);
    // if (!mysql_stmt_prepare($stmt, $sql)) {
    //     header("location: ../signup.php?error=stmtFailure");
    //     exit();
    // }


    // mysqli_stmt_bind_param($stmt, "ssss", $name, $email,$username, $hashedPassword);
    // mysqli_stmt_execute($stmt);
    
    // mysqli_stmt_close($stmt);
}

function emptyInputLogin($nameusername,$loginpassword) {
    $result;

    if(empty($nameusername) || empty($loginpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $nameusername, $loginpassword) {

    $dataArray;
    $sql = "SELECT * FROM users WHERE usersUserName = '$nameusername' AND usersPassword = '$loginpassword';";

    $result = $conn->query($sql);

    if ($result -> num_rows !== 0) {
        $dataArray = mysqli_fetch_row($result);
    } else {
        header("location: ../login_h.php?error=loginIncorrect");
        exit();
    }

    session_start();

    $_SESSION["userId"] = $dataArray[0];
    $_SESSION["userUserName"] = $dataArray[3];

    header("location: ../index.php?message=SUCCESSFULLOGIN");
    exit();




    // $dataArray = mysqli_fetch_row($userNameExists);
    // $dataArray = mysqli_fetch_row($userNameExists);
    // echo $dataArray[2];
    // exit();

    // if ($userNameExists === false) {
        // header("location: ../login_h.php?error=loginIncorrect");
        // exit();
    // }



    // $passwordHashed = $dataArray[4];

    // $checkPassword = password_verify($loginpassword, $passwordHashed);

    // if ($checkPassword === false) {
    //     header("location: ../login_h.php?error=loginIncorrect");
    //     exit();
    // } else if ($checkPassword === true) {
        // session_start();

        // $_SESSION["userId"] = $dataArray[0];
        // $_SESSION["userUserName"] = $dataArray[3];
        // header("location: ../index.php");
        // exit();
    // }

}