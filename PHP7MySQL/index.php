<?php
require("libwaktu.php");
function wilujeng() {
    echo hari(date("w")).",         ".tglhariini().",         pukul ".date("H:i:s");
    ?>
    <br>
    <h2><i>Selamat <?php echo waktudalamhari();?></i></h2>
    <p>Selamat datan di situs web I-PERPUS.</p>
    <p>Jika anda alumni I-PERPUS dan belum terdaftar, bisa klik <a href="registrasi.php">Registrasi</a>.
    <br>Untuk periksa sudah terdaftar atau belum bisa periksa pada <a href="direktori.php">Direktori</a></p>
    <p>Informasi kegiatan dan <a href="berita.php">Berita</a> Terbaru dari I-PERPUS dapat anda peroleh melalui situs ini, jadi sering-seringlah berkunjung ke situs ini,</p>
    <?php       
}
$head="head.php";
$header="header.php";
$sidebar="sidebar.php";
$footer="footer.php";

$apptitle="I-PERPUS";
$content="wilujeng";
require("mypage.php");