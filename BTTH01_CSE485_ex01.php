<!-- bai1 -->
<?php 
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

    function calculateAndDisplayResults($arr) {
        $sum = array_sum($arr);
        $product = array_product($arr);
        
        $difference = $arr[0];
        $division = $arr[0];
    
        foreach ($arr as $key => $value) {
            if ($key != 0) {
                $difference -= $value;
                $division /= $value;
            }
        }
    
        echo "Tổng các phần tử = " . implode(" + ", $arr) . " = $sum <br>";
        echo "Tích các phần tử = " . implode(" * ", $arr) . " = $product <br>";
        echo "Hiệu các phần tử = " . implode(" - ", $arr) . " = $difference <br>";
        echo "Thương các phần tử = " . implode(" / ", $arr) . " = $division <br>";
    }
    
    calculateAndDisplayResults($arrs);
    


?>

<!-- bai2 -->
<?php 
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $nguoi_yeu_thich = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    
    $result = '';
    foreach ($arrs as $key => $color) {
        $result .= "Màu $color là màu yêu thích của " . $nguoi_yeu_thich[$key];
        if ($key < count($arrs) - 1) {
            $result .= ', ';
        } else {
            $result .= '.';
        }
    }
    
    echo $result.'<br>';
    
?>
<!-- bai3 -->
<?php 
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];

    echo '<table border="1">
            <thead>
                <tr>
                    <th>Tên khóa học</th>
                </tr>
            </thead>
            <tbody>';
    
            foreach ($arrs as $key => $language) {
                echo '<tr>';
                echo '<td>' . $language . '</td>';  // Ngôn ngữ lập trình
                echo '</tr>';
            }
    
    echo '</tbody>
        </table>';
    
?>

<!-- bai4 -->
<?php 
    $arrs = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid",
        "Sweden" => "Stockholm",
        "United Kingdom" => "London",
        "Cyprus" => "Nicosia",
        "Lithuania" => "Vilnius",
        "Czech Republic" => "Prague",
        "Estonia" => "Tallin",
        "Hungary" => "Budapest",
        "Latvia" => "Riga",
        "Malta" => "Valetta",
        "Austria" => "Vienna",
        "Poland" => "Warsaw"
    );
    
    foreach ($arrs as $country => $capital) {
        echo "Thủ đô của $country là $capital<br>";
    }


?>
<!-- bai7 -->
<?php 
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

    foreach ($array as $number) {
        if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
            echo $number . " ";
        }
    }  
    
    echo '<br>';
?>

<!-- bai6 -->
<?php 
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array();

foreach ($keys as $key => $keyName) {
    $valueKey = $keyName . "value";
    if (array_key_exists($valueKey, $values)) {
        $keysAndValues[$keyName] = $values[$valueKey];
    }
}
echo "<pre>";
print_r($keysAndValues);
echo "</pre>";
?>


