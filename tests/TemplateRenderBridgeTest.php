<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\TemplateRender\HTML;
use Structural\Bridge\TemplateRender\InvoiceReport;
use Structural\Bridge\TemplateRender\JSON;
use Structural\Bridge\TemplateRender\UserReport;

class TemplateRenderBridgeTest extends TestCase
{


    public function testCanRenderInvoiceReportAsHtml()
    {
        $render = new HTML();
        $template = new InvoiceReport($render);
        $expected = "<h1>Invoice #12345</h1><p>Customer: Ahmed\nTotal: $1500</p>";
        $this->assertEquals($expected, $template->load()->render());
    }

    public function testCanRenderInvoiceReportAsJson()
    {
        $render = new JSON();
        $template = new InvoiceReport($render);
        $expected = json_encode([
            'title' => "Invoice #12345",
            'body' => "Customer: Ahmed\nTotal: $1500"
        ],JSON_PRETTY_PRINT);
        $this->assertEquals($expected, $template->load()->render());
    }

    public function testCanUserReportReportAsHtml()
    {
        $render = new HTML();
        $template = new UserReport($render);
        $expected = "<h1>User Report</h1><p>Name: Ahmed Alalfy\nRole: Admin</p>";

        $this->assertEquals($expected, $template->load()->render());
    }

    public function testCanUserReportReportAsJson()
    {
        $render = new JSON();
        $template = new UserReport($render);
        $expected = json_encode([
            'title' => "User Report",
            'body' => "Name: Ahmed Alalfy\nRole: Admin"
        ],JSON_PRETTY_PRINT);
        $this->assertEquals($expected, $template->load()->render());
    }
}
