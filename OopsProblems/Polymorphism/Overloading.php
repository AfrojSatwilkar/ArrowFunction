<?php

class overload {
	public function __call($name, $arguments) {
		if ($name == "area") {
			if (count($arguments) == 1) {
				echo "Area of square : " . $this->square($arguments[0]) . "\n";
			}

			if (count($arguments) == 2) {
				echo "Area of rectangle : " .$this->rectangle($arguments[0], $arguments[1]) . "\n";
			}
		} elseif ($name == "volume") {
			if (count($arguments) == 1) {
				echo "Volume of Square : " . $arguments[0] * $arguments[0] * $arguments[0] . "\n";
			}
		} 
	}

	public function square($side) {
		return $side * $side;
	}

	public function rectangle($length, $width) {
		return $length * $width;
	}
}

$math = new overload();
$math->area(5);
$math->area(5,9);
$math->volume(8)
?>