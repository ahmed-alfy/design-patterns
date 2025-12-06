<?php

namespace Structural\Bridge\TemplateRender;

class HTML implements TemplateRenderInterface
{
    public function render(array $data)
    {
        $html = "<h1>{$data['title']}</h1>";
        $html .= "<p>{$data['body']}</p>";

        return $html;
    }
}
