<?php
	$dir	   = "cert/2023/";
  	$filename  = $_GET['file'];
  	$file_path = $dir.$filename;
  	$ctype     = "application/octet-stream";
  	
  	if (!empty($file_path) && file_exists($file_path)){ //check keberadaan file
    	header("Pragma:public");
	   	header("Expired:0");
	   	header("Cache-Control:must-revalidate");
	   	header("Content-Control:public");
	   	header("Content-Description: File Transfer");
	   	header("Content-Type: $ctype");
	   	header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
	   	header("Content-Transfer-Encoding:binary");
	   	header("Content-Length:".filesize($file_path));
	   	flush();
	   	readfile($file_path);
	   	exit();
 	} else { ?>
  		<script type ="text/JavaScript">
	       	window.alert("The File does not exist!");
	       	window.location.href = "index.php";
       	</script>
	<?php }
?>