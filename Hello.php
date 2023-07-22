<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello World</p>'; ?>
<br>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    echo 'You are using Google Chrome.<br />';
}
<br>
elseif (strpos ($_SERVER['HTTP_USER_AGENT'], 'Edge' ) !== FALSE){
    echo 'You are using Microsoft Edge.<br />';
}

?>
<a href="/Page2.php">page2</a>
</body>
</html> 