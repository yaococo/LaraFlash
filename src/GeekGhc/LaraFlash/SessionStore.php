<?php
/**
 * Created by SessionStore.php.
 * User: yaoyiqiang
 * Date: 2018/1/22
 * Time: PM1:59
 */

namespace GeekGhc\LaraFlash;


interface SessionStore
{
    /**
     * Flash a message to the session.
     *
     * @param string $name
     * @param array  $data
     */
    public function flash($name, $data);
}