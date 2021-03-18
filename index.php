<?php

//require_once("ClassLoader.php");
//ClassLoader::getInstance()->register();

//use Shapes\Shape;
//use Shapes\Circle;
////use Shapes\Rectangle;
////use Shapes\Triangle;
//use Logger\Logger;

require_once("Shapes/Shape.php");
require_once("Shapes/Circle.php");
       // $loggerForShapes = Logger::getInstance("log.txt");
       // var_dump($loggerForShapes);
        try {
            $circle = new Circle(5);
            $circlePerimetr = $circle->getPerimetr();
            $circleSquare = $circle->getSquare();
//            $loggerForShapes->createLog("Круг: периметр = " . $circlePerimetr . " , площадь = " . $circleSquare);
        } catch(Exception $e) {
            echo $e->getMessage() . "<br>";
  //          $loggerForShapes->createLog($e->getMessage(), "FATAL");
        }
        
        $this->data("circlePerimetr", $circlePerimetr);
        $this->data("circleSquare", $circleSquare);
//        
        echo 'Круг создан!';

        
//        try {
//            $triangle = new Triangle(3, 3, 3);
//            $trianglePerimetr = $triangle->getPerimetr();
//            $triangleSpace = $triangle->getSpace();
//            $loggerForShapes->createLog("Был создан треугольник с периметром " . $trianglePerimetr . " и площадью " . $triangleSpace);
//        } catch(Exception $e) {
//            echo $e->getMessage() . "<br>";
//            $loggerForShapes->createLog($e->getMessage(), "FATAL");
//        }
//
//        $this->data("trianglePerimetr", $trianglePerimetr);
//        $this->data("triangleSpace", $triangleSpace);
//
//        try {
//            $rectangle = new Rectangle(4, 3);
//            $rectanglePerimetr = $rectangle->getPerimetr();
//            $rectangleSpace = $rectangle->getSpace();
//            $loggerForShapes->createLog("Был создан прямоугольник с периметром " . $rectanglePerimetr . " и площадью " . $rectangleSpace);
//        } catch(Exception $e) {
//            echo $e->getMessage() . "<br>";
//            $loggerForShapes->createLog($e->getMessage(), "FATAL");
//        }
//
//        $this->data("rectanglePerimetr", $rectanglePerimetr);
//        $this->data("rectangleSpace", $rectangleSpace);

        
 

