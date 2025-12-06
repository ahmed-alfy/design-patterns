<?php

namespace Structural\Bridge\TemplateRender;

class UserReport extends Template
{
    public function load()
    {
        $data = [
            'title' => "User Report",
            'body' => "Name: Ahmed Alalfy\nRole: Admin"
        ];
        $this->setData($data);

        return $this;
    }
}
