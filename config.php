<?
$config = array('host' => "localhost",'user' => "root", 'pass' => "",'database' => "lazada");
mysql_connect($config['host'],$config['user'],$config['pass']);
mysql_select_db($config['database']);
mysql_query("SET NAMES UTF8");
?>