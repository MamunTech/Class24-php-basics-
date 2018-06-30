<?php
$var="My name is";
$var.=" ";
$var.="web";

echo $var;

?>


<?php

$var=array(300,2,10,500);

echo $var[3];
print_r($var);

?>

<?php

$var= array(
	'a'=>'Arshaful',
	'b'=>'Kheled',
	'c'=>'Hridoy',
);

echo $var['a'];
echo "<br>";
echo $var['b'];
echo "<br>";
echo $var['c'];
echo "<br>";

?>


<?php

$var= array(
	'Romantic'=>array(
		'title'=>'this is title',
		'details'=>'this is romantic book',
		'price'=>array(
			'a'=>200,
			'b'=>300
		),
	),
	'sic'=>'Kheled',
	'c'=>'Hridoy',
);

echo $var['Romantic']['price']['a'];


?>




<?php

$var= array(
	'Romantic'=>array(
		'title'=>'this is title of romantic book',
		'details'=>'this is romantic book',
		'price'=>array(
			'a'=>200,
			'b'=>300
		),
	),
	'sic'=>'Kheled',
	'c'=>'Hridoy',
);


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<h1> <?php  echo $var['Romantic']['title'];    ?> </h1>
	<p> <?php  echo $var['Romantic']['details'];  ?> </p>
	<span> The price of this book is 
	<?php  echo $var['Romantic']['price']['a'];  ?>$. buy thi now. </span>
	
</body>
</html>



<?php

function myfunction(){
	echo "this is function.";
}

myfunction();


?>

<?php

function plus($x,$y){
	$sum=$x + $y;
	return $sum;
	
}
function minus($x,$y){
	$sum=$x - $y;
	return $sum;
	
}
echo "50-20=".minus(50,20);


echo "<br>";
echo "20-5000=";
$value=minus(20,500);
echo $value;
echo "<br>";

echo "20+50=";
plus(20,50);
echo "<br>";
echo "100+20=";
plus(100,20);


?>

