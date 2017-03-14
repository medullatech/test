<?php include_once("includes/initialize.php");?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="keywords" content="Deepam Candles, deepam candles auroville, auroville deepam candles, deepamcandles, light, presence of light, art candles, carved candles, dry flower candles." />
    <meta name="description" content="The best source online and in person for Perfumed Candles, Natural Incense Sticks and Gift Products.   If you are looking to buy in large quantities which we do not hold in stock then please email us with your requirements." />
    <meta name="authors" content="Mr Murugan, Kalaiselvi murugan, Suresh Gothandapani" />
    
<link rel="shortcut icon" href="https://www.auroville.org.in/sites/www.auroville.org.in/files/auronet_favicon_0.gif" type="image/x-icon" />
	 
    
    
    

    <title><?=SITE_NAME;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/mystyle.css" rel="stylesheet">
   
<!--    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="src/mp.mansory.js"></script>-->
	<link rel="stylesheet" type="text/css" href="src/style.css">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index"><?= SITE_NAME;?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">  
                    <?php $pages = $database->get_child_tables("tbl_static");?>
                            <?php foreach($pages as $page){ ?>
                                <li>
                                    <a href="static?page=<?php echo urlencode($page['pageTitle']);?>&pageid=<?=$page['id'];?>"><?= $page['pageTitle'];?></a>
                                </li>
                            <?php } ?>
                     
                    <li>
                        <a href="contact-us">Contact</a>
                    </li>
                    <li>
                    	<a href="#"> Links </a>
                    </li>
                    
                     
                    <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="fa fa-shopping-cart"></i>
                       <?php /*if(isset($_SESSION['cart'])){
						    if( count($_SESSION['cart']) !== 0) echo "( ".$database->total_items($_SESSION['cart'] )." items )";
				
					   }*/
					   
					   ?>  <i class="fa fa-caret-down"></i>
                    </a>-->
                    <ul class="dropdown-menu dropdown-user">
                 
                 <!--       <li class="divider"></li>-->
                        <li><a href="cart"><i class="fa fa-sign-out fa-fw"></i> Checkout</a>
                        </li>
                    </ul>
                  
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
