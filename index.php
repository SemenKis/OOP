<?php require_once 'include.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>ООП git</title>
</head>
<body>
	<div class="catalog">
		<?php

$shop = new Shop('вибратор');
$shop->makeProducts();

// $a1 = new A();
// $a2 = new A();
// $a1->foo();
// $a2->foo();
// $a1->foo();
// $a2->foo();

// $a1 = new A();
// $b1 = new B();
// $a1->foo();
// $b1->foo();
// $a1->foo();
// $b1->foo();

$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
?>
	</div>
</body>
</html>