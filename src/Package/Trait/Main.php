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
        $command = 'curl -fsSL https://deno.land/install.sh | sh';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
    }
}

