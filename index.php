

<?php

include 'header.php';
include 'footer.php';

if(isset($_COOKIE["user"])){
    echo"cookie is set<br/>";
    header('location:myhoroscope.php');
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $user = array($_POST['firstname'], $_POST['lastname'], $_POST['number']);
    print_r($user);

    if(!isset($_COOKIE["user"]))
    {
        setcookie("user", serialize($user), time()+3600);
        echo "cookie is not set";
        header('location:myhoroscope.php');

    }

}

include "classes.php";

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
    
    <form method="POST">
    <h2>Fyll i för att se ditt stjärntecken</h2>
    <input type="text" placeholder="Förnamn" name="firstname"/>
    <input type="text" placeholder="Efternamn" name="lastname"/>
    <input type="number" placeholder="YYMMDD" name="number"/>
    <input type="submit" value="send"/>
    </form>


    <?php 


    //$jenny = new Person('Jenny', 'Jäderborn', '986');
    //$jenny->writePerson();

    
    ?>
</body>
</html>