<?php
/**
 * Created by PhpStorm.
 * User: Haku
 * Date: 15/8/11
 * Time: 12:52
 */
return array(
    'URL_HTML_SUFFIX' => '',
    'URL_CASE_INSENSITIVE' =>true,
    'DEFAULT_FILTER' => 'strip_tags,htmlspecialchars',//过滤
    'APP_DEBUG' => true, // 开启调试模式
    'db_type'  => 'mysql',
    'db_user'  => 'root',
    'db_pwd'   => '',
    'db_host'  => 'localhost',
    'db_port'  => '3306',
    'db_name'  => 'award',
    'DB_PREFIX'    =>  'award_',     // 数据库表前缀
    'DB_DSN'       =>  '',     // 数据库连接DSN 用于PDO方式
    'DB_CHARSET'   =>  '', // 数据库的编码 默认为utf8
    '__PUBLIC__'=>'',
    'DATA_CACHE_TYPE' => 'Memcache', 
    'host' => C('MEMCACHE_HOST') ? C('MEMCACHE_HOST') : '127.0.0.1',
    'port' => C('MEMCACHE_PORT') ? C('MEMCACHE_PORT') : 11211,
    'timeout' => C('DATA_CACHE_TIMEOUT') ? C('DATA_CACHE_TIMEOUT') : false,
    'persistent' => false,
    'expire' =>C('DATA_CACHE_TIME'),
);