<?php
require "fonksiyon.php";
if(isset($_COOKIE['kullanici']) || isset($_COOKIE['url'])){
    
    $url=$_COOKIE['url'];
    $kullanici=$_COOKIE['kullanici'];
    
    if(CheckDb($url)){
        
    $query = $db->prepare("INSERT INTO islemLog SET link = ?, kullanici = ?");
	$ekle = $query->execute(array($url,$kullanici));
	
	if($ekle){

	    $ch = curl_init();
    $siparis = array (
      'key' => $apiKey_2,
      'action' => 'add',
      'service' =>  $apiservisİD_2,
      'link' =>  $url,
      'quantity' => $miktar_2
      );  
		curl_setopt($ch, CURLOPT_URL, trim("$apiUrl_2")); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($siparis));
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
		$response = curl_exec($ch);
		$hi = json_decode($response, true);
			if($hi['order']) {
                $hata = '<div class="alert alert-success col-8 col-md-8">Siparişinizi aldım :) Aşağıda bulunan siparişlerim kısımdan Siparişinizi takip edebilirsiniz 😊</div>';
                 $hata5 = '<div class="alert alert-success">Siparişiniz başarılı bir şekilde alındı!</div>';
                setcookie("orderID", $hi['order'], time()+60*60*24*365 ); 
                
            $guncelle=$db->prepare("UPDATE islemLog SET siparisID=? WHERE link=?");
        
            $guncelle->execute(array($hi['order'],$url));
            }else {
                $hata = '<div class="alert alert-danger">Bir sorun oluştu bunun sebepini bilmiyorum yöneticimiz bununla ilgilenecek :(</div>';					
                        
            }
	    
	    
	}
        
    }else{
	    $hata = '<div class="alert alert-success col-8 col-md-8">Siparişinizi aldım :) Aşağıda bulunan siparişlerim kısımdan Siparişinizi takip edebilirsiniz 😊</div>';

	}
    
    
}



?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title2; ?></title>
  <meta name="description" content="<?php echo $description2; ?>">
    <meta name="keywords" content="<?php echo $keywords2; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   
<?php include 'ust.php'; ?>

  <div class="page-hero bg-primary text-white" id="banner">
    <div class="bubbles d-none d-md-block">
<!--        bubbles -->
      <div class="bubble bubble-1 rotate-bubble bg-warning"></div>
      <div class="bubble bubble-2 bubble-bottom-right bg-danger rotate-bubble"></div>
      <div class="bubble bubble-3 bubble-top-right bg-warning rotate-bubble"></div>
      <div class="bubble bubble-4 bubble-top-left bg-info rotate-bubble"></div>
      <div class="bubble bubble-5 bg-info rotate-bubble"></div>
      <div class="bubble bubble-6 bubble-bottom-right bg-danger rotate-bubble"></div>
      <div class="bubble bubble-7 bubble-top-right bg-success rotate-bubble"></div>
      <div class="bubble bubble-8 bubble-top-left bg-success rotate-bubble"></div>
      <div class="bubble bubble-9 bg-warning rotate-bubble"></div>
      <div class="bubble bubble-10 bg-danger rotate-bubble"></div>
      <div class="bubble bubble-11 bubble-bottom-right bg-info rotate-bubble"></div>
      <div class="bubble bubble-12 bubble-top-right bg-success rotate-bubble"></div>
      <div class="bubble bubble-13 bubble-top-left bg-success rotate-bubble"></div>
<!--         circles -->
      <div class="circle circle-1 bg-light rotate-circle"></div>
      <div class="circle circle-2 bg-success rotate-circle"></div>
      <div class="circle circle-3 bg-danger rotate-circle"></div>
      <div class="circle circle-4 bg-info rotate-circle"></div>
      <div class="circle circle-5 bg-success rotate-circle"></div>
      <div class="circle circle-6 bg-info rotate-circle"></div>
      <div class="circle circle-7 bg-warning rotate-circle"></div>
      <div class="circle circle-8 bg-white rotate-circle"></div>
      <div class="circle circle-9 bg-warning rotate-circle"></div>
      <div class="circle circle-10 bg-danger rotate-circle"></div>
    </div>
    <div class="container col-12">
    	<h1 class="text-white text-center">Tiktok Şifresiz İzlenme</h1>
    	<center><?php echo "$hata"; ?><br><?php echo "$hata1"; ?>
							
								
       <div class="col-6 col-md-6"><?php echo $reklam_1; ?></div><br>
      <a href="index.php"> <button type="button" class="btn btn-secondary btn-sm">Ev</button></a></center>
      <div class="row">
</div>

      </div>
      <div class="credits"> <p class="text-white mb-0 small text-center">Made by <span class="text-danger"><i class="fas fa-heart"></i></span> takipci.live</p> 
  </div>
    </div>
</div>
<br>
<div class="features bg-white" id="siparislerim">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="feature">
					<div class="big-icon text-primary"><i class="fab fa-free-code-camp"></i></div>
					<h5 class="text-primary">%100 Ücretsiz</h5>
					<p class="lead">Tiktok hesabınız için %100 ücretsiz video izlenme hilesi. Bu aracı kullanarak artık videolarınız öne çıkar, Uçmaya hazır mısın?</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="feature">
					<div class="big-icon text-secondary"><i class="fa fa-check-circle"></i></div>
					<h5 class="text-secondary">%100 Şifresiz</h5>
					<p class="lead">Artık şifre vermeden sadece Tiktok video linki girerek binlerce izlenme gönderin. Üstelik hiçbir ücret ödemeden.</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="feature">
					<div class="big-icon text-success"><i class="fa fa-child"></i></div>
					<h5 class="text-success">Kullanım Kolaylığı</h5>
					<p class="lead">Sadece Tiktok video bağlantısı girerek Binlerce izlenme gönderebilirsin. İnsanlar artık seni keşfedecek hazır mısın?</p>
				</div>
			</div>
		</div>
	</div>
</div>
<center><div class="col-6 col-md-6"><?php echo $reklam_1; ?></div></center>
<div class="intro bg-light">
  <div class="container">
    <div class="section desc">
      <div class="row">
       
         <div class="card no-hover color col-12 col-md-12 offset-md-2"><br>
  <img src="https://s16.tiktokcdn.com/tiktok/falcon/_next/static/images/logo-text-dark-673b189595b95d8bbf2ab1783ae2ab25.svg" class="text-center" width="150" title="Tiktok" alt="Şifresiz Tiktok İzlenme Hilesi">
  <div class="card-body">
    <p class="card-text"><p class="lead"><b>Nasıl Kullanılır?<br></b> <code>Video bağlantıları sadece Mobil uygulamalar üzerinden alınmalı!</code><br>
    1- Tiktok uygulamasını açın.<br>
    2- İşlem yapacağınız video'yu seçin.<br>
    3- Paylaş butonuna tıklayın ve Bağlantıyı kopyala butonuna basın!<br>
    4- Kopyaladığınız bağlantıyı üste duran kutucuğa yapıştırın ve gönder butonuna tıklayın.<br>
    5- Reklam sayfasını geçtikten sonra siparişiniz alınır Miktar #<?php echo "$miktar_2"; ?> Adet.</p></p>
  </div>
</div>

              
        </div>
      </div>
    </div>




    
<?php include 'sp-rs-ler.php'; ?>


<center><?php echo $reklam_; ?></center>
    
<?php include 'alt.php'; ?>
