<?php
function br($n=1) {
    $retstr="";
    for($i=0;$i<$n;$i++) $retstr.="<br>";
    return $retstr;
}

function showconnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbalumni";

    //Tampilkan data server dan database

    echo br()."Servername: " .$servername;
    echo br()."Username: " .$username;
    echo br()."Password: " .$password;
    echo br()."Database: " .$dbname;

    //Uji koneksi ke server database
    $conn = mysqli_connect($servername, $username, $password);

    //Cek hasil koneksi
        if (!$conn) {
        echo br()."Koneksi ke server database gagal lakukan..".mysqli_connect_error();
        } else {
        echo br()."Koneksi ke server berhasil";
        //Uji koneksi ke database
        $dbconn = mysqli_connect($servername, $username, $password, $dbname);
        //Cek hasil konesi database
        if (!$dbconn) {
            echo br()."Database tidak ditemukan!";
            } else {
            echo br()."Database Tersembung juga";
            }
        }
}

$head="head.php";
$header="header.php";
$sidebar="sidebar.php";
$footer="footer.php";

$apptitle="Cek Koneksi ke database 2 tahap!";
$content="showconnection";
require("mypage.php");

?>