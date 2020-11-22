<?php
function cari() {
    ?>
    <h2>Cari Data!</h2>
        <form>
            Memasukan kata kunci pencarian :
            <input type="text" name="katakunci" >
            <button type="submit"> Cari! </button>
        </form>
    <?php
}
$head="head.php";
$header="header.php";
$sidebar="sidebar.php";
$footer="footer.php";

$apptitle="Demo variabel fungsi!";
$content="Cari";
require("mypage.php");