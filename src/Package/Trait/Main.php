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
        $command = 'cp ' . $object->config('project.dir.vendor') . 'raxon/deno/src/Data/deno.zip ~/deno.zip';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
        $command = 'app zip extract ~/deno.zip /usr/local/bin/deno';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
//        $command = 'cp ~/.deno/bin/deno /usr/local/bin/deno';
//        exec($command, $output);

        $command = 'deno --version';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
    }
}

