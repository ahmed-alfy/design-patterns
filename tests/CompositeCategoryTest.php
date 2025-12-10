<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Composite\CategoryExample\Category;

class CompositeCategoryTest extends TestCase
{
    public function testCategoryComposite()
    {
        $root = new Category('Electronics');

        $laptops = new Category('Laptops');
        $smartphones = new Category('Smartphones');

        $gamingLaptops = new Category('Gaming Laptops');
        $ultraBooks = new Category('UltraBooks');

        $iphone = new Category('iPhone');
        $androidPhones = new Category('Android Phones');

        $root->add($laptops);
        $root->add($smartphones);

        $laptops->add($gamingLaptops);
        $laptops->add($ultraBooks);

        $smartphones->add($iphone);
        $smartphones->add($androidPhones);

        $this->assertEquals('Electronics', $root->getName());

        $this->assertEquals('Electronics > Laptops > Gaming Laptops', $gamingLaptops->getFullPath());
        $this->assertEquals('Electronics > Laptops > UltraBooks', $ultraBooks->getFullPath());

        $this->assertEquals('Electronics > Smartphones > iPhone', $iphone->getFullPath());
        $this->assertEquals('Electronics > Smartphones > Android Phones', $androidPhones->getFullPath());
    }
}
