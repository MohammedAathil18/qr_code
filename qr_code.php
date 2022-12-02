<?php
header('content-type:image/png');
require_once "vendor/autoload.php";
$img=new Endroid\Qrcode\Qrcode();
$img->setText("https://www.google.co.in/");
$img->setsize(250);
$img->setpadding(10);
$img->render();

?>