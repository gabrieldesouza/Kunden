<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Metas Page details-->
<title>Kunden - Pessoas fazem a diferença</title>
<meta name="description" content="UX designer and web developer">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/component.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<link rel="shortcut icon" type="image/png" href="images/favico.png"/>
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700,800,100' rel='stylesheet' type='text/css'>
<!--font-family: 'Raleway', sans-serif; -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,600,700italic,700' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif; -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--font-family: 'Montserrat', sans-serif; -->

<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>

#wrap {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  justify-content: center;
  align-items: center;
  display: flex;
}

.janela {
/*   width: 50%; */
  background: #fff;
  padding: 3rem;
  text-align: center;
}


#wrap:not(:target) {
  opacity: 0;
  visibility: hidden;
  transition: opacity 1s, visibility 1s;
}

#wrap:target {
  opacity: 1;
  visibility: visible;
  transition: opacity 1s, visibility 1s;
}

.open a {
  text-decoration: none;
  color: white;
}
</style>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">

</head>
<body onLoad="load()" onUnload="GUnload()">
<div id="wrap">
  <div class="janela">
    <h2>I'm A Sleek Modal</h2>
    <p>Pretty sweet, eh?</p>
    <br/>
    <a class="close btn" href="#">Close Me!</a>
  </div>
</div>
<!--wrapper start-->
<div class="wrapper" id="wrapper">
<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>
<!--Header start -->
<header>
		<!--Language -->
        	        	<div class="container">
            	<div class="row relative">
            	<ul class="language">
                <li>
                <a href="index.php" class="portuguese" style="margin-top: -14px;"><img src="images/br.png"> Portugues</a>
                <a href="in.php" ><img src="images/in.png"> Ingles</a>
                <a href="en.php" class="spanish" style="margin-top: -14px;"><img src="images/es.png"> Espanhol</a>
                </li>
            </ul>
            </div>
            </div>
		<!--/Language -->
        <!--menu start-->
        <div class="menu">
          <div class="navbar-wrapper">
            <div class="container">
              <div class="navwrapper">
                <div class="navbar navbar-inverse navbar-static-top">
                  <div class="container">
                    <div class="logo"><img src="images/logo1.png"> </div>
                    <nav class="navArea">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                          </div>
                        <div class="navbar-collapse collapse">


                          <ul class="nav navbar-nav" id="navigation">
                           <li class="menuItem" id="home"><a href="#wrapper">Início</a></li>
                      <li class="menuItem"><a href="#about">The Company</a></li>
                      <li class="menuItem"><a href="#services">Solutions</a></li>
                      <li class="menuItem"><a href="#works">Portfolio</a></li>
                      <li class="menuItem"><a href="#team">ERP</a></li>
                      <li class="menuItem"><a href="#testimonial">Services</a></li>
                      <li class="menuItem"><a href="#suporte">Support</a></li>
                      <li class="menuItem"><a href="#contact">Contact</a></li>
                          </ul>
                        </div>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- End Navbar -->
            </div>
          </div>
        </div>
        <!--menu end-->

        <!--banner start-->
        <div class="banner row" id="banner">
          <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 noPadd slides-container" style="height:100%">
            <!--background slide show start-->
            <div class="slide">
              <!--header text1 start-->
              <div class="container hedaer-inner">
                  <div class="bannerText">
                  	<h1>Kunden </h1>
                    <h3>People do the difference.</h3>
                    <p>With many years ago, we absorbed knowledge by innovating our concepts. This allowed us to work with different segments, emphasizing the quality of our projects.</p>
                    <p class="banner-link"><a href="#about" class="smooth">Our introduction <i class="fa fa-chevron-down"></i></a></p>
                   </div>
               </div>
              <!--header text end-->
              <img src="images/h3.jpg" alt="image01"></div>
              <div class="slide">
              <!--header text1 start-->
              <div class="container hedaer-inner">
                  <div class="bannerText">
                  	<h1>Kunden </h1>
                    <h3>People do the difference.</h3>
                    <p>With many years ago, we absorbed knowledge by innovating our concepts. This allowed us to work with different segments, emphasizing the quality of our projects.</p>
                    <p class="banner-link"><a href="#services" class="smooth">Our solutions <i class="fa fa-chevron-down"></i></a></p>
                   </div>
               </div>
              <!--header text end-->
              <img src="images/h1.png" alt="image01"> </div>
              <div class="slide">
              <!--header text1 start-->
              <div class="container hedaer-inner">
                  <div class="bannerText">
                    <h1>Kunden </h1>
                    <h3>People do the difference.</h3>
                    <p>With many years ago, we absorbed knowledge by innovating our concepts. This allowed us to work with different segments, emphasizing the quality of our projects.</p>
                    <p class="banner-link"><a href="#services" class="smooth">Our solutions <i class="fa fa-chevron-down"></i></a></p>
                   </div>
               </div>
              <!--header text end-->
              <img src="images/h2.jpg" alt="image01"> </div>
            <!--background slide show end-->
          </div>
        </div>
        <!--banner end-->

    </header>
<!--Header end -->
<!--Welcome section start -->
  <section class="white_section section_gap" id="about">
    <div class="container">
      <div class="heading">
        <h1><span>Well coming to</span> Kunden</h1>
      </div>
      <div class="row sec_top_gp">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noPaddLeft welcome">
          <h1 class="welcome_heading font-light">Systems for business management.</h1>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 welcomr_text">
          <p>The Kunden Systems was born of wins it to do and create new ways, surpass challenges and grow, for like this present new proposals and opportunities to the market. Our aim is the integration between the system and customer. Having a team of skilled professionals, qualified to plan and use intelligent strategies, in the continuous research of the consolidation of results. We comprise the reality of each business, adapting our solution to the size of his company.</p>
          <p>Very more than a software and a lot in addition to developing a system for business management, the Kunden Systems offer a complete package of consultancy for really obtain results in the application of the software in the management, optimising the processes of organisation in his company.</p>
        </div>
      </div>
      <div class="row sec_top_gp">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="welcome_listing"> <span><i class="fa fa-magic"></i></span>
            <h3>Aims</h3>
            <p>Reach results of high impact for our customers adding value to his businesses, strengthening his relations with the market in general.</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="welcome_listing"> <span><i class="fa fa-leaf"></i></span>
            <h3>Innovative ideas</h3>
            <p>Always with a step the front thinking in the future and in which there is of better to create innovative projects in the market.</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="welcome_listing"> <span><i class="fa fa-paper-plane"></i></span>
            <h3>Support</h3>
            <p>Attention the operational doubts in the utilisation of the system, determinate changes by legislation and new versions of the product.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Welcome section end-->
  <!--What we do section start-->
  <section class="orange_section section_gap" id="services">
    <div class="container">
      <div class="heading">
        <h1><span>Business</span> Solutions</h1>
      </div>
      <div class="row sec_top_gp">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ourservice-col"> <span class="ico"><img src="images/kundenerp.png" ></span>
          <h5>Kunden ERP</h5>
          <p>The system of management was developed to be a strategic tool in the management of small to big companies... </p>
          <div class="text-center button-container"><a class="anchor" id="demo01" href="#animatedModal">Know more</a></div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ourservice-col"> <span class="ico"><img src="images/romanscad.png"></span>
          <h5>Romans CAD</h5>
          <p>If it wants to win in productivity and obtain the best ROI of the market, has to bet in a solution of CAD/PDM, Romans CAD is the election...</p>
          <div class="text-center button-container"><a class="anchor" id="demo02" href="#lightSpeedIn">Know more</a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ourservice-col"> <span class="ico"><img src="images/ivendre.png"></span>
          <h5>iVendre</h5>
          <p>iVendre One modulate of management, control and sale of his products, the solution that you looks for for maximizar his productivity of sales...</p>
          <div class="text-center button-container"><a class="anchor" id="demo03" href="#teste">Know more</a></div>
        </div>
      </div>
    </div>
  </section>
  <!--/What we do section end-->
  <!--Our latest project section start-->
  <section class="white_section protfolio section_gap" id="works">
    <div class="container">
      <div class="heading">
        <h1><span>Our </span>projects</h1>
      </div>
    </div>
    <div class="row sec_top_gp">
      <div class="portfolioFilter">
        <ul>
          <li><a href="#" data-filter=".graphic" class="current">Kunden ERP</a></li>
          <li><a href="#" data-filter=".branding">Romans CAD</a></li>
          <li><a href="#" data-filter=".mobile">iVendre</a></li>
          <li><a href="#" data-filter=".bi">BI</a></li>
        </ul>
      </div>
      <ul class="portfolioContainer grid row">
        <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/1.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/1.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/2.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/2.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/3.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/3.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/4.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/4.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/5.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/5.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/6.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/6.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/7.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/7.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="graphic col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure ><img src="images/KundenERP/logo/8.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/KundenERP/8.png" title="Kunden ERP" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
        <li class="branding col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure><img src="images/RomansCAD/logo/1.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/RomansCAD/1.png" title="Romans CAD" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="branding col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure><img src="images/RomansCAD/logo/2.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/RomansCAD/2.png" title="Romans CAD" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="branding col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure><img src="images/RomansCAD/logo/3.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/RomansCAD/3.png" title="Romans CAD" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class="branding col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure><img src="images/RomansCAD/logo/4.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/RomansCAD/4.png" title="Romans CAD" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
        <li class="mobile col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/iVendre/logo/1.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/iVendre/1.png" title="iVendre" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
        <li class=" mobile  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/iVendre/logo/2.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/iVendre/2.png" title="iVendre" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/1.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/1.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/2.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/2.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/3.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/3.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/4.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/4.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/5.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/5.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/6.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/6.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/7.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/7.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/8.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/8.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
                        <li class=" bi  col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon">
            <figure class="effect-sadie"><img src="images/BI/logo/9.png" alt="">
              <figcaption>
                <a rel="lightbox-demo" href="images/BI/9.png" title="BI" class="zoom lb lb_warsaw1">View more</a> </figcaption>
            </figure>
          </div>
        </li>
      </ul>
    </div>
    <div class="text-center button-container"><a href="#" class="anchor">Portfolio completo em breve</a></div>
  </section>
  <!--/Our latest project section end -->
  <!--Meet our Team section start -->
  <section class="white_section section_gap" id="team">
    <div class="container">
      <div class="heading">
        <h1><span>ERP</span> System</h1>
      </div>
      <div class="row sec_top_gp">
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 meet_team_left">
          <h1 class="welcome_heading font-light"><b>Kunden ERP</b></h1>
          <p>The system of management was developed to be a strategic tool in the management of small to big companies, always with the focus in the reality of each customer. This system is composed by several integrated modules, that optimise and speed up all the commercial processes, officials and industrial, providing safe and reliable data for the takings of decision.</p>
		<h1 class="welcome_heading font-light"><b>Curtumes</b></h1>
		<p>ERP Complete for curtumes <b>(Industrial, Commercial and Official)</b>, focused especially in the management of the production, from the planning the controls. Specialised in automation of floor of factory, integrated with machines and devices, classification with <b>control of mark (provider)</b>and rastreabilidad of batch, recolección of data in real time through <b>mobile devices (tablets/desktops) with reading of bar codes</b>, control of consumptions (matters-prime and insumos), formulas of fulõis (Caleiro/Curtimento/Recurtimento) and finishing that integrated with systems of management of recipes (automation of fulõis) and/or electronic scales guarantee practice And reliability of the information. Planned cost x real with control of performance by asked/batch/etc. <b>guaranteeing a reliable analysis of the profitability of his curtume</b>. Only ERP that controls curtume as well as factory of footwears (security among others).</p>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
          <center><img src="images/modulos.png" style="margin-top: 8%;"></center>
        </div>
      </div>
    </div>
  </section>
  <!--/Meet our Team section end-->
  <!--Stats numbers section start-->
  <section class="black_section numbers_section factabout">
    <div class="container">
<ul class="numbers countarea row">
        <li> <i class="fa fa-smile-o"></i>
          <h3 class="timer" id="gravity" data-from="100" data-to="24500" data-speed="10000">24500</h3>
          <span>Hours worked</span> </li>
        <li> <i class="fa fa-smile-o"></i>
          <h3 class="timer" id="gravity" data-from="100" data-to="4500" data-speed="10000">4500</h3>
          <span>CUPS of coffees</span> </li>
        <li> <i class="fa fa-smile-o"></i>
          <h3 class="timer" id="gravity" data-from="100" data-to="2200" data-speed="10000">2200</h3>
          <span>Projects made</span> </li>
        <li> <i class="fa fa-smile-o"></i>
          <h3 class="timer" id="gravity" data-from="100" data-to="1450" data-speed="10000">1450</h3>
          <span>Happy USERS</span> </li>
        <li> <i class="fa fa-smile-o"></i>
          <h3 class="timer" id="gravity" data-from="100" data-to="550" data-speed="10000">550</h3>
          <span>SUPPORTS MADE</span> </li>
      </ul>
    </div>
  </section>
  <!--/Stats numbers section end-->
  <!--Our happy Customers section start-->
  <section class="grey_section section_gap" id="testimonial">
    <div class="container">
      <div class="heading">
        <h1><span>Our </span> services</h1>
      </div>
      <div class="row sec_top_gp">
        <div class="imageSlide">
          <div class="imageBox"><img src="images/AE.png" width="98" height="98" alt=""></div>
          <div class="imageBox"><img src="images/FO.png" width="98" height="98" alt=""></div>
          <div class="imageBox"><img src="images/CG.png" width="98" height="98" alt=""></div>
        </div>
        <div class="footerTopContent">
          <div class="quote"><i class="fa fa-quote-left"></i></div>
          <ul class="slides testimonialText list-unstyled">
            <li>
              <p class="font-openBold">Integration of systems CAD/CAM with the Kunden ERP. Creation of models of indicators of exert, providing subsidies for the planning of the business. Management of operational processes and officials, with approach in reduction of costs and mejoría of results.</p>
              <h3 class="uppercase">Business consultancy</h3>
            </li>
            <li>
              <p class="font-openBold">Specifications to attend peculiarities of each company, preserving the competitive differentials through applications developed under-measure.</p>
              <h3 class="uppercase">Specific projects</h3>
            </li>
            <li>
              <p class="font-openBold">It describes users in all the levels, guaranteeing the fast absorption of the profits of the system and high productivity.</p>
              <h3 class="uppercase">Training</h3>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--/Our happy Customers section end-->
  <!--Company Logo section start-->
  <section class="lightblue_section companylogo" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 worlcompany">
          <div class="worklogo">
            <ul class="slides">
              <li><img src="images/p1.png" alt=""></li>
              <li><img src="images/p2.png" alt=""></li>
              <li><img src="images/p3.png" alt=""></li>
              <li><img src="images/p4.png" alt=""></li>
              <li><img src="images/p6.png" alt=""></li>
              <li><img src="images/p7.png" alt=""></li>
              <li><img src="images/p8.png" alt=""></li>
              <li><img src="images/p9.png" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
   <section class="grey_section section_gap" id="suporte">
    <div class="container">
      <div class="heading">
        <h1>Support</h1>
      </div>
      <div class="row sec_top_gp">
        <div class="footerTopContent">
<div class="row">
<p>Attention the operational doubts in the utilisation of the system, determinate changes by legislation and new versions of the product.</p>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ourservice-col"> <span class="ico"><a href="http://www.kunden.com.br/suporte/suporte.exe"><img src="images/supp.png"></a></span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ourservice-col"> <span class="ico"><a href="http://www.kunden.com.br:7777/admknd/f?p=103"><img src="images/crm.png"></a></span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ourservice-col"> <span class="ico"><a href="ftp://ftp.kunden.com.br/"><img src="images/downloads.png"></a></span>
        </div>
      </div>
        </div>
      </div>
    </div>
  </section>
  <section class="white_section section_gap"  id="contact">
    <div class="container">
      <div class="heading">
        <h1><span>GO IN </span> CONTACT</h1>
      </div>
      <div class="row sec_top_gp">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h3 class="font-bold uppercase">Desk informations</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <p>Kunden system<br>
               Road BR 116, nº. 8994, km 222, Bairro Bela Vista<br> Dois Irmãos - RS, CEP: 93950-000</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <h4>Phone</h4>
              <p>+55 (51) 3038-5558<br>
                </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <h4>Schedule of operation</h4>
              <p>Second the Sixth - 7:30 ás 12:00 e 13:00 ás 17:18<br>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h3 class="font-bold uppercase">It send a message!</h3>
          <div id="message"></div>
          <form method="post" action="php/contact.php" name="cform" id="cform">
        <div class="form-row clearfix">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 first"><input name="fname" id="fname" type="text" placeholder="First name" class="normal"></div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 last"><input name="lname" id="lname" type="text" placeholder="Last name" class="normal"></div>
          </div>
          <div class="form-row clearfix">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 first">
          <input name="email" id="email" type="email" placeholder="Email" class="normal">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 last"><input name="phone" id="phone" type="text" placeholder="Phone" class="normal"></div>
          </div>
          <div class="form-row clearfix">
          <textarea name="comments" id="comments" cols="" rows="" placeholder="Mensagem" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 normal medium"></textarea>
          </div>
          <input type="submit" id="submit" name="send" class="button" value="SEND">
          <div id="simple-msg"></div>
        </form>
        </div>
      </div>
    </div>
  </section>
  <!--/Contact section end-->
  <!--Google map section start -->
  <div class="contactInfo mapArea">
    <div id="map" style="width: 100%; height: 100%"></div>
  </div>
  <!--/Google map section end-->
  <!--Bottom Four Column section start-->
  <!--/Bottom Four Column section end -->
  <!--Footer -->
  <footer class="footer white_section">
    <div class="container">
      <div class="row">
        <div class="pull-left">
          <p>&copy; 2016 Kunden system. All rights reserved.</p>
        </div>
        <div class="pull-right">
          <div class="socialshare"> <a href="https://www.facebook.com/pages/Kunden-Systems/156540394408652"><i class="fa fa-facebook"></i></a> </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer end -->
  <a class="gototop smooth" href="#wrapper"><i class="fa fa-caret-up"></i></a> </div>
<!--wrapper end-->

<!--modernizr js-->
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
<!--jquary min js-->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<!--for placeholder jquery-->
<script type="text/javascript" src="js/jquery.placeholder.js"></script>

<!--for header jquery-->
<script type="text/javascript" src="js/stickUp.js"></script>
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>

<!--for portfolio jquery-->
<script src="js/jquery.isotope.js" type="text/javascript"></script>
<link rel='stylesheet' property='stylesheet' id='theme'  href='css/jquery-ui-1.8.16.custom.css' type='text/css' media='all' />

<link rel='stylesheet' property='stylesheet'  href='css/lightbox.min.css' type='text/css' media='all' />
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script>


<!--contact form js-->
<script type="text/javascript" src="js/jquery.contact.js"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=AIzaSyAf_oEL17SdMB_fBalO-XPzyOKUrQ6D8JM" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    var map;

    function load() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(-29.579586, -51.095841), 13);
        document.getElementById("map").checked = true;
        toggleZoom(false);
      }
    }

    function toggleZoom(isChecked) {
      if (isChecked) {
        map.enableScrollWheelZoom();
      } else {
        map.disableScrollWheelZoom();
      }
    }

    //]]>
</script>

<!--about jquery-->
<script defer src="js/jquery.flexslider.js"></script>

<!--for coundown jquary-->
<script type="text/javascript" src="js/jquery.countTo.js"></script>

<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/slideroption.js"></script>

<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
	"use strict";
	//enabling stickUp on the '.navbar-wrapper' class
		$('.navbar-wrapper').stickUp({
			parts: {
			  0: 'banner',
			  1: 'about',
			  2: 'services',
			  3: 'works',
			  4: 'team',
			  5: 'testimonial',
			  6: 'blog',
			  7: 'contact'
			},
			itemClass: 'menuItem',
			itemHover: 'active',
			topMargin: 'auto'
			});

		// run rlightbox
		$( ".lb" ).rlightbox();
		$( ".lb_title-overwritten" ).rlightbox({overwriteTitle: true});

		$('.flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
			slideshow: true,
			pauseOnAction: false,
			slideshowSpeed: 7000,
			controlNav: true,
			start: function(slider){
			$('body').removeClass('loading');
			}
		});

		//Home Testimonial
		var activeImage;
		var getmaxHeight = 0;
		$(".testimonialText li").each(function(index, element) {
			if($(this).height()>getmaxHeight){
				getmaxHeight = $(this).height();
				$(".footerTopContent").height(getmaxHeight);
				}
		});

		$(".testimonialText li").fadeTo("fast",0);
		$(".testimonialText li:first").fadeTo("fast",1);
		$(".imageSlide .imageBox").removeClass("activeImage");
		$(".imageSlide .imageBox:first").addClass("activeImage");
		$(".imageSlide .imageBox").mouseenter(function(){
			if(!$(this).hasClass("activeImage")){
				var gi = $(this).index();
				//console.log(gi);
				$(".imageSlide .imageBox").removeClass("activeImage");
				$(this).addClass("activeImage");
				$(".testimonialText li").fadeTo("fast",0);
				$(".testimonialText li:eq("+gi+")").fadeTo("fast",1);
				}
		})

	if ($(window).width() > 960) {
	  $('.worklogo').flexslider({
		animation: "slide",
		slideshow: true,
		itemWidth: 186,
		itemMargin: 0
	  });
	}
	else {
	  $('.worklogo').flexslider({
		animation: "slide",
		slideshow: true,
		itemWidth: 186,
		itemMargin: -2
	  });
	}

	});

	// for client work jquary

	var windowBottom = $(window).height()+0;
	var index=0;
	$(document).scroll(function(){
		divposition = parseInt($('.factabout').offset().top);
		divsrollpos = parseInt($(window).scrollTop());
		ctop = parseInt(divposition-divsrollpos);
		if(ctop<Math.round(windowBottom/2)){
			if(index==0){

				$('.timer').each(count);

			}
			index++;
		}
	});



	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}

});
</script>
<!--for theme custom jquery-->
<script src="js/custom.js"></script>

        <div id="animatedModal">
            <div id="closebt-container" class="close-animatedModal">
                            <br />
                <center><img class="closebt" src="img/closebt.svg"></center>
                <br />
            </div>

            <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2" style="color: #fff;">
              <?php
                $ini_array = parse_ini_file("KundenERP/ingles.ini", true);

                //echo $ini_array['KundenERP']['titulo'];
                if (empty($ini_array['KundenERP']['titulo'])) { ?>
                 <div style="text-align: center; margin: auto">
    <br>
    <iframe width="640" height="390" src="http://www.youtube.com/embed/kC6XIN7W54g?rel=0" frameborder="0" allowfullscreen=""></iframe></div>

    <!-- ANPIC Esp-->
    <div style="text-align: center; margin: auto">
    <br>
    <p>  </p>
    <iframe width="640" height="390" src="http://www.youtube.com/embed/maahyK4_sA8?rel=0" frameborder="0" allowfullscreen=""></iframe></div>

    <!-- Curtume -->
    <div style="text-align: center; margin: auto">
    <br>
    <p> </p>
    <iframe width="640" height="390" src="https://www.youtube.com/embed/eNYgMEWb22c" frameborder="0" allowfullscreen=""></iframe></div>
    <p> <br> </p>
               <?php  }
                else {
                  echo "<center>";
                  echo "<h2 style=\"color: #fff;\">".$ini_array['KundenERP']['titulo']."</h2>";
                  echo "<br />";
                  echo "<p style=\"color: #fff; width: 60%; text-align: left; text-align:justify; text-justify:inter-word;\">".$ini_array['KundenERP']['texto']."</p>";
                  echo "<br />";
                  if (empty($ini_array['KundenERP']['imagem1'])) {
                  }else {
                    echo "<img src=\"".$ini_array['KundenERP']['imagem1']."\"/>;";
                  }
                  echo "<br />";
                  echo "<br />";
                  if (empty($ini_array['KundenERP']['imagem2'])) {
                  }else {
                    echo "<img src=\"".$ini_array['KundenERP']['imagem2']."\"/>;";
                  }
                  echo "<br />";
                  echo "<br />";
                  if (empty($ini_array['KundenERP']['image3'])) {
                  }else {
                    echo "<img src=\"".$ini_array['KundenERP']['image3']."\"/>;";
                  }
                  echo "</center>";
                }
              ?>


           </div>

        </div>

        <div id="lightSpeedIn" style="background-color: #5096c8;">
            <div id="closebt-container" class="close-lightSpeedIn">
            <br />
                <center><img class="closebt" src="img/closebt.svg"></center>
                <br />
            </div>
            <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
                          <?php
                $ini_array = parse_ini_file("RomansCad/ingles.ini", true);

                //echo $ini_array['KundenERP']['titulo'];
                if (empty($ini_array['RomansCad']['titulo'])) { ?>
      <center>
      <img src="images/romanscad.png">
      <br />
      <br />
      <img src="https://static.wixstatic.com/media/c4584c_b57e87ed4e0b4f1da9e07ffd5ee6a1a3.jpg/v1/fill/w_474,h_316,al_c,q_80,usm_0.66_1.00_0.01/c4584c_b57e87ed4e0b4f1da9e07ffd5ee6a1a3.jpg">
      <br />
      <br />
      <img src="https://static.wixstatic.com/media/c4584c_1d5bd11feb6642c28d97722dbaf9ce13.jpg/v1/fill/w_474,h_316,al_c,q_80,usm_0.66_1.00_0.01/c4584c_1d5bd11feb6642c28d97722dbaf9ce13.jpg">
      </center>
      <?php  }
                else {
                  echo "<center>";
                  echo "<h2 style=\"color: #fff;\">".$ini_array['RomansCad']['titulo']."</h2>";
                  echo "<br />";
                  echo "<p style=\"color: #fff; width: 60%; text-align: left; text-align:justify; text-justify:inter-word;\">".$ini_array['RomansCad']['texto']."</p>";
                  echo "<br />";
                  if (empty($ini_array['RomansCad']['imagem1'])) {
                  }else {
                    echo "<img src=\"".$ini_array['RomansCad']['imagem1']."\"/>;";
                  }
                  echo "<br />";
                  echo "<br />";
                  if (empty($ini_array['RomansCad']['imagem2'])) {
                  }else {
                    echo "<img src=\"".$ini_array['RomansCad']['imagem2']."\"/>;";
                  }
                  echo "<br />";
                  echo "<br />";
                  if (empty($ini_array['RomansCad']['image3'])) {
                  }else {
                    echo "<img src=\"".$ini_array['RomansCad']['image3']."\"/>;";
                  }
                  echo "</center>";
                }
              ?>
      </div>
      </div>

        <div id="teste">
            <div id="closebt-container" class="close-teste">
            <br />
                <center><img class="closebt" src="img/closebt.svg"></center>
              <br />
            </div>
            <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
                                      <?php
                $ini_array = parse_ini_file("iVendre/ingles.ini", true);

                //echo $ini_array['KundenERP']['titulo'];
                if (empty($ini_array['iVendre']['titulo'])) { ?>
            <center>
            <br />
              <img src="images/ivendre.png" alt="iVendre">
              <br />
              <br />
              <img src="images/iosandroid.png" >
              <br />
              <br />
              <img src="images/kundenerp.png">
            </center>
             <?php  }
                else {
                  echo "<center>";
                  echo "<h2 style=\"color: #fff;\">".$ini_array['iVendre']['titulo']."</h2>";
                  echo "<br />";
                  echo "<p style=\"color: #fff; width: 60%; text-align: left; text-align:justify; text-justify:inter-word;\">".$ini_array['iVendre']['texto']."</p>";
                  echo "<br />";
                  if (empty($ini_array['iVendre']['imagem1'])) {
                  }else {
                    echo "<img src=\"".$ini_array['iVendre']['imagem1']."\"/>;";
                  }
                  echo "<br />";
                  echo "<br />";
                  if (empty($ini_array['iVendre']['imagem2'])) {
                  }else {
                    echo "<img src=\"".$ini_array['iVendre']['imagem2']."\"/>;";
                  }
                  echo "<br />";
                  echo "<br />";
                  if (empty($ini_array['iVendre']['image3'])) {
                  }else {
                    echo "<img src=\"".$ini_array['iVendre']['image3']."\"/>;";
                  }
                  echo "</center>";
                }
              ?>
           </div>
        </div>

        <script src="js/plugins.js"></script>
        <script src="js/animatedModal.min.js"></script>
        <script src="js/main2.js"></script>
</body>
</html>
