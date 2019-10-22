<?php
print "===========CONTOH SINGLE INTHERITANCE=============<br>";
class bapak{
var $nama="bapak";
function bapak($n){
$this->nama = $n;
}
function Hallo(){

	echo "Hallo, saya mian " .$this->nama."<br>";
	echo "Hallo, saya okto anak ke 2 " .$this->nama."<br>";
	echo "Hallo, saya tejo anak ke 3 " .$this->nama."<br>";
	}
}
class anak extends bapak{
}
$test=new anak("anak dari bapak Siswoyo");
$test=new anak("anak dari bapak Siswoyo");

$test->Hallo();  

?>