<?php 

namespace Patterns\Behavioral\Strategy\Concrete;

interface RendererStrategy 
{
    public function renderInput(string $text): string;    
}