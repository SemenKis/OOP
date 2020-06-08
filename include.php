<?php

/**
 *
 */
class Shop {

	public static $products = [];

	public function __construct($status, $email, $name) {
		$this->status = $status;
		$this->email = $email;
		$this->name = $name;
	}

	public function getInfo() {
		echo "<div class='info'>";
		echo "{$this->status}" . "<br>" . "{$this->email}" . "<br>" . "{$this->name}";
		echo "</div>";
	}

	public function makeProducts() {
		$products = [
			1 => ["id" => 1, "name" => "Микрофон", "cost" => "1200"],
			2 => ["id" => 2, "name" => "подставка", "cost" => "1200"],
			3 => ["id" => 3, "name" => "стойка", "cost" => "1200"],
			4 => ["id" => 4, "name" => "виски", "cost" => "1200"],
			5 => ["id" => 5, "name" => "кола", "cost" => "1200"],
		];

		foreach ($products as $items => $values) {
			echo "<div class='product'>";
			echo "<div id='id'>{$products[$items]["id"]}</div>";
			echo "<div class='item'>{$products[$items]["name"]}</div>";
			echo "<div id='cost'>{$products[$items]["cost"]}</div>";
			echo "</div>";
			echo "<br>";
		}

	}
}

/**
 *
 */
class User extends Shop {

	public function rights() {

		if ($status !== 'moderator') {
			echo "у вас нет прав ";
		} else {
			echo "Добро пожаловать";
		}
	}
}

// №5.
// class A {
// 	public function foo() {
// 		static $x = 0;
// 		echo ++$x;
// 	}
// }

// №6
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