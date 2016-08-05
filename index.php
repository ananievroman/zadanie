    <?php
    echo "Задание #1 <br><br>";

    $name = "Roman";
    $age = 28;

    echo "My name is $name <br>";
    echo "I am $age old <br>";
    echo "\" ! | \\ / ' \" \\ <br><br>";
    echo "<hr>";

    echo "Задание #2 <br><br>";
    $pictures = 80;
    $marker_pictures = 23;
    $pencil_pictures = 40;
    $color_pictures = $pictures - $marker_pictures - $pencil_pictures;

    echo " Na shkolnoy vistavke  risunkov kraskami bilo  $color_pictures <br><br>";
    echo "<hr>";

    echo "Задание #3 <br><br>";
    const SOME_CONST = 28;

    if (defined("SOME_CONST")){
        echo SOME_CONST . "<br>"; //
    }

    const SOME_CONST = 29;

    echo SOME_CONST ."<br><br>";
    echo "<hr>";


    echo "Задание #4 <br><br>";

    $age = 0;

    if($age >= 18 && $age <= 65){
        echo " <br> Вам еще работать и работать<br>";
    }
    if($age > 65){
        echo " <br> Вам пора на пенсию<br>";
    }
    elseif ($age > 1 && $age < 18){
        echo " <br> Вам еще рано работать<br>";
    }
    else{
        echo " <br> Неизвестный   возраст<br>";
    }
    echo "<hr>";


    echo "Задание #5 <br><br>";
    $day = 9;
    switch ($day) {
        case ($day >= 1 && $day <= 5):
            echo " <br> Это   рабочий   день<br>";
            break;
        case ($day >= 6 && $day <= 7):
            echo " <br> Это   выходной   день<br>";
            break;
        default:
            echo " <br> Неизвестный   день<br>";
            break;
    }
    echo "<hr>";


    echo "Задание #6 <br><br>";

    $bmv = [ "model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015"];
    $toyota = [ "model" => "Corola", "speed" => 135, "doors" => 5, "year" => "2009"];
    $opel = [ "model" => "Cadet", "speed" => 145, "doors" => 5, "year" => "2010"];
    $car = array_merge_recursive($bmv, $toyota, $opel);

    echo '<pre>';
    print_r($car);
    echo '</pre>';
    echo "CAR bmw<br>";
    foreach ($car as $item) {
        echo $item['0'].' ';
    }
    echo "<br>CAR Toyota<br>";
    foreach ($car as $item) {
        echo $item['1'].'';
    }
    echo "<br>CAR Opel<br>";
    foreach ($car as $item) {
        echo $item['2'].' ';
    }

    echo "<hr>";

    echo "Задание #7 <br><br>";

    echo "<table><tr>";
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            if($i % 2 == 0 && $j % 2== 0) {
                echo "<td>" . "(" . ($i * $j) . ")" . "</td>";
            }
            elseif($j %2  != 0 && $i % 2 != 0) {
                echo "<td>" . "[" . ($i * $j) ."]" . "</td>";
            }
            else{
                echo "<td>" . ($i * $j) . "</td>";
            }
        }
        if ($i != 10) echo "</tr><tr>";
    }
    echo "</tr></table><br><br>";
    echo "<hr>";


    echo "Задание #8 <br><br>";

    $str = "In God We Trust";
    echo $str ."<br>";
    $Array = explode(" ",$str);
    print_r($Array);
    echo "<br>";

    $kolichestvo_elementov_massiva = count($Array);


    while ($kolichestvo_elementov_massiva >= 0) {
        echo $Array[$kolichestvo_elementov_massiva] . '/';
        $kolichestvo_elementov_massiva--;
    }



    ?>