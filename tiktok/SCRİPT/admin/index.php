<?php
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');
include '../fonksiyon.php';
if (isset($_POST['AdminGirisYap'])) {
    ob_start();
    
    $kadi = $_POST['kadi'];
    $sifre=$_POST['sifre'];
    
    
    $kontrol = $db->prepare("SELECT * FROM admin WHERE mail=? && sifre=?");
    $kontrol ->execute(array($kadi,$sifre));
    
    $kbilgi = $kontrol ->fetch(PDO::FETCH_OBJ);
    

    if(empty($kadi)){
    echo 'Lütfen Boş Alan Bırakmayın.';
                        echo'<meta http-equiv="refresh" content="2;">';

    }else{
        
        if(empty($sifre)){
    echo 'Lütfen Boş Alan Bırakmayın.';
                        echo'<meta http-equiv="refresh" content="2;">';
        }else{
            if(!$kontrol->rowCount()){
            echo "Böyle bir kullanıcı bulunamadı";
echo'<meta http-equiv="refresh" content="2;">';
            }else{
                
                session_start();
                
                $_SESSION["login"]			=	true;
                $_SESSION["isim"]		=	$kbilgi->isim;
                
                    echo "başarılı";
                    ?>
					<script type="text/javascript"> function bekle(){ window.location = "<?php
  $sayfaURL = "http";
  if(isset($_SERVER["HTTPS"])){
    if($_SERVER["HTTPS"] == "on"){
      $sayfaURL .= "s";
    }
  }
  $sayfaURL .= "://";
  $sayfaURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
  echo $sayfaURL;
?>/panel.php" } bekle();  </script>
					<?php
                
                
            }
            
        }
        
        
    }

}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Yönetici girişi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>
<body>
  <div class="row">
<div class="col-6 col-md-6">
<div class="container">
  <h2>Admin Panel</h2>
  <form action="" method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname">Kullanıcı adı:</label>
      <input type="text" class="form-control" id="uname" placeholder="Kullanıcı adı" name="kadi" required>
      
      <div class="invalid-feedback">bu alan boş bırakılmaz.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Şifre:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Parola" name="sifre" required>
      
      <div class="invalid-feedback">bu alan boş bırakılmaz.</div>
    </div>

    <button type="submit" class="btn btn-primary" name="AdminGirisYap">Giriş Yap</button>
  </form>
</div></div></div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
