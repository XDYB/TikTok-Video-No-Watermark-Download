<?php
require_once __DIR__ . "/constants.php";
require_once INC_DIR . "functions.php";
$config = include CONFIG_DIR . "config.php";
header("Content-Type: application/json");
header("Cache-Control: no-cache");
header("Connection: close");
error_reporting(E_ALL);
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = get_param('search');
    $type   = get_param('type');
    $api    = new \TikTok\Api(["license-key"=>get_option('license_key')]);
    switch ($type) {
        case "url":
            $data = $api->getVideoByUrl($search);
            if ($data) {
                echo json_encode($data);
                exit;
            }
            break;
        case "user":
            $data = $api->getUserFeed($search, get_param('max', 0));
            if ($data) {
                echo json_encode($data);
                exit;
            }
            break;
        case "challenge":
            $data = $api->getChallengeFeed($search, get_param('max', 0));
            if ($data) {
                echo json_encode($data);
                exit;
            }
            break;
        case "music":
            $data = $api->getMusicFeed($search, get_param('max', 0));
            if ($data) {
                echo json_encode($data);
                exit;
            }
            break;
    }
}
echo json_encode(["error"=>true]);
exit;
