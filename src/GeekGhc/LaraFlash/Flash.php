<?php
/**
 * Created by Flash.php.
 * User: yaoyiqiang
 * Date: 2018/1/22
 * Time: PM1:44
 */

namespace GeekGhc\LaraFlash;


use Illuminate\Support\Facades\Facade;

class Flash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laraflash';
    }
}