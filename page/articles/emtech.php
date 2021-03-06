<?php
session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
else {
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'fr';
    }
}
$bibliotheque = simplexml_load_file('../../trad/emtech.xml');
$lang = $_SESSION['lang'];
$_SESSION['xmllang'] = $bibliotheque->$lang;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="David Goerig">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>David Goerig Website</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/js/smoothscroll.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="../../index.php?lang=<?php echo $_SESSION['lang'];?>" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="../cv.php?lang=<?php echo $_SESSION['lang'];?>" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="../portfolio.php?lang=<?php echo $_SESSION['lang'];?>" title="Portfolio"><i class="icon-briefcase"></i></a></li>

                            <li class="menu-item">
                                <a href="mlpython.php?lang=en" style="z-index=101;">
                                    <img src="../../assets/img/flag/en.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="mlpython.php?lang=fr">
                                    <img src="../../assets/img/flag/fr.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li>
                                <a href="mlpython.php?lang=ger">
                                    <img src="../../assets/img/flag/ger.png" alt="" width=20 height=20>
                                </a>
                            </li>
						</ul><!--/ uL#nav -->
					</div><!-- /.dropdown -->

					<div class="clear"></div>
				</div><!--/.row -->
			</div><!--/.container -->

			<div class="clear"></div>
		</div><!--/ #topbar-inner -->
	</div><!--/ #section-topbar -->

    <div id="articlemmo">
        <div class="row">
            <img src="../../assets/img/port10.bmp" style="padding: 0;display: block;margin: 0 auto;max-height: 100%;max-width: 100%;">
        </div>
        <div class="container">
            <h5>EMTECH TOULOUSE</h5>
            <div class="col-lg-8 col-lg-offset-2">
                <h5><?php echo $_SESSION['xmllang']->pa;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pb;?></h5>
                <div class="row">
                    <img src="../../assets/img/emtech/emtech2.jpg" style="width:512px;height:288px;margin-bottom: 10px;">
                </div>
                <div class="row">
                    <img src="../../assets/img/emtech/emtech3.jpg" style="width:512px;height:288px;margin-bottom: 10px;">
                </div>
                <div class="row">
                    <img src="../../assets/img/emtech/emtech4.jpg" style="width:512px;height:288px;margin-bottom: 10px;">
                </div>
                <div class="row">
                    <img src="../../assets/img/emtech/emtech5.jpg" style="width:512px;height:288px;margin-bottom: 10px;">
                </div>
                <div class="row">
                    <img src="../../assets/img/emtech/emtech6.jpg" style="width:512px;height:288px;margin-bottom: 10px;">
                </div>
                <div class="row">
                    <img src="../../assets/img/emtech/emtech7.jpg" style="width:512px;height:288px;margin-bottom: 10px;">
                </div>
                <div class="row">
                    <img src="../../assets/img/emtech/emtech8.jpg" style="width:512px;height:288px;margin-bottom: 10px;">
                </div>
            </div>
        </div>
    </div>
    </div>

    <section id="contact" name="contact"></section>
    <!--FOOTER DESCRIPTION -->
    <div id="footwrap">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-lg-offset-1">
                    <h5><?php echo $_SESSION['xmllang']->contact;?></h5>
                </div>
                <div class="col-lg-6">
                    <p><t>Email</t><br/>
                        david.goerig@epitech.eu <br/>
                    </p>
                    <p><t><?php echo $_SESSION['xmllang']->adress;?></t><br/>
                        7 rue des Chouettes <br/>
                        68128 Village-Neuf <br/>
                        FRANCE <br/>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><sm><?php echo $_SESSION['xmllang']->lsos;?></sm></p>
                    <p>
                        <a href="https://www.linkedin.com/in/david-goerig-056212139/"><i class="icon-linkedin"></i></a>
                        <a href="https://github.com/DavidGoerig"><i class="icon-github"></i></a>
                    </p>
                </div>
            </div><!--/.row -->
        </div><!--/.container -->
    </div><!--/ #footer -->

    <div id="c">
        <div class="container">
            <p><?php echo $_SESSION['xmllang']->created;?></p>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/bootstrap.js"></script>
  </body>
</html>
