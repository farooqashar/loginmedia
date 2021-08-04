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

    if (!empty($result)) {
        return $result;
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

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (usersName, usersEmail, usersUserName, usersPassword) VALUES (" . "'$name'" . ",'$email'" . ",'$username','$hashedPassword');";
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