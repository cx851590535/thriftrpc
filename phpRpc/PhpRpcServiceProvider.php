<?php

namespace PhpRpc;

use Illuminate\Support\ServiceProvider;

class PhpRpcServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__ . '/config/phprpc.php' => config_path('phprpc.php'),
		]);
	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__ . '/config/phprpc.php', 'phprpc'
		);

		$this->commands([
			Commands\PhpRpcCommand::class,
		]);
	}
}