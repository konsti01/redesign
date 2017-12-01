<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-mailek index</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="username" placeholder="felhasználónév">
            <input type="password" name="password" placeholder="jelszó">
            <input type="submit" name="login" value="Bejelentkezés">
        </form>
    </body>
</html>

<?php
    $username = 'meska';
    $password = 'aksem';

    if(isset($_POST['login'])){
        if($username&&$password){
            if($_POST['username'] == $username && $_POST['password'] == $password){
                $_SESSION['username']=$username;

                header("Location: list.php");
                exit;
            }
            else{
                echo 'Helytelen adatok!';
            }
        }
        else{
            echo 'Írd be a felhasználónevet és a jelszót!';
        }
    }
?>