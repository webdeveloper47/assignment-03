

<?php 

//Answer to the question no-01
// The usort() function is used to sort an array by its values using a user-defined comparison function. If the array you wish to sort needs to be sorted by some non-trivial criteria, you should use this function.
// The function removes any existing keys and assigns new keys for the elements in the array


function u_sort($a,$b)
{
if ($a==$b) return 0;
return ($a<$b)?-1:1;
}

$a=array(4,2,8,6);
usort($a,"u_sort");

$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
  {
  echo $a[$x];
  echo "\n";
  }


echo PHP_EOL;


//Answer to the question no-02


function twoString($a, $b){

    return $a.$b;
}

echo twoString("Mirajul" , " Islam");


echo PHP_EOL;


//Answer to the question no-05


function secondHighest(array $arr) {
    sort($arr);
    echo $arr[sizeof($arr)-2];
    }
    secondHighest(array( 4, 9, 5, 2, 8, 0, 3, 22));

