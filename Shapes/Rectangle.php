<?php
namespace Shapes;

use Exception;

class Rectangle extends Shape 
{
    private $width;
    private $height;
    public function __construct(float $width, float $height)
    {
        if ($this->verifyParameters($width, $height)) {
            $this->width = $width;
            $this->height = $height;
        }
    }

    public function getPerimetr()
    {
        return ($this->width + $this->height)*2;
    }

    public function getSquare()
    {
        return $this->width * $this->height;
    }

    private function verifyParameters($width, $height){
        if ($width < 0 || $height < 0) {
            throw new Exception ("Ширина и высота должны быть положительными и больше нуля!");
        } else {
            return true;
        }
    }
}
