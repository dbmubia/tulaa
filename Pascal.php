<!DOCTYPE html>
<html>
<head>
<title>Pascal Triangle</title>
</head>
<form>
<div>Enter number of iterations:</div>
<input type="number" name="num" />
<div><br><input type="submit" value="Submit"></div><br>
</form>

<?php
function binomialCoeff($n, $k) 
{ 
    $res = 1; 
    if ($k > $n - $k) 
    $k = $n - $k; 
    for ($i = 0; $i < $k; ++$i) 
    { 
        $res *= ($n - $i); 
        $res /= ($i + 1); 
    } 
return $res; 
} 
function printPascal($n) 
{ 
    // Iterate through every line and 
    // print entries in it 
    for ($line = 0; $line < $n; $line++) 
    { 
        // Every line has number of  
        // integers equal to line  
        // number 
        for ($i = 0; $i <= $line; $i++) 
                echo "".binomialCoeff($line, $i)." "; 
                  
        echo "<br />"; 
    } 
} 
if (isset($_GET['num'])){
$n= $_GET['num'];
printPascal($n);
}
?>