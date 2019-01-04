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
$bibliotheque = simplexml_load_file('../../trad/clemessy.xml');
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
                                <a href="clemessy.php?lang=en" style="z-index=101;">
                                    <img src="../../assets/img/flag/en.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="clemessy.php?lang=fr">
                                    <img src="../../assets/img/flag/fr.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li>
                                <a href="clemessy.php?lang=ger">
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

	<div id="headerarticleclem">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->

	<div id="articleeclem">
		<div class="container">
            <h5><?php echo $_SESSION['xmllang']->pres;?></h5>
            <div class="col-lg-8 col-lg-offset-2">
                <h5><?php echo $_SESSION['xmllang']->pa;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pb;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pc;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pd;?></h5>
                <div class="col-lg-2">
                    <img src="../../assets/img/icons/eye.png" width="50" height="50">
                </div>
                <div class="col-lg-9">
                    <h5 class="myborder"><?php echo $_SESSION['xmllang']->pe;?></h5>
                </div>
            </div>
            <div class="row">
                <a href="../../todlfile/INTERNSHIP.pdf" style="background-color: black;"><i></i> <h5><b><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                                                             viewBox="0 0 471.2 471.2" style="enable-background:new 0 0 471.2 471.2;" xml:space="preserve" width="20" height="20">
<g>
    <g>
        <path d="M457.7,230.15c-7.5,0-13.5,6-13.5,13.5v122.8c0,33.4-27.2,60.5-60.5,60.5H87.5c-33.4,0-60.5-27.2-60.5-60.5v-124.8
			c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v124.8c0,48.3,39.3,87.5,87.5,87.5h296.2c48.3,0,87.5-39.3,87.5-87.5v-122.8
			C471.2,236.25,465.2,230.15,457.7,230.15z"/>
        <path d="M226.1,346.75c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.8-85.8c5.3-5.3,5.3-13.8,0-19.1c-5.3-5.3-13.8-5.3-19.1,0l-62.7,62.8
			V30.75c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v273.9l-62.8-62.8c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1
			L226.1,346.75z"/>
    </g>
</g>
</svg> <?php echo $_SESSION['xmllang']->dld;?></b></h5></a>
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
