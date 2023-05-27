<?php
    echo "Hello World!<br>";
    echo "Its really good<br>";
    // I am comment
    /*
    this
    is
    multiline
    comment
    */

    //variables
        $name = "Kostia";
        echo "Hello {$name}<br>";

        //integers
        $age = 19;  
        echo "I am {$age} years old<br>";

        //floats
        $weight = 5.5;
        echo "Has weight of {$weight} kilogramms<br>";
        $cost = 9.99;
        echo "Costs \${$cost}<br>";

        //booleans
        $online = false;
        $consumable = true;
        echo "Online status: {$online}<br>";
        echo "Is consumable: {$consumable}";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total"><br>
    </form>

    <form action="index.php" method="post">
        <label>Enter name of country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>


<?php
    // $_POST
    $item = "pizza";
    $price = 4.99;
    $total = null;
    $quantity = $_POST["quantity"];
    $total = $quantity * $price;
    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total} <br>";

    //if-statements
    if ($age>=18){
        echo "You may enter this site<br>";
    }
    else{
        echo "You mus be 18+ to enter<br>";
    }

     //function
    function week_pay(){
        $hours = 40;
        $rate = 15;
        $weekly_pay = null;

        if($hours<0){
            $weekly_pay = 0;
        }
        elseif($hours <= 40){
            $weekly_pay = $hours * $rate;
        }
        else{
            $weekly_pay =  ($rate * 40) + (($hours-40)* ($rate * 1.5));
        }

        echo "You made \${$weekly_pay}<br>";
    }

    week_pay();
?>
<?php
    $cars = array("Volvo", "BMW", "Toyota", "Nissan");
    foreach ($cars as $car){
        echo "{$car}<br>";
    }
    echo count($cars);
?>
<?php

    //associative array
    $capitals = array("Ukraine" => "Kyiv",
                       "Japan" => "Tokyo",
                       "Italy" => "Rome",);

    $capital = $capitals[$_POST["country"]];
    echo "{$capital} <br>";

?>



<?php
//Classes
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? <br>";
  }
}
$apple = new Fruit("Apple", "green");
$apple->intro();
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
