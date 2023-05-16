<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <div class="contsiner">this is my first php website
        <?php
        define('PI', 3.14);
        //echo "hello world"

        $variable1 =  34;
        $variable2 =  45;
        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;

        //$myvar = (true) and (true)
        $myvar = (false) and (true);
        //  $myvar = (false) and (false);
        //  $myvar = (true) xor (true);
         echo "<br>";
         echo var_dump($myvar);

         //datatypes in php
        // string,integers, float,boolean,aaray,object
        echo "<br>data types <br>";
        $var = "this is a string";
        echo var_dump($var);
        $var = 81;
        echo "<br>";
        echo var_dump($var);
        echo var_dump($var);
        echo "<br>";
        $var = 81.6;
        echo var_dump($var);
        echo PI;

        ?>
    </div>
</body>
</html>