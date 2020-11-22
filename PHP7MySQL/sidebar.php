Menu :
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <?php if (!isset(($_SESSION["role"]))){?>
                        <li><a href="registrasi.php">registrasi</a></li>
                <?php } ?>
                <li><a href="direktori.php">Direktori</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <?php if(isset(($_SESSION["role"]))){?>
                        <li><a href="editpersonal.php">Perbaiki Data</a></li>
                        <li><a href="ubahpasswod.php">Ubah Password </a></li>
                <?php }  ?>
                <?php  ?>
                <?php if(!isset($_SESSION["username"])) {?>
                <li><a href="login.php">Login</a></li>
                <?php } else {?>
                <li><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>