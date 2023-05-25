<?php

namespace Modules\Inventory\Domain\Entities;

use Modules\Shared\Domain\Traits\ArrayConvertibleTrait;

class CarEntity
{
    use ArrayConvertibleTrait;

    private $id;
    private $name;
    private $year;
    private $kilometers;
    private $transmission;
    private $price;
    private $brand;

    public function __construct($id = null, $name, $year, $kilometers, $transmission, $price, BrandEntity $brand = null) {
        $this->id = $id;
        $this->name = $name;
        $this->year = $year;
        $this->kilometers = $kilometers;
        $this->transmission = $transmission;
        $this->price = $price;
        $this->brand = $brand;
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

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getKilometers() {
        return $this->kilometers;
    }

    public function setKilometers($kilometers) {
        $this->kilometers = $kilometers;
    }

    public function getTransmission() {
        return $this->transmission;
    }

    public function setTransmission($transmission) {
        $this->transmission = $transmission;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand(BrandEntity $brand) {
        $this->brand = $brand;
    }
}
