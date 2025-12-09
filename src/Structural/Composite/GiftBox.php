<?php

namespace Structural\Composite;


class GiftBox implements ProductInterface, GiftInterface
{

    public function  __construct(public float $price, public float $giftPrice) {}

    public function getPrice(): float
    {
        return $this->price + $this->giftPackagePrice();
    }

    public function giftPackagePrice(): float
    {
        return $this->giftPrice;
    }
}
