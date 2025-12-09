<?php

namespace Structural\Composite;


class BigBox implements ProductInterface, ActionsInterface
{

    /**
     * @var ProductInterface[]
     */
    public array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getPrice(): float
    {
        $total = 0;


        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }


    public function add(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function remove(ProductInterface $product)
    {
        $this->products = array_filter($this->products, function ($item) use ($product) {
            return $item !== $product;
        });
    }
}
