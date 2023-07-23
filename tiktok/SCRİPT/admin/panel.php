<?php
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');

include '../fonksiyon.php';
session_start();
  if (!$_SESSION['login']) {
    header("location:index.php");
  }
  
  
  if(isset($_POST['ayarKaydet'])){
    if ($_SESSION['login']) {
        
        $title=$_POST['title'];
        $siteAd=$_POST['siteAd'];
        $metaDescription=$_POST['metaDescription'];
        $metaKeywords=$_POST['metaKeywords'];
        $whatsaap=$_POST['whatsaap'];
         $reklam=$_POST['reklam'];
          $modal=$_POST['modal'];

         $paket=$_POST['paket'];
          $paketaciklama=$_POST['paketaciklama'];
           $paket1=$_POST['paket1'];
            $paket1aciklama=$_POST['paket1aciklama'];
             $paket2=$_POST['paket2'];
              $paket2aciklama=$_POST['paket2aciklama'];
        
        
        //api
        
        $apiUrl=$_POST['apiUrl'];
        $apiKey=$_POST['apiKey'];
        $apiservisİD=$_POST['apiservisİD'];
        $miktar=$_POST['miktar'];
        $reklamUrl=$_POST['reklamUrl'];

        
        
        echo $id;
        $query = $db->prepare("UPDATE siteAyar SET title = ?, siteAd = ? , metaDescription = ? , metaKeywords = ? , whatsaap = ? , modal = ? , apiUrl=? ,apiKey=?,apiservisİD=?,miktar=?,reklamUrl=?,paket=?,paketaciklama=?,paket1=?,paket1aciklama=?,paket2=?,paket2aciklama=?,reklam=? WHERE id=?");
		$insert = $query->execute(array("$title","$siteAd","$metaDescription","$metaKeywords","$whatsaap", "$modal","$apiUrl","$apiKey","$apiservisİD","$miktar","$reklamUrl","$paket","$paketaciklama","$paket1","$paket1aciklama","$paket2","$paket2aciklama","$reklam","1"));
		
		if($insert){
		    
		    $bilgi='<div class="w3-panel w3-green w3-round-xxlarge">Güncelleme Başarılı</div> <meta http-equiv="refresh" content="2;">';
		}
		
        
	}else { //admin kontrol son
		session_start();
		session_destroy();
		exit();
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="tr">
<title>Admin Panel</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<style> 
textarea,input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Admin</a>
    <a href="/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Siteye Dön</a>
    <a href="cikis.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Çıkış Yap</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#/" class="w3-bar-item w3-button w3-padding-large">Siteye Dön</a>
    <a href="cikis.php" class="w3-bar-item w3-button w3-padding-large">Çıkış Yap</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:128px 16px">
  <p class="w3-xlarge">Sistem Ayarları</p>
  <p><b>Bilgi:</b> Bu yazılım www.botcuyuz.com ve www.takipci.live geliştiricileri tarafından yazılmıştır hiçbir satış hakkıız yoktur!</p>
  <?php echo $bilgi; ?> 
<form action="" method="POST" name="ayarKaydet">
<div class="w3-row w3-container" style="margin:50px 0">
    
<div class="w3-half w3-container">
  <div class="w3-topbar w3-border-amber">
      
    <h2>Site ayarları</h2>
    <p>Title</p>
      <input type="text" placeholder="Title" name="title" value="<?php echo $title2; ?>" ><hr>
      <p>Site Adı</p>
      <input type="text" placeholder="Site adı" name="siteAd" value="<?php echo $siteAd2; ?>" ><hr>
      <p>Site meta açıklama</p>
      <input type="text" placeholder="Meta açıklama" name="metaDescription" value="<?php echo $metaDescription2; ?>" >
      <hr><p>Site anahtar kelime</p>
      <input type="text" placeholder="Meta Keywords" name="metaKeywords" value="<?php echo $metaKeywords2; ?>" >
      <hr><p>WhatsApp Number</p>
      <input type="text" placeholder="WhatsApp Number" name="whatsaap" value="<?php echo $whatsaap1; ?>" >
      <hr><p>Reklam kodu</p>

      <textarea type="text" rows="3" placeholder="Reklam kodu" name="reklam" ><?php echo $reklam_1; ?></textarea>

      <hr><p>Modal Bilgi</p>
       <textarea type="text" rows="3" placeholder="Modal bilgi" name="modal" ><?php echo $modal1; ?></textarea>
      
  </div>
</div>

<div class="w3-half w3-container">
  <div class="w3-topbar w3-border-amber">
    <h2>Api Ayarları</h2><p>Api Url</p>
    <input type="text" placeholder="Api Url" name="apiUrl" value="<?php echo $apiUrl_2; ?>" >
    <hr><p>Api Key</p>
    <input type="text" placeholder="Api key" name="apiKey"  value="<?php echo $apiKey_2; ?>"  >
    <hr><p>Api Servis İD</p>
    <input type="text" placeholder="Api servis id" name="apiservisİD" value="<?php echo $apiservisİD_2; ?>" >
    <hr><p>Api Miktar</p>
    <input type="text" placeholder="Miktar" name="miktar" value="<?php echo $miktar_2; ?>" >
    <hr><p><font color="red"><b>https://<?php echo $_SERVER['SERVER_NAME']; ?>/siapris-sonucu</b></font> bu linki kısıtlayarak para kazanabilirsin.</p>
    <input type="text" placeholder="Reklam geçiş linki" name="reklamUrl" value="<?php echo $reklamUrl2; ?>" ><hr>
  
    
  </div>
</div>
<div class="w3-half w3-container">
  <div class="w3-topbar w3-border-amber">
<div class="w3-container">
  <H1>Paket Ayarları</H1>
  <p>Paket 1 Başlık</p>
      <input type="text" placeholder="Paket 1 Başlık" name="paket" value="<?php echo $paket_1; ?>" >
      <p>Paket 1 Açıklama</p>
      <textarea type="text" rows="3" placeholder="Paket 1 Açıklama" name="paketaciklama" ><?php echo $paketaciklama_1; ?></textarea>
    <hr>

      <p>Paket 2 Başlık</p>
      <input type="text" placeholder="Paket 2 Başlık" name="paket1" value="<?php echo $paket_2; ?>" >
      <p>Paket 2 Açıklama</p>
      <textarea type="text" rows="3" placeholder="Paket 2 Açıklama" name="paket1aciklama" ><?php echo $paketaciklama_7; ?></textarea><hr>

      <p>Paket 3 Başlık</p>
      <input type="text" placeholder="Paket 3 Başlık" name="paket2" value="<?php echo $paket_3; ?>" >
      <p>Paket 3 Açıklama</p>
      <textarea type="text" rows="3" placeholder="Paket 3 Açıklama" name="paket2aciklama" ><?php echo $paketaciklama_3; ?></textarea><br>

</div>
</div></div></div>
<input type="submit" value="Ayarları Kaydet" class="w3-btn w3-orange w3-block" name="ayarKaydet">
</form>
</header>



<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Desinger by Mehmet Ali Albayrak</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  

 <p>Powered by <a href="https://takipci.live" target="_blank">wwwtakipci.live</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
