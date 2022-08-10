<?php

namespace Patterns\Behavioral\Strategy;

class Renderer
{
    /**
     *
     * @param   object  $strategy  the strategy to use
     *
     * @return  void
     */

    public function __construct(private $strategy)
    {
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
