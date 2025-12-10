<?php

namespace Structural\Composite\CategoryExample;



class Category implements CategoryInterface, ActionsInterface
{


    public ?CategoryInterface $parent = null;
    /** @var Category[] */
    private array $children = [];


    public function  __construct(private string $name) {}
    public function getName(): string
    {
        return $this->name;
    }

    public function add(Category $category)
    {
        $category->setParent($this);
        $this->children[] = $category;
    }

    public function setParent(CategoryInterface $parent)
    {
        $this->parent = $parent;
    }

    public function getFullPath(): string
    {
        if ($this->parent === null) {
            return $this->getName();
        }

        return $this->parent->getFullPath() . ' > ' . $this->getName();
    }
}
