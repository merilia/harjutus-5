<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Andmetüübid III</title>
</head>
<body>
	<h2>Booleans</h2>
	<?php
	$result1 = true;
	$result2 = false;
	echo $result1;
	echo "<br>";
  	echo "Result1: {$result1}";
  	echo "<br>";
  	echo "Result2: {$result2}";
  	echo "<br>";
  	echo "Kas {$result1} on boolean? " . is_bool($result1);
	echo "<br>";
	echo "Kas {$result2} on boolean? " . is_bool($result2);
	echo "<br>";
	$eiole = 7;
	echo "Kas {$eiole} on boolean? " . is_bool($eiole);
	echo "<br>";
	?>
	<h2>Andmetüüpide olekud</h2>
	<h3>NULL</h3>
	<h2>NULL</h2>
	<?php
	$var1 = null;
	$var2 = "";
	$var3 = 0;
	$var5 = 0.0;
	$var6 = false;
	$var7 = $array = array();
	echo "Kas var1 on null? " . is_null($var1);
	echo "<br>";
	echo "Kas var2 on null? " . is_null($var2);
	echo "<br>";
	echo "Kas var3 on null? " . is_null($var3);
	echo "<br>";
	echo "Kas var4 on null? " . is_null($var4);
	echo "<br>";
	?>
	<h3>Set</h3>
	<?php
	echo "Kas var1 on väärtustatud? " . isset($var1);
	echo "<br>";
	echo "Kas var2 on väärtustatud? " . isset($var2);
	echo "<br>";
	echo "Kas var3 on väärtustatud? " . isset($var3);
	echo "<br>";
	echo "Kas var4 on väärtustatud? " . isset($var4);
	echo "<br>";
	echo "Kas var1 on empty?" . empty($var1);
	echo "<br>";
  	echo "Kas var2 on empty?" . empty($var2);
  	echo "<br>";
  	echo "Kas var3 on empty?" . empty($var3);
  	echo "<br>";
  	echo "Kas var5 on empty?" . empty($var5);
  	echo "<br>";
  	echo "Kas var6 on empty?" . empty($var6);
  	echo "<br>";
  	echo "Kas var7 on empty?" . empty($var7);
  	echo "<br>";
	?>
	<h2>Andmetüübi teisendamine</h2>
	<?php
	$count = 2;
	echo gettype($count);
	echo "<br>";
	echo $count;
	echo "<br>";
  	settype($count, "string");
  	echo "<br>";
  	echo gettype($count);
  	echo "<br>";
  	echo $count;
  	echo "<br>";
  	settype($count, "float");
  	echo "<br>";
  	echo gettype($count);
  	echo "<br>";
  	echo $count;
  	echo "<br>";
  	settype($count, "array");
  	echo "<br>";
  	echo gettype($count);
  	echo "<br>";
  	echo $count;
  	echo "<br>";
  	?>
  	<pre>
	<?php echo print_r($count); ?><br>
	</pre>
	<br>
  	<?php  settype($count, "boolean");
  	echo gettype($count);
  	echo "<br>";
  	echo $count;
  	?>
  	<h2>Konstandid</h2>
  	<?php 
  	define("MAX_WIDTH", 980);
  	echo MAX_WIDTH;
  	echo "<br>";
  	define("MAX_WITDH", 500);
	echo MAX_WIDTH;
	echo "<br>";
	// veateade MAX_WIDTH = MAX_WIDTH + 5;
	?>
</body>
</html>
	