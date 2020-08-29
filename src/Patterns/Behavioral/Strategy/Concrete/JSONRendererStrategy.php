<?php

namespace Patterns\Behavioral\Strategy\Concrete;

class JSONRendererStrategy implements RendererStrategy
{
    /**
     * renderInput returns the input as json
     *
     * @param   string  $text  input to render
     *
     * @return  string         JSON input
     */

    public function renderInput(string $text): string
    {
        return json_encode(['message' => $text]);
    }
}
