<?php
/**
 * Created by : PhpStorm
 * Web: https://www.kaadon.com
 * User: ipioo
 * Date: 2021/6/17 00:31
 */

namespace Kaadon\baseCurd\BaseClass;


use Kaadon\baseCurd\Traits\Cache\CacheCurd;

class KaadonCache
{
    use CacheCurd;
    public $config = [
        'CacheKey' => 'KaadonCache',
        'CacheExp' => 24,
        'CacheStore' => 'redis',
    ];
}