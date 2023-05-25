<?php

namespace Modules\Inventory\Domain\Entities;

class CarFilters
{
    private $transmissions;
    private $brandsIds;

    public function __construct($transmissions = null, $brandsIds = null)
    {
        $this->transmissions = $transmissions;
        $this->brandsIds = $brandsIds;
    }

    public function setTransmissions($transmissions) {
        $this->transmissions = $transmissions;
    }

    public function getTransmissions() {
        return $this->transmissions;
    }

    public function setBrandsIds($brandsIds) {
        $this->brandsIds = $brandsIds;
    }

    public function getBrandsIds() {
        return $this->brandsIds;
    }
}