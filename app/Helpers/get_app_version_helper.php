<?php

/**
 * 获取当前App版本
 *
 * @return void
 */
function get_app_version()
{
    $file_path = APPPATH . '/Data/Version.txt';
    if (file_exists($file_path)) {
        $content = file_get_contents($file_path);
        return $content;
    } else {
        $content = file_get_contents($file_path);
        return $content;
    }
}
