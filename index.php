<?php include "classes.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hejsan

    <form method="POST">
    <input type="text" name="firstname"/>
    <input type="text" name="firstname"/>
    <input type="number" name="firstname"/>
    </form>
    <?php 
    $jenny = new Person('Jenny', 'Jäderborn', '986');
    $jenny->writePerson();

    
    ?>
</body>
</html>