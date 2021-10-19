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

namespace Think\Component\Env\Facade;

use Think\Component\Facade\Facade;

/**
 * @see \Think\Component\Env\Env
 * @package Think\Component\Env\Facade
 * @mixin \Think\Component\Env\Env
 * @method static void load(string $file) 读取环境变量定义文件
 * @method static mixed get(string $name = null, mixed $default = null) 获取环境变量值
 * @method static void set(string|array $env, mixed $value = null) 设置环境变量值
 * @method static bool has(string $name) 检测是否存在环境变量
 * @method static void __set(string $name, mixed $value) 设置环境变量
 * @method static mixed __get(string $name) 获取环境变量
 * @method static bool __isset(string $name) 检测是否存在环境变量
 * @method static bool offsetExists($offset)
 * @method static void offsetSet($offset, $value)
 * @method static mixed offsetGet($offset)
 * @method static mixed offsetUnset($offset)
 */
class Env extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return '\Think\Component\Env\Env';
    }
}