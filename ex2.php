<?php
interface Resizables {
    public function resize($percentage);
}

class Image implements Resizables {
    public $size;
    public function __construct($size) {
        $this->size = $size;
    }
    public function resize($percentage) {
        $this->size *= (1 + $percentage / 100);
    }
}
$img = new Image(250);
echo "Image size: " . $img->resize($this->size) . "<br>";
?>