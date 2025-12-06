<?php

namespace Structural\Bridge\TemplateRender;

class JSON implements TemplateRenderInterface
{
    public function render(array $data): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
