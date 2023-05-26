<?php

namespace Modules\Inventory\Domain\Entities;

use Modules\Shared\Domain\Traits\ArrayConvertibleTrait;

class BrandEntity
{
    use ArrayConvertibleTrait;

    private $id;
    private $name;
    private $slug;

    public function __construct($id = null, $name, $slug) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSlug()
    {
        return $this->slug;
    }
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }
}
