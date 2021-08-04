<?php

function emptyInput($name, $email, $username, $password, $confirmpassword)
{

    $result;

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username)
{
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email)
{

    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function passwordMatch($password, $confirmpassword)
{

    $result;

    if ($password !== $confirmpassword) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function usernameEmailExists($conn, $username, $email)
{

    $sql = "SELECT * FROM users WHERE usersUserName = '$username' OR usersEmail = '$email';";

    $result = $conn->query($sql);

    if ($result->num_rows !== 0) {
        return mysqli_fetch_row($result);
    } else {
        return false;
    }

    $conn->close();
}

function createUser($conn, $name, $email, $username, $password)
{

    $sql = "INSERT INTO users (usersName, usersEmail, usersUserName, usersPassword) VALUES (" . "'$name'" . ",'$email'" . ",'$username','$password');";
    echo $sql;
    $conn->query($sql);

    $conn->close();
    header("location: ../signup.php?error=None");
    exit();
}

function emptyInputLogin($nameusername, $loginpassword)
{
    $result;

    if (empty($nameusername) || empty($loginpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $nameusername, $loginpassword)
{

    $dataArray;
    $sql = "SELECT * FROM users WHERE usersUserName = '$nameusername' AND usersPassword = '$loginpassword';";

    $result = $conn->query($sql);

    if ($result->num_rows !== 0) {
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
}
