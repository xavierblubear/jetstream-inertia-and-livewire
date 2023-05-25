<?php

namespace Modules\Inventory\Domain\Entities;

use Modules\Shared\Domain\Traits\ArrayConvertibleTrait;

class BrandEntity
{
    use ArrayConvertibleTrait;

    private $id;
    private $name;

    public function __construct($id = null, $name) {
        $this->id = $id;
        $this->name = $name;
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
}
