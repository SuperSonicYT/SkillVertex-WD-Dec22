<?php 

//single line comment

/* multiple line
comment */

//data storage - variables
$name = 'Akash soni';
$_43434fdfg_ = 345345;
$num = "345345";

$x != $X;
$y = '';
$z = true;


//data types - string,number,boolean,arrays
$string = 'sdsddf24232true';
$int = 3453345.43434;
$bool = false;

$array1 = [123, "akash", true];  //index value array
$array2 = ['name' => 'akash', 'age' => 23, 'job' => false];  //key-value pair array

$array1[2];
$array2['age'];
$array2[0];   //error

foreach($array2 as $value) {
    echo $value;
}


//data output  -- echo and print

$result = print("Hello World"."3242323423".true);
echo "Hello World" . "3242323423" . true;


//branching -- if statement,if else stmt,elseif stmt,switch case
$age = 34;
$age %= 10;

if($age<18 || $age>10) {
    echo "Parental guidance is advised";
}

if(!isset($GET))

if($age<18) {
    echo "Parental guidance is advised";
}else {
    echo "Welcome";
}


if($age<18) {
    echo "Parental guidance is advised";
} else if ($age < 21) {
    echo "";
} else if ($age<40) {
    echo "";
}else {
    echo "Welcome";
}

$marks = 57;
$grade = 'D';
switch($grade) {
    case 'A+':
        echo "Marks in the range of 95-100";
        break;
    case 'A':
        echo "Marks in the range of 91-94";
        break;
    case 'B+':
        echo "Marks in the range of 81-90";
        break;
    case 'B':
        echo "Marks in the range of 71-80";
        break;
    case 'C':
        echo "Marks in the range of 61-70";
        break;
    case 'D':
        if($marks>51) {
            echo "Marks in the range of 51 to 60";
        }
        break;
    case 'E':
        echo "Marks in the range of 41-50";
        break;
    case 'F':
        echo "Marks in the range of 0-40";
        break;
    default:
        echo "Grade entered does not exist";
}



//looping statements - while loop, for loop, dowhile loop
$i = 1000;
while($i<=100) {
    if($i%2==0) {
        echo $i,"<br>";
    }
   $i++;
}

for($i=0;$i<=100;$i++) {
    if($i%2==0) {
        echo $i,"<br>";
    }
}

$i = 1000;
do {
    if ($i % 2 == 0) {
        echo $i, "<br>";
    }
    $i++;
}
while ($i <= 100);


// functions & variable scope

function add($a,$b) {
    static $s;
    $s += 1;
    echo "Function accessed ".$s." times";
    $sum_func = $a + $b;
    return $sum_func;
}
$sum = add(12, 45);
$sum = add(12, 45);
$sum = add(12, 45);
$sum = add(12, 45);
$sum = add(12, 45);
echo $s;

$arr = ['name' => 'Akash', 'name' => 'Soni'];
echo $arr['name'];

// superglobals


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="<?php echo 'inputphp' ?>">
        <input type="submit" value="SUBMIT" name='btn'>
    </form>
</body>
</html>