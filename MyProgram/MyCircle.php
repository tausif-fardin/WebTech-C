<?php

class MyCircle
{
    private $radius = 0;

    public function __construct($radius = 1)
    {
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->$radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getArea()
    {
        return $this->radius * $this->radius * 3.1416;
    }

    public function __toString()
    {
        return $this->getArea();
    }
}

$c1 = new MyCircle();
$c1->setRadius(8);
echo "Area is " . $c1->__toString();
?>