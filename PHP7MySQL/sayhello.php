<?php
function hello() {
    ?>
    <h2>Hello!</h2>
        <p>
            Ini Menampilkan teks dengan menjadikan penyajian teksnya dengan menggunakan fungsi hello(); yang dipanggil dengan menggunakan varibel fungsi.
        </p>
    <?php
}
$head="head.php";
$header="header.php";
$sidebar="sidebar.php";
$footer="footer.php";

$apptitle="Demo variabel fungsi!";
$content="hello";
require("tamplatevarfungsi.php");