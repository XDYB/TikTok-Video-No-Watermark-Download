<?php
require_once __DIR__ . "/constants.php";
require_once INC_DIR . "functions.php";
if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url   = get_param('url');
    $key   = get_param('key');
    $api    = new \TikTok\Api(["license-key" => get_option('license_key')]);
    $download = new \Sovit\TikTok\Download();
    $videos = $api->getVideoByUrl($url);
    if ($videos && isset($videos->items) && !empty($videos->items)) {
        $video = $videos->items[0];
        switch ($key) {
            case "video":
            default:
                if (isset($video->video->downloadAddr) && !empty($video->video->downloadAddr)) {
                    $src      = $video->video->downloadAddr;
                    $download->url($video->video->downloadAddr, $video->id, 'mp4');
                }
                break;
            case "no-watermark":
                $noWatermark = $api->getNoWatermark($url, $video->id);
                $download->url($noWatermark->url, $video->id.'-no-watermark', 'mp4');
                


                break;
            case "music":
                if (isset($video->music->playUrl) && !empty($video->music->playUrl)) {
                    $src      = $video->music->playUrl;
                    $download->url($video->music->playUrl, $video->music->id, 'mp3');
                    force_download($src, $filename);
                }

                break;
        }
    }
}
exit;
