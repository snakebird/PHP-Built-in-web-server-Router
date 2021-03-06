<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP-Built-in-web-server-Router</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<?php
$bing = json_decode(file_get_contents("http://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=en-US"), true);
$image = '//www.bing.com/' . $bing["images"][0]["url"];
?>
<body style="background:url('<?php echo $image ?>')">
<div class="main">

    <?php
    console_output('This message will appear only in console ' . date('Y-m-d H:i:s'), array("this" => array("vector" => "too")));
    ?>

    <div class="images-block">
        <h4 class="info-dev">Check the following images in Developer Tools > Networking to see http status.</h4>
        <img class="img" src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/images/1.jpg"/>
        <img class="img" src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/images/2.jpg"/>
        <div class="img last-image">Loaded from style.css</div>
    </div>


</div>
</body>
</html>
