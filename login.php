<?php
session_start();
include "database.php";
if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if(empty($email)){
        header("Location: index.php?error=Email is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM signup WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($links, $sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['password'] === $pass){
                $SESSION['email'] = $row['email'];
                $SESSION['firstname'] = $row['firstname'];
                header("Location: landPage.html");
                exit();
            }
            else{
                header("Location: index.php?error=Incorrect email or Password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect email or Password");
            exit();
        }
    }
}
else{
    header("Location: index.php");
    exit();
}
?>