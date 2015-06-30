<?php

class Test{

public $satu;
public $dua;
public $tiga;
public $empat;
public $lima;

	function jawab(){
		$satu = 0;
		$dua = 0;
		$tiga = 0;
		$empat = 0;
		$lima = 0;
		for( $satu=0; $satu <= 18; $satu++ ){
			if($satu % 5 == 0){
			$dua = $dua  + $lima;
			echo "Dua = $dua.<br/>";
			}
			if($satu % 4 == 0){
			$tiga = $tiga - $empat;
			echo "Tiga = $tiga.<br/>";
			}
			if($satu % 3 == 0){
			$empat = $empat + $satu;
			echo "Empat = $empat.<br/>";
			}
			if($satu % 2 == 0){
			$lima = $lima + $tiga;
			echo "Lima = $lima.<br/>";
			}
			if($satu % 1 == 0){
			$satu = $satu - $lima;
			echo "Satu = $satu.<br/>";
			}
			echo "<br/>";	
		}
	print "<br/> satu Akhir =".$satu."<br/>";
	print "dua Akhir =".$dua."<br/>";
	print "tiga Akhir =".$tiga."<br/>";
	print "empat Akhir =".$empat."<br/>";
	print "lima Akhir =".$lima."<br/>";
	}
}
$jawabanku = new Test();
$jawabanku -> jawab();


?>