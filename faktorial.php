 <?php  
 class MyClass  //membuat sebuah class
 { 
   public $var1 = 'value 1';  //deklarasi propertis
   public $var_kedua = 'value 2';  
   public $var_three = 'value 3';  
   protected $protected = 'protected var';  
   private  $private  = 'private var';  

  function Ulang() { //membuat sebuah method
     echo "MyClass::Ulang :<br/>";  
     foreach($this as $key => $value) { //menampilkan semua data array  
       print "$key => $value<br/>";  
     }  
   }
  function Buat_method(){
	echo "Test Membuat Method Baru";
  }
  function Gabung_var(){
  $var1='Aku '; $var_kedua='Lapar ';
   print "$var1"."$var_kedua";
  }
   
  function Faktorial($bil){
	$angka = $bil;
	$jumlah = 1;
	for($bil=1;$bil<=$angka;$bil++){
		$jumlah = $jumlah * $bil;
		
	}
	print $jumlah;
  } 
  function Prima($bil1){
	$status='Prima';
	for($i=2;$i<=$bil1-1;$i++)
	if($bil1 % $i == 0 ){
		$status='Bukan';
	break;
	}
		print "$bil1=$status";
	}
	
	function Prima2($bil1,$bil2)
	{
		$cek=$bil1+1;
		
		for($cek;$cek<$bil2;$cek++){
		//print "$cek<br>";	
			for($i=2;$i<$cek;$i++){
				if($cek % $i == 0){
					//print "$cek ";
					break;
				}
				print "$cek ";
				//break;
			}
			
		
		}
	}
	
 }
 
 $class = new MyClass();  //membuat object
 //mencetak semua variable di class MyClass
 foreach($class as $key => $g) { 
   print "$key => $g <br/>";  
 }  
 
 echo "<br/>";
 //memanggil function ulang()
$class->Ulang(); 
echo "<br/><br/>"; 
$class->Buat_method(); 
echo "<br/><br/>";
$class->Gabung_var();
echo "<br>--===============================================================---------==================================<br>";
$class = new MyClass();
$class->Faktorial(2);
echo "<br>--===============================================================---------==================================<br>";
$class = new MyClass();
$class->Prima(9);
echo "<br>--===============================================================---------==================================<br>";
$class = new MyClass();
$class->Prima2(1,100);
 
 
 ?>  
