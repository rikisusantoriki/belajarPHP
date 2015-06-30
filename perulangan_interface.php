 <?php  
 class Ulang implements Iterator  
 {  
   private $var = array();  
   public function __construct($array)  
   {  
     if (is_array($array)) {  
       $this->var = $array;  
     }  
   }  
   public function rewind()  
   {  
     echo "rewinding<br/><br/>";  
     reset($this->var);  
   }  
   public function current()  
   {  
     $var = current($this->var);  
     echo "current: $var<br/><br/>";  
     return $var;  
   }  
   public function key()   
   {  
     $var = key($this->var);  
     echo "key: $var<br/><br/>";  
     return $var;  
   }  
   public function next()   
   {  
     $var = next($this->var);  
     echo "next: $var<br/><br/>";  
     return $var;  
   }  
   public function valid()  
   {  
     $key = key($this->var);  
     $var = ($key !== NULL && $key !== FALSE);  
     echo "valid: $var<br/><br/>";  
     return $var;  
   }  
 }  
 $values = array(1,2,3);  
 $object = new Ulang($values);  
 foreach ($object as $a => $b) {  
   print "$a: $b<br/>";  
 }  
 ?>  
