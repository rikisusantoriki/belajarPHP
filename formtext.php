<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Test </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script >
</head>
<body>
<form>
Agenda: <textarea name="editor1" id="editor1"></textarea>
</form>
<script type="text/javascript">


if ( typeof CKEDITOR == 'undefined' )
{
	document.write(
		'CKEditor not found');
}
else
{
	var editor = CKEDITOR.replace( 'editor1' );	

	
	CKFinder.setupCKEditor( editor, '' ) ;

	
}
</script>
</body>
</html>