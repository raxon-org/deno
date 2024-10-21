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
//        $command = 'curl -fsSL https://deno.land/install.sh | sh';
//        exec($command, $output);
//        echo implode(PHP_EOL, $output) . PHP_EOL;
        $object = $this->object();
        $command = 'app zip extract ' . $object->config('project.dir.vendor') . 'raxon/deno/src/Data/deno.zip' . ' /usr/local/bin/deno';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
//        $command = 'cp ~/.deno/bin/deno /usr/local/bin/deno';
//        exec($command, $output);
//        echo implode(PHP_EOL, $output) . PHP_EOL;
        $command = 'deno --version';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
    }
}

