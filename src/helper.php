<?php
declare (strict_types=1);

use Think\Component\Env\Facade\EnvFacade;

if (!function_exists('env')) {
    /**
     * 获取环境变量值
     * @access public
     * @param string|null $name 环境变量名（支持二级 .号分割）
     * @param mixed $default 默认值
     * @return mixed
     */
    function env(?string $name = null, $default = null)
    {
        return EnvFacade::get($name, $default);
    }
}