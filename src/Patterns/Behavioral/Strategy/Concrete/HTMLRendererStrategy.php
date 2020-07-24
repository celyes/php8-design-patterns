<?php

namespace Patterns\Behavioral\Strategy\Concrete;

class HTMLRendererStrategy implements RendererStrategy
{
    /**
     * renderInput returns an escaped version of the input
     *
     * @param   string  $text  input to render
     *
     * @return  string         escaped input
     */

    public function renderInput(string $text): string
    {

        // render html - htmlspecialchars() is used only for illustration

        return htmlspecialchars($text);
    }
}
