<?
require_once('simple_html_dom.php');
mysql_connect("localhost","root","");
mysql_select_db("lazada"); 
mysql_query("SET NAMES UTF8");
  //  $url = 'http://www.lazada.co.th/eloop/';
   $url = trim($_GET['url']);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $curl_scraped_page = curl_exec($ch);

    $html = new simple_html_dom();
    $html->load($curl_scraped_page);




$first=array();
$datadeed = array();
$i = 0 ;
foreach ($html->find('div[data-price]') as $e) {
     $first = $e->next_sibling();
     $datadeed[$i]['href'] = $e->children(0)->href;
    
      $datadeed[$i]['name'] = $e->children(0)->find('div[class="product-card__name-wrap"] span',0)->getAttribute('title');
      $datadeed[$i]['price'] = $e->children(0)->find('div[class="product-card__price"]',0)->plaintext;
      $datadeed[$i]['sale'] = $e->children(0)->find('div[class="product-card__sale"]',0)->plaintext;
      $datadeed[$i]['img'] = $e->children(0)->find('div[class="product-card__img"] img',0)->getAttribute('data-original');
       
       mysql_query("INSERT INTO product (name, price, sale, img, groupb,href) VALUES ('".$datadeed[$i]['name']."','".$datadeed[$i]['price']."','".$datadeed[$i]['sale']."','".$datadeed[$i]['img']."','eloop','".$datadeed[$i]['href']."')")  or die('Error: '. mysql_error() );
      
     $i++;

}

//print_r($datadeed);

    ?>