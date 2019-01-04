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
$bibliotheque = simplexml_load_file('../../trad/epiena.xml');
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
                                <a href="epiena.php?lang=en" style="z-index=101;">
                                    <img src="../../assets/img/flag/en.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="epiena.php?lang=fr">
                                    <img src="../../assets/img/flag/fr.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li>
                                <a href="epiena.php?lang=ger">
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

	<div id="headerarticleepiena">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>HACKATHON EPITECH/ENA</h1>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->

	<div id="articleepiena">
        <div class="container">
            <h5>HACKATHON EPITECH/ENA</h5>
            <div class="col-lg-8 col-lg-offset-2">
                <h5><?php echo $_SESSION['xmllang']->pa;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pb;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pc;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pd;?></h5>
                <h5><?php echo $_SESSION['xmllang']->pe;?></h5>
                <a href="http://www.epitech.eu/blogs/Hackathon-ENA-Epitech-lycee-Le-Corbusier-hackathon-innovation-conception-politiques-publiques.html">
                    <h5>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 54.971 54.971" style="enable-background:new 0 0 54.971 54.971;" xml:space="preserve" width="20" height="20">
                            <g>
                                <path d="M51.173,3.801c-5.068-5.068-13.315-5.066-18.384,0l-9.192,9.192c-0.781,0.781-0.781,2.047,0,2.828s2.047,0.781,2.828,0
		                        l9.192-9.192c1.691-1.69,3.951-2.622,6.363-2.622c2.413,0,4.673,0.932,6.364,2.623s2.623,3.951,2.623,6.364
		                        c0,2.412-0.932,4.672-2.623,6.363L36.325,31.379c-3.51,3.508-9.219,3.508-12.729,0c-0.781-0.781-2.047-0.781-2.828,0
		                        s-0.781,2.048,0,2.828c2.534,2.534,5.863,3.801,9.192,3.801s6.658-1.267,9.192-3.801l12.021-12.021
		                        c2.447-2.446,3.795-5.711,3.795-9.192C54.968,9.512,53.62,6.248,51.173,3.801z"/>
                                <path d="M27.132,40.57l-7.778,7.778c-1.691,1.691-3.951,2.623-6.364,2.623c-2.412,0-4.673-0.932-6.364-2.623
		                        c-3.509-3.509-3.509-9.219,0-12.728L17.94,24.306c1.691-1.69,3.951-2.622,6.364-2.622c2.412,0,4.672,0.932,6.363,2.622
		                        c0.781,0.781,2.047,0.781,2.828,0s0.781-2.047,0-2.828c-5.067-5.067-13.314-5.068-18.384,0L3.797,32.793
		                        c-2.446,2.446-3.794,5.711-3.794,9.192c0,3.48,1.348,6.745,3.795,9.191c2.446,2.447,5.711,3.795,9.191,3.795
		                        c3.481,0,6.746-1.348,9.192-3.795l7.778-7.778c0.781-0.781,0.781-2.047,0-2.828S27.913,39.789,27.132,40.57z"/>
                                <path d="M34.003,44.007c-1.104,0-2,0.896-2,2v6c0,1.104,0.896,2,2,2s2-0.896,2-2v-6C36.003,44.902,35.108,44.007,34.003,44.007z"/>
                                <path d="M41.175,42.593c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l4.242,4.242c0.391,0.391,0.902,0.586,1.414,0.586
		                        s1.023-0.195,1.414-0.586c0.781-0.781,0.781-2.047,0-2.828L41.175,42.593z"/>
                                <path d="M45.968,36.007h-6c-1.104,0-2,0.896-2,2s0.896,2,2,2h6c1.104,0,2-0.896,2-2S47.073,36.007,45.968,36.007z"/>
                                <path d="M18.003,13.007c1.104,0,2-0.896,2-2v-6c0-1.104-0.896-2-2-2s-2,0.896-2,2v6C16.003,12.111,16.899,13.007,18.003,13.007z"/>
                                <path d="M10.589,14.421c0.391,0.391,0.902,0.586,1.414,0.586s1.023-0.195,1.414-0.586c0.781-0.781,0.781-2.047,0-2.828L9.175,7.35
		                        c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828L10.589,14.421z"/>
                                <path d="M5.968,21.007h6c1.104,0,2-0.896,2-2s-0.896-2-2-2h-6c-1.104,0-2,0.896-2,2S4.864,21.007,5.968,21.007z"/>
                            </g>
                        </svg>
                         <?php echo $_SESSION['xmllang']->linkepi;?>
                    </h5>
                </a>
                <a href="https://www.lemonde.fr/campus/article/2018/03/13/les-futurs-enarques-a-l-epreuve-du-terrain_5270012_4401467.html">
                    <h5>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 54.971 54.971" style="enable-background:new 0 0 54.971 54.971;" xml:space="preserve" width="20" height="20">
                            <g>
                                <path d="M51.173,3.801c-5.068-5.068-13.315-5.066-18.384,0l-9.192,9.192c-0.781,0.781-0.781,2.047,0,2.828s2.047,0.781,2.828,0
		                        l9.192-9.192c1.691-1.69,3.951-2.622,6.363-2.622c2.413,0,4.673,0.932,6.364,2.623s2.623,3.951,2.623,6.364
		                        c0,2.412-0.932,4.672-2.623,6.363L36.325,31.379c-3.51,3.508-9.219,3.508-12.729,0c-0.781-0.781-2.047-0.781-2.828,0
		                        s-0.781,2.048,0,2.828c2.534,2.534,5.863,3.801,9.192,3.801s6.658-1.267,9.192-3.801l12.021-12.021
		                        c2.447-2.446,3.795-5.711,3.795-9.192C54.968,9.512,53.62,6.248,51.173,3.801z"/>
                                <path d="M27.132,40.57l-7.778,7.778c-1.691,1.691-3.951,2.623-6.364,2.623c-2.412,0-4.673-0.932-6.364-2.623
		                        c-3.509-3.509-3.509-9.219,0-12.728L17.94,24.306c1.691-1.69,3.951-2.622,6.364-2.622c2.412,0,4.672,0.932,6.363,2.622
		                        c0.781,0.781,2.047,0.781,2.828,0s0.781-2.047,0-2.828c-5.067-5.067-13.314-5.068-18.384,0L3.797,32.793
		                        c-2.446,2.446-3.794,5.711-3.794,9.192c0,3.48,1.348,6.745,3.795,9.191c2.446,2.447,5.711,3.795,9.191,3.795
		                        c3.481,0,6.746-1.348,9.192-3.795l7.778-7.778c0.781-0.781,0.781-2.047,0-2.828S27.913,39.789,27.132,40.57z"/>
                                <path d="M34.003,44.007c-1.104,0-2,0.896-2,2v6c0,1.104,0.896,2,2,2s2-0.896,2-2v-6C36.003,44.902,35.108,44.007,34.003,44.007z"/>
                                <path d="M41.175,42.593c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l4.242,4.242c0.391,0.391,0.902,0.586,1.414,0.586
		                        s1.023-0.195,1.414-0.586c0.781-0.781,0.781-2.047,0-2.828L41.175,42.593z"/>
                                <path d="M45.968,36.007h-6c-1.104,0-2,0.896-2,2s0.896,2,2,2h6c1.104,0,2-0.896,2-2S47.073,36.007,45.968,36.007z"/>
                                <path d="M18.003,13.007c1.104,0,2-0.896,2-2v-6c0-1.104-0.896-2-2-2s-2,0.896-2,2v6C16.003,12.111,16.899,13.007,18.003,13.007z"/>
                                <path d="M10.589,14.421c0.391,0.391,0.902,0.586,1.414,0.586s1.023-0.195,1.414-0.586c0.781-0.781,0.781-2.047,0-2.828L9.175,7.35
		                        c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828L10.589,14.421z"/>
                                <path d="M5.968,21.007h6c1.104,0,2-0.896,2-2s-0.896-2-2-2h-6c-1.104,0-2,0.896-2,2S4.864,21.007,5.968,21.007z"/>
                            </g>
                        </svg>
                         <?php echo $_SESSION['xmllang']->linkmonde;?>
                    </h5>
                </a>
                <a href="https://www.ena.fr/L-ENA-se-presente/L-ENA-dans-l-actualite/Les-actualites-de-l-Ecole/Nudge-Hackathon-et-Design-a-l-ENA-presentation-des-projets-laureats">
                    <h5>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 54.971 54.971" style="enable-background:new 0 0 54.971 54.971;" xml:space="preserve" width="20" height="20">
                            <g>
                                <path d="M51.173,3.801c-5.068-5.068-13.315-5.066-18.384,0l-9.192,9.192c-0.781,0.781-0.781,2.047,0,2.828s2.047,0.781,2.828,0
		                        l9.192-9.192c1.691-1.69,3.951-2.622,6.363-2.622c2.413,0,4.673,0.932,6.364,2.623s2.623,3.951,2.623,6.364
		                        c0,2.412-0.932,4.672-2.623,6.363L36.325,31.379c-3.51,3.508-9.219,3.508-12.729,0c-0.781-0.781-2.047-0.781-2.828,0
		                        s-0.781,2.048,0,2.828c2.534,2.534,5.863,3.801,9.192,3.801s6.658-1.267,9.192-3.801l12.021-12.021
		                        c2.447-2.446,3.795-5.711,3.795-9.192C54.968,9.512,53.62,6.248,51.173,3.801z"/>
                                <path d="M27.132,40.57l-7.778,7.778c-1.691,1.691-3.951,2.623-6.364,2.623c-2.412,0-4.673-0.932-6.364-2.623
		                        c-3.509-3.509-3.509-9.219,0-12.728L17.94,24.306c1.691-1.69,3.951-2.622,6.364-2.622c2.412,0,4.672,0.932,6.363,2.622
		                        c0.781,0.781,2.047,0.781,2.828,0s0.781-2.047,0-2.828c-5.067-5.067-13.314-5.068-18.384,0L3.797,32.793
		                        c-2.446,2.446-3.794,5.711-3.794,9.192c0,3.48,1.348,6.745,3.795,9.191c2.446,2.447,5.711,3.795,9.191,3.795
		                        c3.481,0,6.746-1.348,9.192-3.795l7.778-7.778c0.781-0.781,0.781-2.047,0-2.828S27.913,39.789,27.132,40.57z"/>
                                <path d="M34.003,44.007c-1.104,0-2,0.896-2,2v6c0,1.104,0.896,2,2,2s2-0.896,2-2v-6C36.003,44.902,35.108,44.007,34.003,44.007z"/>
                                <path d="M41.175,42.593c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l4.242,4.242c0.391,0.391,0.902,0.586,1.414,0.586
		                        s1.023-0.195,1.414-0.586c0.781-0.781,0.781-2.047,0-2.828L41.175,42.593z"/>
                                <path d="M45.968,36.007h-6c-1.104,0-2,0.896-2,2s0.896,2,2,2h6c1.104,0,2-0.896,2-2S47.073,36.007,45.968,36.007z"/>
                                <path d="M18.003,13.007c1.104,0,2-0.896,2-2v-6c0-1.104-0.896-2-2-2s-2,0.896-2,2v6C16.003,12.111,16.899,13.007,18.003,13.007z"/>
                                <path d="M10.589,14.421c0.391,0.391,0.902,0.586,1.414,0.586s1.023-0.195,1.414-0.586c0.781-0.781,0.781-2.047,0-2.828L9.175,7.35
		                        c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828L10.589,14.421z"/>
                                <path d="M5.968,21.007h6c1.104,0,2-0.896,2-2s-0.896-2-2-2h-6c-1.104,0-2,0.896-2,2S4.864,21.007,5.968,21.007z"/>
                            </g>
                        </svg>
                        <?php echo $_SESSION['xmllang']->linkena;?>
                    </h5>
                </a>
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
