<?php
namespace WorkerMan\Modules;

function camera()
{
    $html_title = 'LiveCamera | PHP+Websocket+HTML5调用摄像头实现视频直播';
    $html_nav = 'camera';
    $html_keywords = 'php websocket, php html5 摄像头';
    $github_repo = 'live-camera';
    $download_camera_count_key = 'download_camera_count';
    $camera_download_count =  \WorkerMan\Lib\Store::get($download_camera_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/camera.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
