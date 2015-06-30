<html>
<head>
	<title>403 Forbidden</title>
	<script type="text/javascript">
	$(function(){
  $('a.del').click(function(){
    if(confirm('Yakin akan menghapus data ini?')){
    	return true;
    }else{
    	return false;    
    }
  });
});
	</script>
	<script>
function delet(nim,nama){
    tanya = confirm("Yakin delete dengan nama: "+nama);
    if(tanya == 1){
        window.location.href="delete.php?nim="+nim;
    }
}
</script>
</head>
<body>

<p>Directory access is forbidden.</p>

<a class="del" href="index.php?delete_id=123">Coba klik ini</a>
<?php 
 echo "<td><a href=\"javascript: delet('".$d['nim']."','".$d['nama']."')\">Del</a></td></tr>";

 ?>
 <br>
<a href="#" onClick="return confirm('Are you sure you want to delete this?');">Beberapa Text</a>
</body>
</html>