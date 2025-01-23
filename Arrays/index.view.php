<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$title?></h1>

    <pre><?=
            var_dump($array1),
            print_r($array2, true),
            print_r($distance, true);
            foreach($array2 as $key => $value) 
            {
                var_dump("$key -> $value");
            };
            echo '<hr>';
            foreach($array2d as $iterator)
            {
                foreach($iterator as $iterator)
                {
                    echo "$iterator\t";
                }
                echo '<br>';
            }

            echo '<hr>';
            
             //1
            print_r($arr_1);
            print_r("array sum = ".array_sum($arr_1)."\n");
            print_r("array min = ".min($arr_1)."\n");
            print_r("array max = ".max($arr_1)."\n");
            echo '<hr>';

            //2
            print_r($arr_2);
            print_r(array_count_values($arr_2));
            echo '<hr>';

            //3
            print_r($arr_3);
            print_r("2d array sum = $dsum\n");
            print_r("2d array min = $dmin\n");
            print_r("2d array max = $dmax\n");
            echo '<hr>';

            //4
            print_r($arr_4);
            print_r(array_count_values(array_merge(...$arr_4)));

    ?></pre>
</body>
</html>