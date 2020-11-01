<?php
require_once __DIR__ . "/constants.php";
require_once INC_DIR . "functions.php";
$config = include CONFIG_DIR . "config.php";
$stream=new \Sovit\TikTok\Stream();
$video_url=$_GET['url'];
$stream->stream($video_url);
