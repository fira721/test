<?php
error_reporting(0);
function br($n=1) {
    $retstr="";
    for($i=0;$i<$n;$i++) $retstr.="<br>";
    return $retstr;
}

function showconnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbalvcxvxcvumni2";

    //Tampilkan data server dan database

    echo br()."Servername: " .$servername;
    echo br()."Username: " .$username;
    echo br()."Password: " .$password;
    echo br()."Database: " .$dbname;

    //Uji koneksi ke server database
    $conn = mysqli_connect($servername, $username, $password);

    //Cek hasil koneksi
        if (!$conn) {
        echo br()."Koneksi ke server database gagal lakukan.." .mysqli_connect_error();
        } else {
            echo br()."Koneksi ke server dan database berhasil";
        }
}

$head="head.php";
$header="header.php";
$sidebar="sidebar.php";
$footer="footer.php";

$apptitle="Cek Koneksi dengan 1 tahap";
$content="showconnection";
require("mypage.php");