<?php

namespace Patterns\Behavioral\Strategy;

class Renderer
{
    /**
     * $strategy: the strategy to use
     *
     * @var object
     */

    private $strategy;
    /**
     *
     * @param   object  $strategy  the strategy to use
     *
     * @return  void
     */

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * return the rendered input
     *
     * @param   string  $text  input to render
     *
     * @return  string         the rendered input
     */

    public function render(string $text)
    {
        return $this->strategy->renderInput($text);
    }
}
