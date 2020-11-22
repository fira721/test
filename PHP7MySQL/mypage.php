<html>
<head>
    <?php include($head);?>
</head>
<body>
    <div id="container">
            <div id="header">
                <?php include($header); ?>
            </div>
        <div id="main">
            <div id="sidebar">
                <?php include($sidebar); ?>
            </div>
            <div id="content">
                <?php 
                if (function_exists($content)) $content();
                elseif (file_exists($content)) include($content);
                else echo "<p><p><h3>Maaf halaman aplikasi tidak ditemukan!</h3></p></p>";
                ?>
            </div>
        </div>
        <div id="footer">
            <?php include($footer); ?>
        </div>
    </div>
</body>
</html>