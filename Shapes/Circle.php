<?php
namespace Shapes;

use Exception;

class Circle extends Shape
{
    private $radius;
    public function __construct(float $radius)
    {   
        if ($this->verifyParameters($radius)) {
            $this->radius = $radius;
        }
    }

    public function getPerimetr()
    {
        return 2 * M_PI * $this->radius;
    }

    public function getSquare()
    {
        return $this->radius * $this->radius * M_PI;
    }

    private function verifyParameters($radius)
    {
        if ($radius <= 0) {
            throw new Exception ("Радиус круга должен быть больше 0!");
        } else {
            return true;
        }
    }
}
