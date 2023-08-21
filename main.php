Q1:
1- 16
2- undefined
3- true
<br>
<?php
function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

$n = 10;

$result = fibonacci($n);

echo "Fibonacci Series: ";
for ($i = 0; $i < $n; $i++) {
    echo $result[$i] . "<br>";
}
?>

<br>

<?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true; 
    } else {
        return false;
    }
}

$year = 2024;

if (isLeapYear($year)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}
?>

<br>

<?php
function generateUniqueRandomNumbers($start, $end, $count) {
    $range = range($start, $end);
    $randomNumbers = array();
    
    if ($count > ($end - $start + 1)) {
        echo "Error: Cannot generate more unique random numbers than the specified range.";
        return;
    }
    
    for ($i = 0; $i < $count; $i++) {
        $index = mt_rand(0, count($range) - 1);
        $randomNumbers[] = $range[$index];
        array_splice($range, $index, 1);
    }
    
    return $randomNumbers;
}

$start = 1;
$end = 10;
$count = 5;

$randomNumbers = generateUniqueRandomNumbers($start, $end, $count);

echo "Generated Unique Random Numbers: ";
foreach ($randomNumbers as $number) {
    echo $number . " ";
}
?>

<br>

<?php
echo "Multiplication Table up to 5x5:\n\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
    }
    echo "\n";
}
?>

<br>

<?php
function removeDuplicates($sortedList) {
    $uniqueList = array();
    $previousItem = null;

    foreach ($sortedList as $item) {
        if ($item !== $previousItem) {
            $uniqueList[] = $item;
        }
        $previousItem = $item;
    }

    return $uniqueList;
}

$sortedList = array(1, 2, 3, 3, 3, 4, 4, 4, 5, 5, 6, 6, 6);

$uniqueList = removeDuplicates($sortedList);

echo "Original Sorted List: " . implode(", ", $sortedList) . "\n";
echo "List with Duplicates Removed: " . implode(", ", $uniqueList) . "\n";
?>
<br>
Q3:
1-false
2-false
3-true
4-true
5-true