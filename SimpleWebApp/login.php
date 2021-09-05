<?php
	$users = file_get_contents("users.json");
    $users = json_decode($users, TRUE);
	
    $username = @$_POST['username'];
    $password = @$_POST['password'];


    $found = FALSE;
    if($users[$username] ==  $password){
        $found = TRUE;
    }
    if($found){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: bookIndex.php");
    } else {
        header("Location: bookLogin.php");
    }
?>
