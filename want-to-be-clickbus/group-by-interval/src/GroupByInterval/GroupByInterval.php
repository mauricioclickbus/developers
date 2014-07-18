<?php

namespace Mvieira\GroupByInterval;

use \InvalidArgumentException;

class GroupByInterval
{

    private $range;
    private $numberSet = array();

    public function __construct($range, $numberSet)
    {
        $this->range = $range;
        $this->numberSet = $numberSet;
    }

    public function orderSet()
    {
        $orderedSet = array([5]);

        return $orderedSet;
    }
}
?>
