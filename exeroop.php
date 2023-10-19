<?php
    class Car
{
    private $color = 'red';
    private $numberOfTires = 4;
    public static $country = "Canadá"; 
    public function __construct($color) 
    {
        $this->color = $color;
    }
    public function __destruct()
    {
        echo "<br> O objeto está sendo destruído!";
    }
    public function setColor($val)
    {
        $this->color = $val;
    }
    public function getColor()
    {
        return $this->color;
    }
}
    $bmw = new Car("white");
    // echo $bmw->color;
    echo $bmw->getColor();
    $bmw->setColor("black");
    echo "<br>";
    echo $bmw->getColor();
    echo "<br>";
    echo Car::$country;
    echo "<br>";
?>
