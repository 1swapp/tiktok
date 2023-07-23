<?php
include "config.php";
$query = $db->query("SELECT * FROM siteAyar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          $title2 = $row['title'];
          $siteAd2 = $row['siteAd'];
          $metaDescription2 = $row['metaDescription'];
          $metaKeywords2 = $row['metaKeywords'];
          $whatsaap1 = $row['whatsaap'];
          $apiUrl_2 = $row['apiUrl'];
          $apiKey_2 = $row['apiKey'];
          $apiservisİD_2 = $row['apiservisİD'];
          $miktar_2 = $row['miktar'];
          $reklamUrl2 = $row['reklamUrl'];

           $reklam_1 = $row['reklam'];

           $modal1 = $row['modal'];

           $paket_1 = $row['paket'];
            $paketaciklama_1 = $row['paketaciklama'];
             $paket_2 = $row['paket1'];
              $paketaciklama_7 = $row['paket1aciklama'];
               $paket_3 = $row['paket2'];
                $paketaciklama_3 = $row['paket2aciklama'];
          
     }
}
function convertUrl($url){
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_exec($ch);
	$redirectURL = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
	return $redirectURL;
	curl_close($ch);
}
function tikTokLinkCheck($link){
	$ch = curl_init('https://www.tiktok.com/oembed?url='.$link);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	$curl = curl_exec($ch);
	return json_decode($curl, true);
	curl_close($ch);

}
function CheckApi($id){
    global $apiKey_2,$apiUrl_2;
    $ch = curl_init();
    $Sorgulat = array 
    (
        'key' => $apiKey_2,
        'action' => 'status',
        'order' =>  $id
        );  
    curl_setopt($ch, CURLOPT_URL, "$apiUrl_2"); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($Sorgulat));
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    $response = curl_exec($ch);
    $hi = json_decode($response, true);
    return $hi['status'];
}
function CheckDb($link){

	
    // Global Degişkenleri Belirttik //
    global $db;
        
    $query = $db->prepare("select * from islemLog where link = ?");
    $checkdb = $query->execute(array($link));
    if ($query->rowCount()>0){
        return false;
	}else{
        return true;
	}
        
}