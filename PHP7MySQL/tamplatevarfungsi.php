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
                <?php $content(); ?>
            </div>
        </div>
        <div id="footer">
            <?php include($footer); ?>
        </div>
    </div>
</body>
</html>