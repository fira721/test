<?php
session_start();
$login=false;
$pesan="";
if(sizeof($_SESSION)>0) $login=true;
else { 
    if (isset($_POST)) {
        require("userapp.php");
        require("roleapp.php");
        $username=isset($_POST["username"])?$_POST["username"]:"";
        $password=isset($_POST["password"])?$_POST["password"]:"";
            if (!empty($username)) {
                if (in_array($username,array_keys($user))) {
                    $login=($user[$username]==$password);
                    if ($login) {
                        $_SESSION["username"]=$password;
                        $_SESSION["role"]=$userrole[$username];
                        $_SESSION["roledesk"]=$role[$_SESSION["role"]];
                        $_SESSION["logintime"]=date("d-m-Y H:i:s");
                    } else
                    $pesan="Salah pada nama user atau password!!";
                    } else {
                    $pesan="Salah pada nama user atau password!!!";
            }
        }
    }
}


function loginform() {
    global $pesan;
    ?>
    <h2>Login!</h2>
    <form action="login.php" method="post">
        <label for="username">Nama user:</label>
        <br>
        <input type="text" name="username" >
        <br>
        <label for="password">Password:</label>
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit">Login!</button>
        <button type="reset">Reset</button>
    </form> 
    <?php if (!empty($pesan)) echo ">>".$pesan."<<"?>
    <p>
    <?php
}

function loginsuccess() {
    echo "<h2>Selamat datang {$_SESSION['username']}!</h2>";
    echo "<p>Waktu anda adalah {$_SESSION['logintime']}</p>";
    echo "<p><i>Anda telah lelah berhasil login sebagai <b>{$_SESSION['roledesk']}</b></i></p>";
}

$head="head.php";
$header="header.php";
$sidebar="sidebar.php";
$footer="footer.php";

$apptitle="Login!";
if (!$login) $content="loginform";
else $content="loginsuccess";
require("mypage.php");
?>