<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 100px;
            text-transform: uppercase;
        }
        form {
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(211, 211, 211, 0.7);
            width: 350px;
            height: 250px;
        }
        input {
            width: 300px;
            height: 30px;
            margin: 10px;
        }
        button {
            width: 200px;
            height: 35px;
            margin: auto;
            border: none;
            background-color: #155E70;
            color: white;
            font-family: times;
            text-transform: uppercase;
            font-size: 12px;
        }
        

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<h1> Välkommen</h1> 
<div class="wrapper">
    <form method="POST">
        <input type="text" placeholder=" Förnamn" name="firstname"/>
        <input type="text" placeholder=" Efternamn" name="lastname"/>
        <input type="number" placeholder=" Personnummer(YY/MM/DD)" name="number"/>
        <button type="submit">Skicka formuläret</button>
    </form> 

    <?php   
    

 ?>
 </div>
</body>
</html>
