<?php

namespace Tests\Commands\Upgrade\V6_10_0;

use App\Models\Config;
use Artisan;

class CommandTest extends \Tests\Commands\Upgrade\TestCase
{
    public function testCommand()
    {
        Artisan::call('upgrade:v6.10.0');

        static::assertSame('filesystems.disks.oss.access_key', Config::where('id', 160)->value('name'));
        static::assertSame('filesystems.disks.oss.secret_key', Config::where('id', 161)->value('name'));
    }
}
