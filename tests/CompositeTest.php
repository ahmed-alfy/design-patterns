<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Composite\BigBox;
use Structural\Composite\GiftBox;
use Structural\Composite\SimpleBox;

class CompositeTest extends TestCase
{

    public function testCanGetTotalPriceOfPackageTree()
    {

        $product1 = new SimpleBox(300);
        $product2 = new SimpleBox(150);
        $productWithGift = new GiftBox(150, 10);
        $package = new BigBox([$product1, $product2, $productWithGift]);

        $totalPrice = $package->getPrice();

        $this->assertEquals(610, $totalPrice);
    }

    public function testCanGetTotalPriceOfPackageTreeWithActions()
    {

        $product1 = new SimpleBox(300);
        $product2 = new SimpleBox(150);
        $package = new BigBox([$product1, $product2]);
        $productWithGift = new GiftBox(150, 10);

        $package->add($productWithGift);
        $package->add($product2);
        $package->remove($product1);
        $totalPrice = $package->getPrice();

        $this->assertEquals(460, $totalPrice);
    }
}
