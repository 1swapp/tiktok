


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
	<?php
session_start();
session_unset();
session_destroy();
echo '<script type="text/javascript">setTimeout(function () { swal({ title: \'Başarılı!\', text: \' Başarıyla Çıkıp Yaptınız.\', type: \'success\', confirmButtonText: \'Tamam\',}); }, 0);</script>';	
echo '<script type="text/javascript"> function bekle(){ window.location = "index.php" } bekle();  </script>';

?>
	
			<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</body>
</html>