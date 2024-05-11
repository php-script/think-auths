<?php

/*
 * This file is part of the tp5er/think-auth
 *
 * (c) pkg6 <https://github.com/pkg6>
 *
 * (L) Licensed <https://opensource.org/license/MIT>
 *
 * (A) zhiqiang <https://www.zhiqiang.wang>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace tp5er\think\auth\commands;

use think\console\command\Make;

class MakePolicy extends Make
{
    protected $type = "policy";

    protected function configure()
    {
        parent::configure();
        $this->setName('make:policy')
            ->setDescription('Create a new policy class');
    }

    protected function getStub()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'stubs' . DIRECTORY_SEPARATOR . 'class_policy.stub';
    }
    protected function getNamespace(string $app): string
    {
        return parent::getNamespace($app) . '\\policies';
    }
}
