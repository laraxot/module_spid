<?php

declare(strict_types=1);

namespace Modules\Spid\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class SpidServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $module_name = 'spid';
}
