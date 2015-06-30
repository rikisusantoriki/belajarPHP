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

 
 ?>  
