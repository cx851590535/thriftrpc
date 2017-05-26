<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/5/24
 * Time: 19:42
 */
namespace PhpRpc\Commands;
ini_set('display_errors', 'on');
use Workerman\Worker;
use ReflectionClass;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class PhpRpcCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'phprpc {action : start | stop | restart }';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Start php rpc';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		// 检查扩展
		if(!extension_loaded('pcntl'))
		{
			exit("Please install pcntl extension. See http://doc3.workerman.net/install/install.html\n");
		}

		if(!extension_loaded('posix'))
		{
			exit("Please install posix extension. See http://doc3.workerman.net/install/install.html\n");
		}

		// 标记是全局启动
		define('GLOBAL_START', 1);

		require_once __DIR__ . '/../../../../autoload.php';

		// 加载所有Applications/*/start.php，以便启动所有服务
		foreach(glob(__DIR__.'/../Applications/*/start*.php') as $start_file)
		{
			require_once $start_file;
		}
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$action = $this->argument('action');
		Worker::runAll();
	}


}