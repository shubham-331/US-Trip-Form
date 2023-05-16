<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: bordr-box;
    }
    .container{
        max-width: 80%;
        background-color: green;
        margin: auto;
        padding: 23px;
    }
    </style>
<body>
    <div class="container">
        <h1>lets learn about php</h1>
        <p>your party status is here</p>
    <?php
    $age = 3;
    if($age>18){
        echo "you can go to party";
    }
    else if($age==7){
        echo "you are 7 years old";
    }
    else{
        echo "you can not go to the party";
    }
    // arrays in php
    $languages = array ("python", "c++", "php",);
    // echo count($languages);

    // loops in php
    $a = 0;
    while ($a <= 20){
        echo "<br>the value of a is: ";
        echo $a;
        $a++;
    }

    foreach ($languages as $value){
        echo "the value is for each loop is";
        echo $value;
    }

    function print5(){
        echo "five";
    }
    print5();
    ?>
    </div>
    
</body>
</html> 