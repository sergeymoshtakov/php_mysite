<DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
            // $arr = [1, 2, 3, 4, 5];
            // print_r($arr);
            // echo "Length of array is: " . count($arr) . "<br>";

            // $headers = getallheaders();
            // foreach ($headers as $name => $value) {
            //     echo "$name: $value <br>";
            // }

            function AddNumber($a, $b) {
                return $a + $b;
            }

            echo AddNumber(1, 2);
        ?>
    </body>
</html>