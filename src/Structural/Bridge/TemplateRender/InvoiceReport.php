<?php
namespace Structural\Bridge\TemplateRender;


class InvoiceReport extends Template
{
    public function  load()
    {
        $data = [
            'title' => "Invoice #12345",
            'body' => "Customer: Ahmed\nTotal: $1500"
        ];
        $this->setData($data);

        return $this;
    }
}
