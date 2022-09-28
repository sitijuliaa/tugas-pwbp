<?php
 // buat class laptop
class toko_sepedah{
   
    public $merk ="senator";
    public $jenis = "lipat";
    public $harga = "3000000";

    public fUNCTION __construct(){
      echo"mrek sepedah";
}
    public fUNCTION __destruct(){
     echo"jenis sepedah";
}
    public fUNCTION __mrek_sepedah(){
    return "mrek sepedah $this->merk, jenis :$this->jenis,harga :$this->harga";
    }
}
$toko_sepedah = new toko_sepedah();

echo "<br/>";
echo $toko_sepedah->__mrek_sepedah();
echo "<br/>";
?>
 
