<?php

namespace tests;

use houdunwang\page\Page;
use PHPUnit\Framework\TestCase;

/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com  www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
class BaseTest extends TestCase
{
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        Page::row(3)->make(10);
    }

    public function testTotalPage()
    {
        $this->assertEquals(4, Page::getTotalPage());
    }

    public function testLimit()
    {
        $this->assertEquals('0,3', Page::limit());
    }
}