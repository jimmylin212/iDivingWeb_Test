﻿<?php include "../Common.php" ?>
<!DOCTYPE html>

<html>
<head>
    <title></title>
    <meta name="Extra" content="B320.php.less" />
    <meta name="BasePath" content="../" />
    <meta name="Data" content = "<?php echo getDataFileName(""); ?>"/>
	<link rel="shortcut icon" href="/Image/Icon/favicon/favicon.ico">
    <script type="text/javascript" src="../Script/jquery.js"></script>
    <script type="text/javascript" src="../Script/Loader.js"></script>
</head>
<body>
    <?php include "../Part/Head.php"; ?>
    <?php include "../Part/Cap.php"; ?>
    <div id="section" sight>
        <div id="map" class="ArticleBox"></div>
        <div id="way" class="ArticleBox"></div>
        <div id="open" class="ArticleBox"></div>
    </div>
    <?php include "../Part/Foot.php" ; ?>
</body>
</html>