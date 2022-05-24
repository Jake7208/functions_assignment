<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>functions: Assignment pt 1-5</title>
    </head>
    <style>
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse; 
        }
    </style>
    <body>
    <?php

    function hello(){
        echo "Hello, World!<br />";// using echo to output "hello world"
    }
    
    hello();
    ?>
    <br />

    <?php // part 2

    function rectangle($length = "6", $width = "2") {// default values
        $area = $length * $width;// using $area to get the area of the rectangle
        return "A rectangle of length {$length} and width {$width} has an area of {$area}. <br />";
    }
    echo rectangle();
    echo rectangle(2,4)// making it use these values
    ?>

    <br />

    <?php // calling table and using the styles at top in order to add the border, td is used to create the cells
    function strings($var1 = "a", $var2 = "b", $var3 = "c", $var4 = "d") {
            $mytable = "<table><tr><td>{$var1}</td><td>{$var2}</td><td>{$var3}</td><td>{$var4}</td></tr></table>";
            return $mytable;
    }
    echo strings();
    echo strings(1,2,3,4)// set variables so not default values
    ?>

    <br />

    <?php // part 4 recreate
    function redo($arg1){
        echo "<p> {$arg1} </p>";// using echo to output "hello world"
    }
    function startSomething($arg1) {
        redo($arg1);
    }
    startSomething("Hello World");
    ?>
    <br />

    <?php // part 5 using a button and finding the reload page function online 
    function choice($d1) {// it produces rand numbers to decide output
        if ($d1 <= '200'){ 
            echo "low";
        }else {
            echo "high";
        }
    }
    echo choice(rand(0, 400));// selects random number to run through if statement
    
    ?>
    <button onClick="window.location.reload();">Refresh Page</button>
</body>
</html>