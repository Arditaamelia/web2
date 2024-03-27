<?php
class Rectangle 
{
    // atribut
    public $width;
    public $height;

    // method
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getDetail()
    {
        echo "Width: $this->width <br>";
        echo "Height: $this->height <br>";
        echo "Area: " . $this->calculateArea() . "<br>";
        echo "Perimeter: " . $this->calculatePerimeter() . "<br>";
        echo "<br> =========================== <br>";
    }

    // menghitung luas
    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    // menghitung keliling
    public function calculatePerimeter()
    {
        return 2 * ($this->width + $this->height);
    }
} 

// membuat objek persegi panjang
$rectangle1 = new Rectangle(5, 8);
$rectangle1->getDetail();

$rectangle2 = new Rectangle(10, 15);
$rectangle2->getDetail();
