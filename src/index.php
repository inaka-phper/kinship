<?php
/**
 * Created by PhpStorm.
 * User: okuda
 * Date: 2018/11/21
 * Time: 16:23
 */

use InakaPhper\Kinship\Kinship;

require __DIR__.'/../vendor/autoload.php';
if (!empty($argv[1])) {
    echo new Kinship($argv[1]);
}