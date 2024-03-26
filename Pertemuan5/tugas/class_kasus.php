<?php

class Food {
    protected $name;
    protected $type;
    protected $price;

    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function getInfo(){
        echo "Nama Makanan: " . $this->name . "<br>";
        echo "Tipe: " . $this->type . "<br>";
        echo "Harga: Rp " . number_format($this->price, 2) . "<br>";
    }
}

class Beverage {
    protected $name;
    protected $type;
    protected $price;

    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function getInfo(){
        echo "Nama Minuman: " . $this->name . "<br>";
        echo "Tipe: " . $this->type . "<br>";
        echo "Harga: Rp " . number_format($this->price, 2) . "<br>";
    }
}

?>
