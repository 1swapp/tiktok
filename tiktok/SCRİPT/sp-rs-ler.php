<?php

//include "fonksiyon.php";
if($_COOKIE["kullanici"]){
?>
  

  <div class="col-12">
    <div class="card no-hover">
      <div class="card-header">
        <h4 class="card-title">Sipariş Geçmişi</h4>
      </div>
      <div class="card-content collapse show">
        <div class="table-responsive">
          <table class="table">
            <thead class="bg-primary text-white">
              <tr>
                <th>#</th>
                <th>Link / Kullanıcı Adı</th>
                <th>İşlem Tarihi</th>
                <th>Kullanici</th>
                <th>Durum</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  
                  <?php
                  
                  
  


            $query=$db->prepare("SELECT * FROM islemLog WHERE kullanici = ?");
            $query->execute(array($_COOKIE["kullanici"]));
          if ( $query->rowCount() ){

          }

          foreach ($query as $row) {
            ?>
                    <th scope="row"><?=$row["id"];?></th>
                    <td><?php echo  ''. htmlspecialchars($row["link"]) .'' ; ?></td>
                    <td><?php echo $row["tarih"]; ?></td>
                    <td><?php echo $row["kullanici"]; ?></td>
                    <td><?php echo CheckApi($row["siparisID"]); ?></td>
                  </tr>   
                  
                            <?php } ?>
                            
                            
                            
                  
                  </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


<?php }else{
echo '<center><div class="alert alert-warning col-6 col-md-6" role="alert">Henüz hiç siparişiniz yok.</div></center>';

}?>