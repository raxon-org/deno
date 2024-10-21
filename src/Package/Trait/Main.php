<?php
namespace Package\Raxon\Deno\Trait;

use Raxon\App;

use Raxon\Module\Core;
use Raxon\Module\File;

use Raxon\Node\Model\Node;

use Exception;
trait Main {

    /**
     * @throws Exception
     */
    public function deno_install(): void
    {
        Core::interactive();
        $object = $this->object();
        $command = 'cp ' . $object->config('framework.dir.vendor') . 'raxon/deno/Data/deno /usr/local/bin/deno';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
        $command = 'deno --version';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
    }
}

