<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2021 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types=1);

use Think\Component\Env\Facade\Env;

if (!function_exists('env')) {
    /**
     * 获取环境变量值
     * @access public
     * @param string|null $name 环境变量名（支持二级 .号分割）
     * @param mixed $default 默认值
     * @return mixed
     */
    function env(string $name = null, $default = null)
    {
        return Env::get($name, $default);
    }
}