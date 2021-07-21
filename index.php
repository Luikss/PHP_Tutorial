<?php 
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <?php
        echo Person::$drinkingAge;
        Person::setDrinkingAge(21);
        echo Person::$drinkingAge;

        $person1 = new Person("Andre", "Gray", 24);
        echo $person1->getName();
        echo $person1->getDA();
        
        try {
            $person1->setName("2");
            echo $person1->getName();
        } catch (TypeError $e) {
            echo "Error!: " . $e->getMessage();
        }
    ?>

</body>
</html>