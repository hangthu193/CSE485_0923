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

<!-- bai8 -->
<?php 
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = 0;
$minLength = PHP_INT_MAX;
$longestString = '';
$shortestString = '';

foreach ($array as $string) {
    $length = strlen($string);

    if ($length > $maxLength) {
        $maxLength = $length;
        $longestString = $string;
    }

    if ($length < $minLength) {
        $minLength = $length;
        $shortestString = $string;
    }
}

echo "Chuỗi lớn nhất là $longestString, độ dài = $maxLength<br>";
echo "Chuỗi nhỏ nhất là $shortestString, độ dài = $minLength<br>";
?>
<!-- bai9 -->
<?php 
    function convertToLower($arr) {
        return array_map('strtolower', $arr);
    }
    
    $arr1 = ['a', 'b', 'ABC'];
    $result1 = convertToLower($arr1);
    echo "Kết quả cho mảng arr1: <br>";
    print_r($result1);
    
    $arr2 = ['1', 'B', 'C', 'E'];
    $result2 = convertToLower($arr2);
    echo "<br>";
    echo "Kết quả cho mảng arr2: ";
    print_r($result2);
    
    $arr3 = ['a', 0, null, false];
    $result3 = convertToLower($arr3);
    echo "<br>";
    echo "Kết quả cho mảng arr3: ";
    print_r($result3);
    
    echo "<br>";
    
?>
<!-- bai10 -->
<?php  
    function convertToUpper($arr) {
        return array_map('strtoupper', $arr);
    }
    
    $arr1 = ['a', 'b', 'ABC'];
    $result1 = convertToUpper($arr1);
    echo "<br>";
    echo "Kết quả cho mảng arr1: ";
    print_r($result1);
    
    $arr2 = ['1', 'b', 'c', 'e'];
    $result2 = convertToUpper($arr2);
    echo "<br>";
    echo "Kết quả cho mảng arr2: ";
    print_r($result2);
    
    $arr3 = ['a', 0, null, false];
    $result3 = convertToUpper($arr3);
    echo "<br>";
    echo "Kết quả cho mảng arr3: ";
    print_r($result3);
    echo "<br>";

?>
<!-- bai 11 -->
<?php 
    $array = array(1, 2, 3, 4, 5); 
    array_splice($array, 2, 1);
    $array = array_values($array);
    echo "<pre>";  
    print_r($array);
    echo "</pre>";
?>
<!-- bai12 -->
<?php 
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
        ];
    $firstElement = reset($numbers);
    $lastElement = end($numbers);
    
    echo "Phần tử đầu tiên: $firstElement <br>";
    echo "Phần tử cuối cùng: $lastElement <br>";

    $maxValue = max($numbers);
    $minValue = min($numbers);
    $total = array_sum($numbers);

    echo "Số lớn nhất: $maxValue <br>";
    echo "Số nhỏ nhất: $minValue <br>";
    echo "Tổng các giá trị: $total <br>";

    $ascendingValues = $numbers;
    sort($ascendingValues);

    $descendingValues = $numbers;
    rsort($descendingValues);
    echo "<br>";
    echo "Sắp xếp mảng theo chiều tăng các giá trị: ";
    echo "<pre>";
    print_r($ascendingValues);
    echo "</pre>";

    echo "Sắp xếp mảng theo chiều giảm các giá trị:";
    echo "<pre>";
    print_r($descendingValues);
    echo "</pre>";

    $ascendingKeys = $numbers;
    ksort($ascendingKeys);

    $descendingKeys = $numbers;
    krsort($descendingKeys);
    echo "<br>";
    echo "Sắp xếp mảng theo chiều tăng các key: ";
    echo "<pre>";
    print_r($ascendingKeys);
    echo "</pre>";

    echo "<br>";
    echo "Sắp xếp mảng theo chiều giảm các key:";
    echo "<pre>";
    var_dump($descendingKeys);
    echo "</pre>";

    
?>
<!-- bai13 -->
<?php 
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $average = array_sum($numbers) / count($numbers);
    
    echo "Giá trị trung bình của mảng là: $average<br>";
    
    echo "Các số lớn hơn giá trị trung bình:<br>";
    foreach ($numbers as $number) {
        if ($number > $average) {
            echo "$number ";
        }
    }
    echo "<br>";
    
    echo "Các số nhỏ hơn hoặc bằng giá trị trung bình:<br>";
    foreach ($numbers as $number) {
        if ($number <= $average) {
            echo "$number ";
        }
    }
    echo "<br>";
?>
    <!-- bai14 -->
<?php
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    $array2 = [
        'giá trị 1', 'giá trị 2'
    ];
    
    $result = [];
    
    foreach ($array2 as $key => $value) {
        $result[$key] = array_merge([$value], $array1[$key]);
    }
    echo "<br>";
    print_r($result);
    echo "<br>";
    
    
?>

