<?php 

namespace Patterns\Behavioral\Strategy;

class Context
{
    public function __construct($comparer)
    {
        $this->comparer = $comparer;
    }
    public function execute($elements)
    {
        uasort($elements, [$this->comparer, 'compare']);
        return $elements;
    }
}