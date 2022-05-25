<?php

declare(strict_types=1);

namespace Src\Query;

use Src\Log\Log;
use Closure;
use Src\Query\Trait\Join;
use Src\Query\Trait\Table;
use Src\Query\Trait\Where;

abstract class SQLStatement
{
    use Table;
    use Where;
    use Join;

    protected string $sql = "";
    protected array $params = [];
    protected Closure|null $callback; 

    abstract protected function build();
    abstract public function exec();

    protected function clearQuery(){
        $this->sql = "";
        $this->params = [];
    }
}
