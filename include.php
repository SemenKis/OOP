<?php

/**
 *
 */
class Shop {

	public static $products = [];

	public function __construct($products) {
		$this->product = $products;
	}

	public function makeProducts() {
		$products = [
			1 => ["id" => 1, "name" => "Микрофон"],
			2 => ["id" => 2, "name" => "подставка"],
			3 => ["id" => 3, "name" => "стойка"],
			4 => ["id" => 4, "name" => "виски"],
			5 => ["id" => 5, "name" => "кола"],
		];

		foreach ($products as $items => $values) {
			echo "<div class='product'>";
			echo "<div id='id'>{$products[$items]["id"]}</div>";
			echo "<div class='item'>{$products[$items]["name"]}</div>";
			echo "</div>";
			echo "<br>";
		}

	}
}

// №5
// class A {
// 	public function foo() {
// 		static $x = 0;
// 		echo ++$x;
// 	}
// }

// №5.2
// class A {
// 	public function foo() {
// 		static $x = 0;
// 		echo ++$x;
// 	}
// }

// class B extends A {
// }

// №7
class A {
	public function foo() {
		static $x = 0;
		echo ++$x;
	}
}
class B extends A {
}

?>