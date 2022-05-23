<?php

declare(strict_types=1);

namespace Src\Query;

use Src\Query\Trait\Column;
use Src\Query\Trait\Join;
use Src\Query\Trait\Table;
use Src\Query\Trait\Where;

final class SubQuery
{

    use Column;
    use Table;
    use Where;
    use Join;

    public function select($columns)
    {
        $this->column($columns);
        return $this;
    }

    public function build()
    {
        $str = "SELECT ";
        $str .= $this->buildColumn();
        $str .= "FROM ";
        $str .= $this->buildTable();
        // $sql .= $this->getJoins(). " ";
        // $sql .= $this->getWheres() . " ";
        // $sql .= $this->getSorts() . " ";
        // $sql .= $this->getLimits() . " ";

        var_dump("---subquery---");
        var_dump($str);

        return $str;
    }

}
