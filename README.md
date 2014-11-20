sPagination - PHP Bootstrap Pagination Class
====================

sPagination sınıfı sayesinde bootstrap arayüzlü php tabanlı sistemlerinizde sayfalama sistemini oldukça kolay bir şekilde yapa bilirsiniz default olarak bootstrap'ın class'larına uygun biçimde calışır.

Not ; 
eğer kulalnımı tam olarak anlamadı iseniz örnek SQL Dosyası ve php örnekleri example klasörü içindedir.

Sınıf dahil edip calıştıralım.
---------------------
Ben sınıfı dahil edip sayfalama adında bir değişkene aktardım siz istediğiniz ismi kullana bilirsiniz.
``` php
	require_once "sPagination.php";
	$sayfalama = new sPagination(); 
```

Sınıf ile kullana bileceğiniz metodlar  
====================


Dil yapılandırması
---------------------
Dil yapılandırması oldukça kolaydır hangi dili kullanacak iseniz bir dizi şeklinde göndermeniz yeterlidir. örnek ;

``` php
	$sayfalama->lang=array(
		'first'=>'İlk',
		'last'=>'Son',
		'totalrecord'=>'arası kayıt gösteriliyor'
	 );
```
yukarıdaki örnek türkçe içindir default olarak ingilizce için ise ; 

``` php
	$sayfalama->lang=array(
	 	'first'=>'First',
	 	'last'=>'Last',
	 	'totalrecord'=>'total records'
	 );
```

Toplam içerik sayısını gönderme ( zorunlu ) 
---------------------
``` php
	$sayfalama->totalpost = $toplamicerik;
```
yukarıdaki toplamicerik değişkeni sayı olmalıdır bu toplam içeriği klasik select count(*).. şeklinde edine bilirsiniz 


Bir sayfada görüntülenecek içerik sayısı
---------------------
Bir sayfada en fazla kaç içerik olacağını belirtmek için maxpost methodunu kullanmanız yeterli göndericeğiniz değer int yani sayı olmak zorundadır.
``` php
$totalpost=5;
$sayfalama->maxpost=$totalpost; 

```

Sayfa adresi belirtme
---------------------
url yapısında sorun olmamasını istiyor iseniz sayfa adresini belirtmeniz gerekmektedir örnek ;
``` php
$sayfalama->url='example.php'; 
```

GET değeri belirleme
---------------------
Sınıf otomatik olarak get değeri oluşturacaktır bunu değersiz yaparsanız page olarak kullanacaktır farklı bir şey için getname methodunu kullanmalısınız.

``` php
	$sayfalama->getname='page'; 
```

Sayfalama Boyutu
---------------------
Bootstrap ın sayfalama düzenindeki boyutu için değer göndermeniz yeterlidir gelecek sm veya lg olmalıdır veya boş bıraka bilirsiniz.
``` php
	$sayfalama->size='sm'; 
```

Sayfaları listeletme
---------------------
Sayfaları listeletme yani sayfalamanın tuşlarının olacağı yeri listelemek için ise pageList() methodunu kullanmalısınız.
``` php
	$sayfalama->pageList();
```




Author : [Savas Can ALTUN](http://savascanaltun.com.tr/)
Mail : savascanaltun@gmail.com
Web : http://savascanaltun.com.tr


