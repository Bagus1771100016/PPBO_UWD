<?php

class bapak{
var $nama="bapak";
function bapak($n){
$this->nama = $n;
}
function Hallo(){

	echo "Hallo, saya " .$this->nama."<br>";
}
}
class anak extends bapak {
}
$test=new anak("anak dari bapak ");
$test->Hallo();  

?>