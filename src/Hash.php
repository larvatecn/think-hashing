<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan JiYuan Information Technology Co., Ltd.
 * @link https://www.yaoqiyuan.com/
 */

namespace Larva\Hashing;

use think\Facade;

/**
 * Class Hash
 * @method static string make($value, array $options = [])
 * @method static bool check($value, $hashedValue, array $options = [])
 * @mixin HashManager
 */
class Hash extends Facade
{
    /**
     * 获取当前Facade对应类名
     * @access protected
     * @return string
     */
    protected static function getFacadeClass(): string
    {
        return HashManager::class;
    }
}