<?php
namespace Shapes;

use Exception;

class Triangle extends Shape 
{
    private $firstSide; 
    private $secondSide;
    private $thirdSide;

    public function __construct(float $firstSide, float $secondSide, float $thirdSide)
    {
        if ($this->verifyParameters($firstSide, $secondSide, $thirdSide)) {       
            $this->firstSide = $firstSide;
            $this->secondSide = $secondSide;
            $this->thirdSide = $thirdSide;
        }
    }
    public function getPerimetr()
    {
        return $this->firstSide + $this->secondSide + $this->thirdSide;
    }
    public function getSquare()
    {
        $halfPerimetr = $this->getPerimetr() / 2;
        $space = sqrt($halfPerimetr * ($halfPerimetr - $this->firstSide) * ($halfPerimetr - $this->secondSide) * ($halfPerimetr - $this->thirdSide));
        return $space;
    }

    private function verifyParameters($firstSide, $secondSide, $thirdSide)
    {
        if ($firstSide + $secondSide > $thirdSide && $secondSide + $thirdSide > $firstSide && $thirdSide + $firstSide > $secondSide) {
            return true;
        } else {
            throw new Exception ("Фигура не возможна. Нарушается правило треугоьника.");
        }
    }
}
