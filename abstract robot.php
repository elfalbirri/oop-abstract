<?php
abstract class Robot{
    public $nama = "nama", 
    $pemilik = "pemilik",
    $tahun = "tahun";


public function setTahun(){
    $this->tahun = $tahun;
}

public abstract function setNama(){
    $this->nama = $nama;
}

public abstract function displayData(){
  $str.=  "{$this->nama} {$this->pemilik} {$this->tahun}";

  return $str;
}

}

public class DoraMini extends Robot{


public function sayDora(){
}
}

public class MainAbstrak{
}

public function __construct($nama, $pemilik, $tahun)
    {
        $this->nama = $nama;
        $this->pemilik = $pemilik;
        $this->tahun = $tahun;
    }
}


$robot1 = new Robot ("Dora mini", "dora", 1999);

echo "Robot 1 : " . $robot1->displayData();
echo "<br>";
