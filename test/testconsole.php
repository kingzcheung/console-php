<?php
/**
 * Created by PhpStorm.
 * User: kingzcheung
 * Date: 2016/9/23
 * Time: 11:50
 * @author  Kingz Cheung <kingzcheung@gmail.com>
 */

$loader = require '../vendor/autoload.php';

$loader->add('kingzcheung\\', __DIR__);

$str = 'string';
$bool = false;
$null = NULL;
$int = 123456;
$float = 123.456;
$array = ['name' => 'kingzcheung', 'age' => 25, 'sex' => 'male', 'isM' => false];

$table = [
    ['name' => 'kingzcheung', 'age' => 25, 'sex' => 'male', 'isM' => false],
    ['name' => 'zhangyida', 'age' => 19, 'sex' => 'male', 'isM' => false],
    ['name' => 'lixunhuan', 'age' => 44, 'sex' => 'male', 'isM' => true],
];

\kingzcheung\Console::log($str, $bool, $null, $int, $float, $array);

\kingzcheung\Console::dir($array);

\kingzcheung\Console::table($table);

\kingzcheung\Console::json($array);