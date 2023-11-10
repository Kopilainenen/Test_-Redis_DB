<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        Cache:: put('example', 'my_string');

        $str = Cache::get('example');
        Cache::put('example', $str . 'new');
        Cache::forget('example');
        $str = Cache::get('example');

        dd($str);

    }
}
