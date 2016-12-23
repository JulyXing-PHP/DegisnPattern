<?php
/**
 * 单例模式。
 *
 * @author   JulyXing <julyxing.io@gmail.com>
 * @license  GPL-3.0 +
 */

namespace DegisnPattern\Singleton;

final class Singleton
{
    /**
     * 唯一实例。
     *
     * @var Singleton
     */
    private static $instance;

    /**
     * 通过延迟加载（用到时才加载）获取实例。
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 构造函数私有，不允许外部实例化。
     */
    private function __construct()
    {
    }

    /**
     * 克隆对象，不允许外部调用。
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * 防止被反序列化。
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
