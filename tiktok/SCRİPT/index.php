<?php // Bu Script www.botcuyuz.com tarafından yazılmıştız hiçbir satış hakkınız yoktur.
include "fonksiyon.php";
 if(isset($_POST['tikTok'])){
	$url = $_POST['url'];

	$parse=parse_url($url);
	if($parse['host']=="vm.tiktok.com"){
		$url=convertUrl($url);
		$parses=parse_url($url);
		$url="https://".$parses['host'].$parses['path'];
	}
	$check=tikTokLinkCheck($url);
	
	if (!is_array($check) || !isset($check['author_url'])) {
		$bilgi ='<div class="alert alert-danger">Tiktok uygulamasında böyle bir video bulamadım üzgünüm :(</div>';
		}else{
		    $checkDb=CheckDb($url);
		    if($checkDb){
		        
		        setcookie("kullanici", $check['author_url'], time()+60*60*24*365 ); 
		        setcookie("url", $url, time()+60*60*24*365 ); 
		        
		        header("Refresh: 3; url=$reklamUrl2");  
		        
		        $basari= '<div class="alert alert-success">Başarılı lütfen bekleyin yönlendiriyorum :)</div>';

		        
		        //echo $check['author_url'];
		        
		    }else{
		        $bilgi = '<div class="alert alert-danger">Her video ya bir defa izlenme atabilirsin üzgünüm :(</div>';
		    }
		    
		    
	}

 }
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title2; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    	<h1 class="text-white text-center">Tiktok Şifresiz İzlenme </h1>
 <center><?php echo $basari; ?></center>
      <div class="row">
        <div class="col-lg-5  offset-lg-2 text-center">
            <div class="title">
              <b class="text-white">Tiktok hesabınız için ücretsiz şifre vermeden izlenme gönderin.</b><hr>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="card no-hover" style=" background-image: -webkit-gradient(linear,left top,right top,from(#8000ff),to(#ff3145));
														background-image: -webkit-linear-gradient(left,#8000ff,#ff3145);
														background-image: -moz-linear-gradient(left,#8000ff,#ff3145);
														background-image: -o-linear-gradient(left,#8000ff,#ff3145);
														background-image: linear-gradient(to right,#8000ff,#ff3145);
														background-repeat: repeat-x;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $paket_1; ?></h5>
    <p class="card-text"><?php echo $paketaciklama_1; ?></p>
    <a href="https://wa.me/90<?php echo $whatsaap1; ?>" class="btn btn-primary">Satın Al</a>
  </div>
</div>
    </div>
    <div class="carousel-item">
     <div class="card no-hover" style=" background-image: -webkit-gradient(linear,left top,right top,from(#8000ff),to(#ff3145));
														background-image: -webkit-linear-gradient(left,#8000ff,#ff3145);
														background-image: -moz-linear-gradient(left,#8000ff,#ff3145);
														background-image: -o-linear-gradient(left,#8000ff,#ff3145);
														background-image: linear-gradient(to right,#8000ff,#ff3145);
														background-repeat: repeat-x;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $paket_2; ?></h5>
    <p class="card-text"><?php echo $paketaciklama_7; ?></p>
    <a href="https://wa.me/90<?php echo $whatsaap1; ?>" class="btn btn-primary">Satın Al</a>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card no-hover" style=" background-image: -webkit-gradient(linear,left top,right top,from(#8000ff),to(#ff3145));
														background-image: -webkit-linear-gradient(left,#8000ff,#ff3145);
														background-image: -moz-linear-gradient(left,#8000ff,#ff3145);
														background-image: -o-linear-gradient(left,#8000ff,#ff3145);
														background-image: linear-gradient(to right,#8000ff,#ff3145);
														background-repeat: repeat-x;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $paket_3; ?></h5>
    <p class="card-text"><?php echo $paketaciklama_3; ?></p>
    <a href="https://wa.me/90<?php echo $whatsaap1; ?>" class="btn btn-primary">Satın Al</a>
  </div>
</div>
    </div>
  </div><br><br>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"><font color="white">Geri</font></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"><font color="white">ileri</font></span>
  </a>
</div>

            </div>
            
        </div>
        <div class="card no-hover color col-lg-5">
  <div class="card-body">
  	<center><?php echo $bilgi; ?></center>
  	<form action="" method="POST">
    <h5 class="card-title">Tiktok izlenme</h5>
    <div class="form-group">
<input type="text" name="url" placeholder="Tiktok video bağlantısı" class="form-control" id="inputValid" >
                         <hr>
                            
                          </div>
                          <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group has-success">
                            <input type="text" value="Miktar: <?php echo "$miktar_2"; ?>" class="form-control is-valid" id="inputValid" disabled="">
                            <div class="valid-feedback">Kaç adet gelecek.</div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group has-danger">
                             <button type="button" data-toggle="modal" data-target="#glassAnimals" class="btn btn-primary btn-pill" >Gönder</button>
                          </div>
                        </div>
                      </div>
                     
                    </div>

  </div>
</div>


<div class="modal fade" id="glassAnimals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Bilgi</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     <font color="black"> <?php echo $modal1; ?></font>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
      <button type="submit" name="tikTok" class="btn btn-success">İşleme devam et</button>
    </div>
  </div>
</div>
</div></from>

      </div>
      <div class="credits"> <p class="text-white mb-0 small text-center">Made by <span class="text-danger"><i class="fas fa-heart"></i></span> takipci.live</p> 
  </div>
    </div>
</div>
<br>
<center><div class="col-6 col-md-6"><?php echo $reklam_1; ?></div></center>
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
        <center><?php echo $reklam_1; ?></center>
      </div>

    </div>



    
<?php include 'sp-rs-ler.php'; ?>


    
<?php include 'alt.php'; ?>
