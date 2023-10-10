<?php
/**
 * Plugin Name: TcvX
 * Plugin URI: https://github.com/drajathasan/slims-tcvx
 * Description: 
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */
use SLiMS\Plugins;

Plugins::hook(Plugins::ADMIN_SESSION_AFTER_START, function(){
    global $sysconf,$dbs;
    $trace = debug_backtrace();
    $detail = array_pop($trace);
    
    if (str_replace(SB, '', $detail['file']) === 'admin/index.php' && file_exists($path = __DIR__ . '/index.php')) {
        include $path;
    }
});
