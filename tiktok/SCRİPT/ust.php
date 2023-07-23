    <meta name="author" content="Mehmet Ali Albayrak">

    <link href="https://www.google.com/s2/favicons?domain=www.tiktok.com" rel="icon" type="image/png">
    
    <link rel="stylesheet" href="./assets/vendor/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/lazy.css">
		<link rel="stylesheet" href="./assets/css/demo.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    
  </head>
  <body class="index">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="./"><p class="mr-2" height="30"><?php echo $siteAd2; ?></a></p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
	        <ul class="navbar-nav">
            <li class="nav-item dropdown mx-2">
              <a class="nav-link" href="index.php">Ana Sayfa</a>
 
            </li>
            <li class="nav-item dropdown mx-2">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModal">Siparişlerim</a>
 
            </li>
            <li class="nav-item dropdown mx-2">
              <a class="nav-link" href="https://www.turkbayi.com" >Smm Panel</a>
 
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Siparişlerim</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include 'sp-rs-ler.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>