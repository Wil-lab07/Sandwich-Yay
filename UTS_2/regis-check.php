<?php
session_start();
include 'koneksi.php';

if (
    isset($_POST['FirstName']) && isset($_POST['LastName'])
    && isset($_POST['BirthDate']) && isset($_POST['Gender'])
    && isset($_POST['Email']) && isset($_POST['password1'])
    && isset($_POST['password2'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $FirstName = htmlentities(validate($_POST['FirstName']), ENT_QUOTES, 'UTF-8');
    $LastName = htmlentities(validate($_POST['LastName']), ENT_QUOTES, 'UTF-8');
    $Email = htmlentities(validate($_POST['Email']), ENT_QUOTES, 'UTF-8');
    $password1 = htmlentities(validate($_POST['password1']), ENT_QUOTES, 'UTF-8');
    $password2 = htmlentities(validate($_POST['password2']), ENT_QUOTES, 'UTF-8');
    $BirthDate = $_POST['BirthDate'];
    $Gender = $_POST['Gender'];

    if ($password1 !== $password2) {
        header("Location: registration.php?notmatch");
        exit();
    } else {

        // hashing the password
        // $password1 = md5($password1);
        // $password1 = password_hash($password1, PASSWORD_DEFAULT);
        $password1 = password_hash($password1, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM user WHERE Email='$Email' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: registration.php?taken");
            exit();
        } else {
            $sql2 = "INSERT INTO user VALUES('', '$FirstName', '$LastName', '$Email', '$password1', '$BirthDate', '$Gender', 1)";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: login.php?success");
                exit();
            } else {
                header("Location: registration.php");
                exit();
            }
        }
    }
} else {
    header("Location: registration.php");
    exit();
}
