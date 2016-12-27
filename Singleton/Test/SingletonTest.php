<?php
/**
 * 单例模式单元测试。
 *
 * @author   JulyXing <julyxing.io@gmail.com>
 * @license  GPL-3.0 +
 */

namespace DesignPattern\Singleton\Test;

use PHPUnit_Framework_TestCase as PHPUnit;
use DesignPattern\Singleton\Singleton;

class SingletonTest extends PHPUnit
{
    /**
     * 测试对象是否相同。
     *
     * @return bool
     */
    public function testUniqueness()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();

        $this->assertInstanceOf('DesignPattern\Singleton\Singleton', $first);
        $this->assertSame($first, $second);
    }
}
