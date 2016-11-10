<?
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- SmartAddon.com Verification -->
    <meta name="smartaddon-verification" content="936e8d43184bc47ef34e25e426c508fe" />
	<meta name="keywords" content="Flat UI Design, UI design, UI, user interface, web interface design, user interface design, Flat web design, Bootstrap, Bootflat, Flat UI colors, colors">
	<meta name="description" content="The complete style of the Bootflat Framework.">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/site.min.js"></script>
	<title></title>
</head>
<body>
<div class="col-md-12">
                <nav class="navbar navbar-inverse" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Shop Online</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#">หน้าแรก</a></li>
                        <!-- <li class="disabled"><a href="#">Link</a></li> -->
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">หมวดหมู่ <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">เสื้อผ้า</li>
                            <li><a href="#">คอมพิวเตอร์</a></li>
                            <li><a href="#">ของเล่นเด็ก</a></li>
                            <li><a href="#">กระเป๋า</a></li>
                            <li class="divider"></li>
                            <li class="active"><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li class="disabled"><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-right" role="search">
                        <div class="form-search search-only">
                          <i class="search-icon glyphicon glyphicon-search"></i>
                          <input type="text" class="form-control search-query">
                        </div>
                      </form>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
              </div>
       <div class="col-md-12">
        <h2 class="example-title">Thumbnails</h2>
        <div class="row">
        <?
 $sqlqr = mysql_query("SELECT * FROM product");
 while ($row = mysql_fetch_array($sqlqr)) {
 
        ?>
            <div class="col-sm-6 col-md-3" style="" >
              <div class="thumbnail" style="width: 233px; height: 440px;">
                <img class="img-rounded" height="233" width="233" alt="<?=$row['name']?>" style="height: 233px; width: 233px;" src="<?=$row['img']?>">
                <div class="caption text-center">
                  <h3><?=$row['name']?></h3>
                  <p><font color="green"><? echo $row['price']." ";?></font><del> <font color="red"><? echo $row['sale'];?></font></del></p>
                  <p><a href="<?=$row['href']?>"  class="btn btn-warning" role="button">รายละเอียด</a></p>
                </div>
              </div>
            </div>
            <?
	# code...
 }
            ?>
         
      
          </div>
      </div>


</body>
</html>