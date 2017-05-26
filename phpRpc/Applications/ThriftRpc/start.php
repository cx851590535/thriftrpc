<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Workerman\Worker;
require_once __DIR__ . '/ThriftWorker.php';

$host = config('phprpc.base_config.host','0.0.0.0');
$port = config('phprpc.base_config.port','9090');
$count = config('phprpc.base_config.count',16);
$class = config('phprpc.base_config.class','Permission');
$worker = new ThriftWorker('tcp://'.$host.':'.$port);
$worker->count = $count;
$worker->class = $class;


// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START'))
{
    Worker::runAll();
}
