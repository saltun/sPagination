<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<meta charset="utf-8"/>
<?php

include "sPagination.php";

// pdo ile veritabanı bağlantısı
$databaseHost="localhost";
$databaseName="spagination";
$databaseUser="root";
$databasePassword="";

$db = new PDO("mysql:host=".$databaseHost.";dbname=".$databaseName, $databaseUser, $databasePassword);

// toplam kayıtları alıyoruz ve değişkene aktarıyoruz

$total_records=$db->query('SELECT count(*) from data')->fetchColumn();


// maximum içerik sayısını belirleyip değişkene aktarıyoruz
$totalpost=5;

@$page=$_GET['page'];

if (empty($page)) {
	$page=1;
}

$page=$page-1;

$bas = $totalpost * $page;

$query = $db->query("SELECT * FROM data LIMIT $bas,$totalpost", PDO::FETCH_ASSOC);
if ($query->rowCount() ){
     foreach( $query as $row ){
          echo $row['title']."<br />";
     }
}






$sayfalama = new sPagination(); 
 

// language settings [EN]
/*
	$sayfalama->lang=array(
	 	'first'=>'First',
	 	'last'=>'Last',
	 	'totalrecord'=>'total records'
	 );
*/


// dil ayarları [TR]

$sayfalama->lang=array(
 	'first'=>'İlk',
 	'last'=>'Son',
 	'totalrecord'=>'arası kayıt gösteriliyor'
 );


// içerik sayısını gönderiyoruz 
$sayfalama->totalpost=$total_records; 

// maximum içerik sayısını belirtiyoruz
$sayfalama->maxpost=$totalpost; 

// sayfanın adresini veriyoruz default olarak şuanki sayfayı tanır
$sayfalama->url='example.php'; 

// get ile gelecek değerin adını belirliyoruz default değeri page .
$sayfalama->getname='page'; 

// bootstrap ile boyutunu belirletiyoruz sm veya lg diye bilirsiniz veya boş 
$sayfalama->size='sm'; 

// sayfalama fonksiyonumuzu cağırıyoruz
$sayfalama->pageList();

?>