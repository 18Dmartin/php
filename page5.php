<html>
    <head>
        <title>hello world</title>
    </head>
    <body>
        <?php
       
        $salaries = array();
        $salaries2 = [];
        /* first method to associate create array.
        the text to the leftof the arrow is the 'index' into the array.
        the value to the right of the arrow us the vale at that 'index' position */
        $salaries = array("john" => 2000, "paul" => 1000, "george" =>550);
        echo "Salary of john is ". $salaries['john'] . "<br />";
        echo "Salary of paul is ". $salaries['paul'] . "<br />";
        echo "Salary of george is ". $salaries['george'] . "<br />";

        /* second method to ccreate a array. the index is in the word in []
        and the value is assigned on the right hand of the = */ 
        $salaries2['john'] = "high";
        $salaries2['paul'] = "medium";
        $salaries2['george'] = "low";

        echo "Salary of john is ". $salaries2['john'] . "<br />";
        echo "Salary of paul is ". $salaries2['paul'] . "<br />";
        echo "Salary of george is ". $salaries2['george'] . "<br />";

    //unset($salaries['Paul]); ------ Delete the item paul from the array
    //unser($salaries2); --------delete the entire array %saleries2
        echo("<br>");
        ?>
        <a href="index.php"> return to main page </a>
    </body>
    </html>