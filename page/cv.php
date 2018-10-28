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
$bibliotheque = simplexml_load_file('../trad/cv.xml');
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
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <title>David Goerig Website</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/smoothscroll.js"></script> 
    <script src="../assets/js/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="../index.php?lang=<?php echo $_SESSION['lang'];?>" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="./cv.php?lang=<?php echo $_SESSION['lang'];?>" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="./portfolio.php?lang=<?php echo $_SESSION['lang'];?>" title="Portfolio"><i class="icon-briefcase"></i></a></li>
                            <li class="menu-item">
                                <a href="cv.php?lang=en" style="z-index=101;">
                                    <img src="../assets/img/flag/en.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cv.php?lang=fr">
                                    <img src="../assets/img/flag/fr.png" alt="" width=20 height=20>
                                </a>
                            </li>
                            <li>
                                <a href="cv.php?lang=ger">
                                    <img src="../assets/img/flag/ger.png" alt="" width=20 height=20>
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

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>David Goerig</h1>
					<h3><?php echo $_SESSION['xmllang']->pres;?></h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
    <div class ="row">
        <div class="col-lg-1 col-lg-offset-2">
            <i></i> <sm><?php echo $_SESSION['xmllang']->dld;?></sm>
        </div>
        <div class="col-lg-6">
                 <a href="../todlfile/CVANGDGOERIG.pdf"><img src="../assets/img/flag/en.png" alt="" width="40" height="40"></a>
                 <a href="../todlfile/CVFRDGOERIG.pdf"><img src="../assets/img/flag/fr.png" alt="" width="40" height="40"></a>
                <a href="../todlfile/CVGERGOERIG.pdf"><img src="../assets/img/flag/ger.png" alt="" width="40" height="40"></a>
        </div>
    </div>

    <section id="resume" name="resume"></section>
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5><?php echo $_SESSION['xmllang']->education;?></h5>
				</div>
			<!--EPITECH-->
				<div class="col-lg-6">
					<p><t><?php echo $_SESSION['xmllang']->master;?></t><br/>
						EPITECH France <br/>
						<i>2016 - 2021</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm><?php echo $_SESSION['xmllang']->year;?></sm><br/>
					<imp><sm><?php echo $_SESSION['xmllang']->progress;?></sm></imp>
					</p>
				</div>
			<!--FAC-->
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><?php echo $_SESSION['xmllang']->faculty;?></t><br/>
                        <?php echo $_SESSION['xmllang']->univ;?><br/>
						<i>2013 - 2016</i>
					</p>
				</div>
			<!--BAC-->
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><?php echo $_SESSION['xmllang']->bacc;?></t><br/>
						Don Bosco Landser <br/>
						<i>2010 - 2013</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm><?php echo $_SESSION['xmllang']->obtain;?></sm></p>
				</div>

		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	
	<!--WORK DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5><?php echo $_SESSION['xmllang']->work;?></h5>
				</div>
            <!--CLEMESSY-->
            <div class="col-lg-6">
                <p><t><?php echo $_SESSION['xmllang']->pres;?></t><br/>
                    New Health Community, Toulouse. <br/>
                </p>
                <p><more><?php echo $_SESSION['xmllang']->nhcresume;?></more></p>
            </div>
            <div class="col-lg-3">
                <p><sm><?php echo $_SESSION['xmllang']->nhcdate;?></sm></p>
            </div>
			<!--CLEMESSY-->
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><?php echo $_SESSION['xmllang']->pres;?></t><br/>
						Clemessy Mulhouse. <br/>
					</p>
					<p><more><?php echo $_SESSION['xmllang']->clemresume;?></more></p>
				</div>
				<div class="col-lg-3">
					<p><sm><?php echo $_SESSION['xmllang']->clemdate;?></sm></p>
				</div>

			<!--DELPHARM -->
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><?php echo $_SESSION['xmllang']->delph;?></t><br/>
					Delpharm, Huningue<br/>
					</p>
					<p><more><?php echo $_SESSION['xmllang']->delphresume;?></more></p>
				</div>
				<div class="col-lg-3">
					<p><sm><?php echo $_SESSION['xmllang']->delphsmr;?></sm></p>
				</div>
			<!--ROCHE PRAKTIKUM-->
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><?php echo $_SESSION['xmllang']->roche;?></t><br/>
						Hoffmann La­Roche, Bâle<br/>
					</p>
					<p><more><?php echo $_SESSION['xmllang']->rocheresume;?></more></p>
				</div>
				<div class="col-lg-3">
					<p><sm><?php echo $_SESSION['xmllang']->rocheint;?></sm></p>
				</div>
			<!--ROCHE SUMMERJOB -->
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><?php echo $_SESSION['xmllang']->rochesmr;?></t><br/>
						Hoffmann La­Roche, Bâle<br/>
					</p>
					<p><more><?php echo $_SESSION['xmllang']->rochesmrres;?></more></p>
				</div>
				<div class="col-lg-3">
					<p><sm><?php echo $_SESSION['xmllang']->rochesmrsmr;?></sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	<!--SKILLS DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="javascript" height="130" width="130"></canvas>
						<p>J<?php echo $_SESSION['xmllang']->skills;?></p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="clanguage" height="130" width="130"></canvas>
						<p>C</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("clanguage").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="cpp" height="130" width="130"></canvas>
						<p>C++</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("cpp").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					
					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="pythonl" height="130" width="130"></canvas>
						<p>Python</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("pythonl").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

					<div class="col-lg-3 centered">
						<canvas id="htmlcss" height="130" width="130"></canvas>
						<p>HTML/CSS</p>
						<br>
						<script>
                        	var doughnutData = [
                           	 {
                            	    value: 80,
                        	        color:"#1abc9c"
                      	      },
                            	{
                        	        value : 20,
                    	            color : "#ecf0f1"
                   	         }
                        ];
                  	      var myDoughnut = new Chart(document.getElementById("htmlcss").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

					<div class="col-lg-3 centered">
						<canvas id="csharp" height="130" width="130"></canvas>
						<p>C#</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 60,
										color:"#1abc9c"
									},
									{
										value : 40,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("csharp").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->

	<section id="work" name="work"></section>
	<!--PORTFOLIO DESCRIPTION -->
	<div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>PORTFOLIO</h5>
				</div>
			<!-- ENA -->
				<div class="col-lg-6">
                    <a href="./articles/epiena.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port01.jpg" alt="" border="0"></a>
				</div>
				<div class="col-lg-3">
					<p>ENA/EPITECH Hackathon</p>
				<p><more><?php echo $_SESSION['xmllang']->epiena;?>
					<sm><i class="icon-tag"></i> hackathon</sm></more>
				</p>
				</div>
			<!-- Clemessy -->
                <div class="col-lg-6 col-lg-offset-3">
                    <a href="./articles/clemessy.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port02.bmp" alt="" border="0"></a>
                </div>
				<div class="col-lg-3">
						<p><?php echo $_SESSION['xmllang']->internpro;?></p>
                    <p><more><?php echo $_SESSION['xmllang']->projectclem;?>
                            <sm><i class="icon-tag"></i> javascript</sm>
						<sm><i class="icon-tag"></i> java</sm>
						<sm><i class="icon-tag"></i> internship</sm></more>
					</p>
				</div>
			<!-- Raytracer -->
                <div class="col-lg-6 col-lg-offset-3">
                      <a href="./articles/raytracer.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port03.bmp" alt="" border="0"></a>
                </div>
				<div class="col-lg-3">
						<p>RAYTRACER</p>
					<p><more><p><more><?php echo $_SESSION['xmllang']->raytracing;?>
                            <br/><br/>
						<sm><i class="icon-tag"></i> C</sm></more>
					</p>
				</div>
			<!--Trade -->
            <div class="col-lg-6 col-lg-offset-3">
                <a href="./articles/trade.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port04.bmp" alt="" border="0"></a>
            </div>
				<div class="col-lg-3">
					<p>MY TRADING ALGORITHM</p>
					<p><more><?php echo $_SESSION['xmllang']->trading;?>
                            <sm><i class="icon-tag"></i> python</sm></more>
					</p>
				</div>
			<!--Sony -->
            <div class="col-lg-6 col-lg-offset-3">
                <a href="./articles/sony.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port05.bmp" alt="" border="0"></a>
            </div>
				<div class="col-lg-3">
					<p>SONY MUSIC HACKATHON</p>
					<p><more><?php echo $_SESSION['xmllang']->sony;?>
                            <sm><i class="icon-tag"></i> hackathon</sm></more>
					</p>
				</div>
			<!--Google code -->
            <div class="col-lg-6 col-lg-offset-3">
                <a href="./articles/googlehc.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port06.bmp" alt="" border="0"></a>
            </div>
				<div class="col-lg-3">
					<p>GOOGLE HASHCODE</p>
					<p><more><?php echo $_SESSION['xmllang']->googlehc;?>
                            <sm><i class="icon-tag"></i> hackaton</sm></more>
					</p>
				</div>
			<!--MMO -->
            <div class="col-lg-6 col-lg-offset-3">
                <a href="./articles/mymmo.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port07.bmp" alt="" border="0"></a>
            </div>
				<div class="col-lg-3">
					<p>MY FIRST MMO</p>
					<p><more><?php echo $_SESSION['xmllang']->firstmmo;?>
                            <sm><i class="icon-tag"></i> unity</sm>
						<sm><i class="icon-tag"></i> C#</sm></more>
					</p>
				</div>
			<!--Bomberman -->
            <div class="col-lg-6 col-lg-offset-3">
                <a href="./articles/mybomberman.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port08.bmp" alt="" border="0"></a>
            </div>
				<div class="col-lg-3">
					<p>BOMBERMAN REMAKE</p>
					<p><more><?php echo $_SESSION['xmllang']->bombermanr;?>
                            <sm><i class="icon-tag"></i> C++</sm></more>
					</p>
				</div>
			<!-- Article machine lerning en python -->
                <div class="col-lg-6 col-lg-offset-3">
                    <a href="./articles/mlpython.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port09.bmp" alt="" border="0"></a>
                </div>
				<div class="col-lg-3">
					<p>PYTHON MACHINE LEARNING</p>
					<p><more><?php echo $_SESSION['xmllang']->pythonml;?>
                            <sm><i class="icon-tag"></i> machine lerning</sm>
						<sm><i class="icon-tag"></i> python</sm></more>
					</p>
				</div>
            <!-- Article EMTECH en python -->
            <div class="col-lg-6 col-lg-offset-3">
                <a href="./articles/emtech.php?lang=<?php echo $_SESSION['lang'];?>"><img class="img-responsive" src="../assets/img/port10.bmp" alt="" border="0"></a>
            </div>
            <div class="col-lg-3">
                <p>EMTECH TOULOUSE</p>
                <p><more><?php echo $_SESSION['xmllang']->pythonml;?>
                        <sm><i class="icon-tag"></i> EMTECH</sm>
                        <sm><i class="icon-tag"></i> MIT</sm></more>
                </p>
            </div>
		</div><!--/.row -->
		<br>
		<br>
	</div><!--/.container -->

	<section id="contact" name="contact"></section>
	<!--FOOTER DESCRIPTION -->
	<div id="footwrap">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-2 col-lg-offset-1">
					<h5>CONTACT</h5>
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
						<a href="https://twitter.com/david_goerig"><i class="icon-twitter"></i></a>
						<a href="https://www.facebook.com/GoerigDavid"><i class="icon-facebook"></i></a>
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
    <script src="../assets/js/bootstrap.js"></script>
  </body>
</html>
