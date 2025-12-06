<?php

namespace Structural\Bridge\TemplateRender;


abstract class Template
{

    private array $data = [];
    public function __construct(public TemplateRenderInterface $template) {}

    public abstract function load();

    public function getData(): array
    {
        return $this->data;
    }
    public function setData($data): void
    {
        $this->data = $data;
    }
    public function render()
    {
        return  $this->template->render($this->getData());
    }
}
