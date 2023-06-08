<?php
// cau 1 kiem tra so chan
function checkEvenNumber($number)
{

    if ($number % 2 == 0) {

        return "$number là số chẵn";
    } else {

        return "$number không là số chẵn";
    }
}

$numberToCheck = 7;
$result = checkEvenNumber($numberToCheck);
echo $result ;

// cau 2 tinh tong n
function sum($n)
{
    $sumN = 0;

    for ($i = 1; $i <= $n; $i++) {

        $sumN += $i;
    }

    return $sumN;
}
$n = 99;
$sumN = sum($n);
echo "Tổng các số từ 1 đến $n là: $sumN". "<br.";

//cau 3 in ra bang cuu chuong tu 1-10
function multiplication()
{

    for ($i = 1; $i <= 10; $i++) {

        echo "Bảng cửu chương của " . $i . "<br>";

        for ($j = 1; $j <= 10; $j++) {

            $result = $i * $j;

            echo $i . " x " . $j . " = " . $result . "<br>";
        }
    }
}
multiplication();

// cau 4 kiem tra 1 chuoi co chua 1 tu khong
function checkstring($string, $word)
{
    $check = strpos($string, $word);

    if ($check !== false) {

        return "Chuỗi '$string' chứa từ '$word'.";
    } else {

        return "Chuỗi '$string' không chứa từ '$word'.";
    }
}

$string = "my name is Mai";

$word = "Mai";
$result = checkstring($string, $word);
echo $result;

// cau 5 tim max, min cua 1 mang
function findMaxValue($arr)
{
    $maxValue = $arr[0];

    $lengthArr = count($arr);

    for ($i = 1; $i < $lengthArr; $i++) {

        if ($arr[$i] > $maxValue) {
            $maxValue = $arr[$i];
        }
    }

    return $maxValue;
}

function findMinValue ($arr)
{
    $minValue = $arr[0];

    $lengthArr = count($arr);

    for ($i = 1; $i < $lengthArr; $i++) {

        if ($arr[$i] < $minValue) {

            $minValue = $arr[$i];
        }
    }

    return $minValue;
}

$arr = array(2, 9, 5, 7, 3, 1, 6);
$maxValue = findMaxValue($arr);
$minValue = findMinValue($arr);
echo "Giá trị lớn nhất trong mảng là: $maxValue<br>";
echo "Giá trị nhỏ nhất trong mảng là: $minValue";

// cau 6 sap xep mang tang
function ascding($array)

{
    $lengthArr = count($array);
    for ($i = 0; $i < $lengthArr - 1; $i++) {

        for ($j = $i + 1; $j < $lengthArr; $j++) {

            if ($array[$j] < $array[$i]) {

                $array1 = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $array1;
            }
        }
    }

    return $array;
}

$originalArr = array(2, 4, 1, 9, 6);
$ascdingArr = ascding($arr);
echo "Mảng sau khi sắp xếp: ";
foreach ($ascdingArr as $value) {
    echo "$value ";
}
//cau 7 tinh giai thua
function factorialCaculation($n)
{
    if ($n == 0 || $n == 1) {

        return 1;
    } else {

        return $n * factorialCaculation($n - 1);
    }
}

$n = 5;
$factorial = factorialCaculation($n);
echo "Giai thừa của $n là: $factorial";

//cau 8 kiem tra so nguyen to
function checkNumElement($n)
{
    if ($n < 2) {

        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {

        if ($n % $i == 0) {

            return false;
        }
    }

    return true;
}

function findNumElement($num1, $numx)
{
    $numElement = [];

    for ($i = $num1; $i <= $numx; $i++) {

        if (checkNumElement($i)) {

            $numElement[] = $i;
        }
    }

    return $numElement;
}

$num1 = 1;
$numx = 99;

$arrNumElement = findNumElement($num1, $numx);
echo "Các số nguyên tố trong khoảng $num1 đến $numx là: ";
foreach ($arrNumElement as $numElement) {
    echo "$numElement ";
}

//cau 9 tinh tong mang
function totalArr($arr)
{
    $total = 0;

    foreach ($arr as $num) {

        $total += $num;
    }

    return $total;
}

$arr = array(2, 9, 5, 7, 3, 1, 6);
$totalArr = totalArr($arr);
echo "Tổng của mảng là: $totalArr";

//cau 10 in ra so Fibonacci trong mang
function fibonacciArr($num1, $numx)
{
    $fibonacciArr = [];
    $fibonacciArr[0] = 0;
    $fibonacciArr[1] = 1;

    $i = 2;
    while (true) {
        $fibonacciArr[$i] = $fibonacciArr[$i - 1] + $fibonacciArr[$i - 2];
        if ($fibonacciArr[$i] > $numx) {
            break;
        }
        if ($fibonacciArr[$i] >= $num1) {
            echo $fibonacciArr[$i] . " ";
        }
        $i++;
    }
}

$num1 = 1;
$numx = 99;

echo "Các số Fibonacci trong khoảng $num1 đến $numx là: ";
fibonacciArr($num1, $numx);

//cau 11 kiem tra so Armstrong
function checkArmstrong($number)
{
    $sum = 0;
    $originalNum = $number;
    while ($number > 0) {
        $value = $number % 10;
        $sum+ = pow($value, strlen($aoriginalNum));
        $number = $number / 10; 
    }
    if ($sum === $originalNum) {
        echo "Day là số Armstrong";
    } else {
        echo "Day không phải là số Armstrong";
    }
}

checkArmstrong(153)

//cau12 them mot phan tu vao vi tri bat ki
function addElementArr($arr, $element, $position)
{
    if ($position < 0 || $position > count($arr)) {
        echo "không hợp lệ.";
        return $arr;
    }
    $addElementArr = array();

    for ($i = 0; $i < count($arr); $i++) {
        if ($i === $position) {
            $addElementArr[] = $element;
        }
        $addElementArr[] = $arr[$i];
    }
    if ($position === count($arr)) {
        $addElementArr[] = $element;
    }
    return $addElementArr;
}

$originalarr = array(1, 2, 3, 4, 5);
$elementToAdd = 6;
$positionAdd = 3;

$result = addElementArr($arr1, $element1, $position1);

print_r($result);

// cau 13 loai bo phan tu trung lap trong mang
function removeDupElement($arr)
{
    $removeDupElement = array_flip($arr);
    $result = array_keys($removeDupElement);
    return $result;
}

$originalArr = array(1, 2, 3, 2, 4, 3, 5, 1);
$result = removeDupElement($originalArr);
print_r($result);

//cau 14 tim vi tri phan tu trong mang
function positionElement($arr, $element)
{
    $positionElement = array();

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $element) {
            $positionElement[] = $i;
        }
    }

    return $positionElement;
}

$originalArr = array(1, 2, 7, 2, 4, 3, 5, 9);
$elementToFind = 2;

$positionElement = positionElement($originalArr, $elementToFind );
echo "Các vị trí của phần tử $elementToFind trong mảng là: " . implode(", ", $positionElement);

//cau 15 dao nguoc chuoi
function reverseString($string) {
    $reverseString = "";
    $length = 0;
    while (isset($string[$length])) {
    $length++;
}
for ($i = $length - 1; $i >= 0; $i--) {
    $reverseString .= $string[$i];
}
}
$string = "Ngoc Mai";
echo reverseString($string);

// cau 16 tinh so phan tu trong mang
function countElements($arr)
{
    $count=0;
    foreach ($arr as $element) {
        $count++;
    }
$arr = [1, 2, 5, 7, 9, 0];
echo "số lượng phần tử trong mảng là:" . $count;
}

//17 kiem tra chuoi palindrome
function checkPalindrome($string)
{
    $length = strlen($string);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] != $string[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}

$originalStr = "boob";
$checkPalindrome = checkPalindrome($string);

echo "Chuỗi ban đầu: " . $originalStr . "\n";
echo "Kết quả: " . ($checkPalindrome ? "Chuỗi là Palindrome" : "Chuỗi không là Palindrome");

//18 dem so lan xuat hien cua mot phan tu
function countOccurrent($arr, $element)
{
    $count = 0;
    foreach ($arr as $value) {

        if ($value === $element) {

            $count++;
        }
    }
    return $count;
}

$originalArr = array(1, 2, 3, 2, 3, 2,);
$element1 = 2;
$countOccurrent = countOccurrent($originalArr, $element1);
echo "Số lần xuất hiện của phần tử " . $element1 . " trong mảng là: " . $countOccurrent;

//19 sap xep mang giam dan
function descending($arr)
{

    rsort($arr);
    return $arr;
}

$Arr1 = array(3, 1, 4, 1, 5, 9, 2, 6);

$Arr1 = descending($Arr1);

print_r($Arr1);

//20 them phan tu vao dau hoac cuoi mang
function addElement($arr, $element, $position)
{
    if ($position == "start") {
        array_unshift($arr, $element);
    } else {
        array_push($arr, $element);
    }
    return $arr;
}

$originalArr = array("ngoc mai");
$newElement = "nguyen";

$newArr = addElement($newArr, $newElement, "end");
$newArr = addElement($newArr, $newElement, "start");

print_r($newArr);

//21 tim so lon thu 2 trong mang
function findSecondLargest($arr)
{
    $length = count($arr);
    
    if ($length < 2) {
        return null;
    }
    $largest = $arr[0];
    $secondLargest = null;

    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] < $largest && ($secondLargest === null || $arr[$i] > $secondLargest)) {
            $secondLargest = $arr[$i];
        }
    }

    return $secondLargest;
}

$originalArr = [5, 2, 8, 1, 9];
$secondLargest = findSecondLargest($originalArr);

echo "Số lớn thứ hai trong mảng là: " . $secondLargest;

//22 tim ucln va bcnn
function gcf($num1, $num2)
{
    if ($num2 == 0) {
        return $num1;
    } else {
        return gcf($num2, $num1 % $num2);
    }
}

function lcm($num1, $num2)
{
    return ($num1 * $num2) / gcf($nam1, $num2);
}
$num1 = 5;
$num2 = 20;

echo "Ước số chung lớn nhất của " . $num1 . " và " . $num2 . " là: " . gcf($num1, $num2) . "<br>";
echo "Bội số chung nhỏ nhất của " . $num1 . " và " . $num2 . " là: " . lcm($num1, $num2);

// 23 kiem tra so hoan hao
function checkPerfectNumber($num)
{
    $sum = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }

    if ($sum == $num) {

        return true;
    } else {

        return false;
    }
}

$num = 72;

if (checkPerfectNumber($num)) {

    echo $num . " là số hoàn hảo";
} else {

    echo $num . " không phải là số hoàn hảo";
}

//24 tim so le lon nhat trong mang
function findLargestOdd($array)
{

    $largestOdd = null;

    foreach ($array as $num) {

        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) {

            $largestOdd = $num;
        }
    }

    return $largestOdd;
}

$Array = array(2, 4, 6, 10, 9, 3, 5, 7);

$largestOdd = findLargestOdd($Array);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;

//Cau 25 kiem tra so nguyen to
function checkPrimeNumber($number)
{
    if ($number<=1) {
        return false;
    }
    for($i = 2; $i <= sqrt($number); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$number= 77;
if(checkPrimeNumber($number)) {
    echo $number . "la so nguyen to";
}
else {
    echo $number . "khong phai la so nguyen to";
}

//26 tim so duong lon nhat trong mang
function findLargestPos($array)
{

    $LargestPos = null;

    foreach ($array as $num) {

        if ($num > 0 && ($LargestPos == null || $num > $LargestPos)) 
        {

            $findLargestPos = $num;
        }
    }
    return $largestPos;
}

$array = array(-2, 4, 6, -8, 9, 3, -5, 7);

$largestPos = findLargestPositive($array);
echo "Số dương lớn nhất trong mảng là: " . $largestPos;

//27 tim so am lon nhat trong mang
function findLargestNega($array)
{

    $largestNega = null;

    foreach ($array as $num) {

        if ($num < 0 && ($largestNega == null || $num > $largestNega)) {

            $largestNega = $num;
        }
    }

    return $largestNega;
}

$array = array(2, -4, 6, -8, -9, 3, -5, 7);

$largestNega = findLargestNega($array);
echo "Số âm lớn nhất trong mảng là: " . $largestNega;

// 28 tinh tong cac so le tu 1 den n
function totalOddNumbers($n)
{
    $total = 0;
    for ($i = 1; $i <= $n; $i++) {

        if ($i % 2 != 0) {

            $total += $i;
        }
    }
    return $total;
}

$n = 10;
$total = totalOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $total;

//29 tim so chinh phong trong khoang
function findPerfectSquares($num1, $num2)
{

    $perfectSquares = array();

    for ($i = $num1; $i <= $num2; $i++) {

        if (sqrt($i) == floor(sqrt($i))) {

            array_push($perfectSquares, $i);
        }
    }

    return $perfectSquares;
}

$num1 = 1;
$num2 = 100;

$perfectSquares = findPerfectSquares($num1, $num2);
echo "Các số chính phương trong khoảng từ " . $num1 . " đến " . $num2 . " là: ";

foreach ($perfectSquares as $num) {
    echo $num . " ";
}

//30 kiem tra 1 chuoi co phai la chuoi con cua chuoi khac khong
function checkSubstring($string, $substring)
{
    if (strpos($string, $substring) !== false) {

        return true;
    } else {

        return false;
    }
}

$string = "ngoc mai";
$substring = "mai";

if (isSubstring($string, $substring)) {

    echo "Day là chuỗi con của" . $string . "'";
} else {

    echo "Day không phải là chuỗi con của chuỗi '" . $string . "'";
}

?>


