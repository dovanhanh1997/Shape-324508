<?php
include_once 'Shape.php';
include_once 'Rectangle.php';
include_once 'Square.php';
include_once 'Circle.php';
include_once 'Cylinder.php';
$shape=new Shape('Shape');
echo $shape->show();
?>
<br><br>
<?php
$rectangle = new Rectangle('Rectangle',200,250);
echo $rectangle->show().'<br>';
echo 'Area of Rectangle: '.$rectangle->calculateArea().'<br>';
echo 'Perimeter of Rectangle: '.$rectangle->calculatePerimeter();

?>
    <br><br>
<?php
$square = new Square('Square',200,200);
echo $square->show().'<br>';
echo 'Area of Square: '.$square->calculateArea().'<br>';
echo 'Perimeter of Square: '.$square->calculatePerimeter();
?>
    <br><br>
<?php
$circle = new Circle('Circle',100);
echo $circle->show().'<br>';
echo 'Area of Circle: '.$circle->calculateArea().'<br>';
echo 'Perimeter of Circle: '.$circle->calculatePerimeter();
?>
    <br><br>
<?php
$cylinder = new Cylinder('Cylinder',200,100);
echo $cylinder->show().'<br>';
echo 'Area of Cylinder: '.$cylinder->calculateArea().'<br>';
echo 'Volume of Cylinder: '.$cylinder->calculateVolume();