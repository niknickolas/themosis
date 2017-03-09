<?php
/**
 * Created by PhpStorm.
 * User: niknickolas
 * Date: 08.01.17
 * Time: 2:33
 */
namespace Theme\Facades;

use Themosis\Facades\Facade;

class Redis  extends  Facade {

	protected static function getFacadeAccessor()
	{
		return 'redis';
	}
}