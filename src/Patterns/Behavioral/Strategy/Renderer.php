<?php

namespace Patterns\Behavioral\Strategy;

use Patterns\Behavioral\Strategy\Concrete\RendererStrategy;

class Renderer
{
    /**
     *
     * @param   RendererStrategy  $strategy  the strategy to use
     *
     * @return  void
     */

    public function __construct(private RendererStrategy $strategy)
    {
    }

    /**
     * return the rendered input
     *
     * @param   string  $text  input to render
     *
     * @return  string|false         the rendered input
     */

    public function render(string $text): string | false
    {
        return $this->strategy->renderInput($text);
    }
}
