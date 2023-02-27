<html>
    <head>
        <title>hello world</title>
    </head>
    <body>
        <?php
        //to createan empty array. either of the following are equivalent
        $numbers1 = array();
        $numbers2 = [];
        //to create an array with predifined values
        $numbers3 = array(1, 2, 3, 4, 5);
        $numbers4 = [1, 2, 3, 4, 5];
        echo "printing array 3 <br>";
        foreach ( $numbers3 as $value) {
            echo "value is $value <br />";
        }

        echo "printing array 4 <br>";
        foreach ( $numbers4 as $value) {
            echo "value is $value <br />";
        }

        //to add values to an array
        $numbers1[0] = "one";
        $numbers1[1] = "two";
        // if you dont provide an indes PHP will do it
        $numbers2[] = "three";
        $numbers2[] = "four";

        echo "printing array 1<br>";
        foreach ( $numbers1 as $value) {
            echo "value is $value <br />";
        }echo "printing array 2 <br>";
        foreach ( $numbers2 as $value) {
            echo "value is $value <br />";
        }
        echo("<br>");
        ?>
        <a href="index.php"> return to main page </a>
    </body>
    </html>