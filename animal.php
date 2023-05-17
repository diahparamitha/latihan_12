<?php

//Membuat kelas animal
class Animal {

    //Membuat 2 atribut yaitu nama dan jenis
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis .  ". "; 
    }
}


//Membuat kelas cat yang merupakan turunan kelas animal
class Cat extends Animal {

    //Menambah satu properti lagi yaitu keterangan
    private $keterangan = "Kucing adalah hewan yang lucu dan menggemaskan";

    public function __construct($nama) {
        parent::__construct($nama, "Kucing");
        $this->keterangan = $this->keterangan;
    }

    public function getInfo() {
        $info = parent::getInfo();
        $info .=  $this->keterangan . ". ";
        return $info;
    }
}

//Membuat kelas dog yang merupakan turunan dari kelas animal
class Dog extends Animal {

    //Menambah satu properti lagi yaitu keterangan
    private $keterangan = "Anjing adalah hewan yang cerdas dan bersahabat";

    public function __construct($nama) {
        parent::__construct($nama, "Anjing");
    }

     public function getInfo() {
        $info = parent::getInfo();
        $info .= $this->keterangan . ". " . '<br>';
        return $info;
    }
}

echo "Latihan 21";
echo "<br>";
echo "<br>";

$animal = new Animal("Harimau", "karnivora");
echo $animal->getInfo();
echo "<br>";

$cat = new Cat("Joey");
echo $cat->getInfo();
echo "<br>";

$dog = new Dog("Billy");
echo $dog->getInfo();

?>
