<?php

require_once '../vendor/autoload.php';

use d8q8\hello\Hello;

echo '<pre>' . PHP_EOL;// 格式化输出

$hello = new Hello();
var_dump($hello->toString());

$hello->setError('找不到404了，报错了');
var_dump($hello->getError());
