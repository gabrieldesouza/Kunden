<html lang="en"><head>
<title>Kunden - Pessoas fazem a diferença</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="css/colorpicker.css">
<link rel="stylesheet" href="css/datepicker.css">
<link rel="stylesheet" href="css/uniform.css">
<link rel="stylesheet" href="css/select2.css">
<link rel="stylesheet" href="css/matrix-style.css">
<link rel="stylesheet" href="css/matrix-media.css">
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
</head>
<body class="wysihtml5-supported">

<!--Header-part-->
<div id="header">
  <img src="img/logo.png" style="margin-left: 25px; margin-top: 5px;">
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->


<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul style="display: block;">
    
    
    
    
    
    <li class="submenu "> <a href="#"><i class="icon icon-list"></i> <span>KundenERP</span> </a>
      <ul style="display: none;">
        <li><a href="kundenerp_PT.php">Português</a></li>
        <li><a href="kundenerp_IN.php">Inglês</a></li>
        <li><a href="kundenerp_ES.php">Espanhol</a></li>
      </ul>
    </li>
<li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>RomansCad</span> </a>
      <ul style="display: none;">
        <li><a href="romanscad_PT.php">Português</a></li>
        <li><a href="romanscad_IN.php">Inglês</a></li>
        <li><a href="romanscad_ES.php">Espanhol</a></li>
      </ul>
    </li>
<li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>iVendre</span> </a>
      <ul style="display: none;">
        <li><a href="ivendre_PT.php">Português</a></li>
        <li><a href="ivendre_IN.php">Inglês</a></li>
        <li><a href="ivendre_ES.php">Espanhol</a></li>
      </ul>
    </li>
    
    
    
    
    
    
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i>Inicio</a> <a href="#" class="tip-bottom" data-original-title="">iVendre</a> <a href="#" class="current">Espanhol</a> </div>
  <h1>iVendre Espanhol</h1>
</div>
<div class="container-fluid">
  <hr>
    <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Editar textos</h5>
          <?php    
          if(isset($_POST['SubmitButton'])){ //check if form was submitted
            include 'INI.class.php'; 
            
            $ini = new INI('../iVendre/espanhol.ini');

            $ini->data['iVendre']['titulo'] = $_POST['titulo'];

            $ini->data['iVendre']['texto'] = $_POST['texto'];

            $ini->data['iVendre']['imagem1'] = $_POST['imagem1'];

            $ini->data['iVendre']['imagem2'] = $_POST['imagem2'];

            $ini->data['iVendre']['image3'] = $_POST['imagem3'];

            $ini->write();
          }    
          ?>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="#">
            <div class="control-group">
              <label class="control-label">Titulo : </label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="titulo">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Texto: </label>
              <div class="controls">
                <textarea class="span11" name="texto"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Imagem 1: </label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="imagem1">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Imagem 2: </label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="imagem2">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Imagem 3: </label>
              <div class="controls">
                <input type="text" class="span11" name="imagem3">
                 </div>
            </div>
            
            <div class="form-actions">
            <input type="submit" name="SubmitButton" value="Salvar alterações" class="btn btn-success"/>
             
            </div>
          </form>
        </div>
      </div>
      
      
    </div>
    
  </div>
  
</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 © Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>


<ul class="typeahead dropdown-menu"></ul><div class="colorpicker dropdown-menu"><div class="colorpicker-saturation" style="background-color: rgb(255, 0, 0);"><i style="left: 0px; top: 0px;"><b></b></i></div><div class="colorpicker-hue"><i style="top: 0px;"></i></div><div class="colorpicker-alpha"><i style="top: 0px;"></i></div><div class="colorpicker-color"><div style="background-color: rgb(255, 255, 255);"></div></div></div><div class="colorpicker dropdown-menu alpha"><div class="colorpicker-saturation" style="background-color: rgb(255, 157, 0);"><i style="left: 84.593px; top: -34.902px;"><b></b></i></div><div class="colorpicker-hue"><i style="top: 89.748px;"></i></div><div class="colorpicker-alpha" style="background-color: rgb(88, 232, 53);"><i style="top: 50px;"></i></div><div class="colorpicker-color"><div style="background-color: rgba(255, 232, 53, 0.498039);"></div></div></div><div class="colorpicker dropdown-menu"><div class="colorpicker-saturation" style="background-color: rgb(87, 0, 255);"><i style="left: 21.1111px; top: 29.4118px;"><b></b></i></div><div class="colorpicker-hue"><i style="top: 27.6316px;"></i></div><div class="colorpicker-alpha"><i style="top: 0px;"></i></div><div class="colorpicker-color" style="display: none;"><div></div></div></div><div class="colorpicker dropdown-menu"><div class="colorpicker-saturation" style="background-color: rgb(255, 0, 0);"><i style="left: 0px; top: 100px;"><b></b></i></div><div class="colorpicker-hue"><i style="top: 0px;"></i></div><div class="colorpicker-alpha"><i style="top: 0px;"></i></div><div class="colorpicker-color" style="display: none;"><div></div></div></div><div class="datepicker dropdown-menu"><div class="datepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">February 2013</th><th class="next">›</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day active">1</td><td class="day">2</td></tr><tr><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td></tr><tr><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td></tr><tr><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td></tr><tr><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day new">1</td><td class="day new">2</td></tr><tr><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td><td class="day new">8</td><td class="day new">9</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">2013</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month active">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">2010-2019</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year active">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody></table></div></div><div class="datepicker dropdown-menu"><div class="datepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">March 2017</th><th class="next">›</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day">1</td><td class="day">2</td><td class="day">3</td><td class="day">4</td></tr><tr><td class="day active">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td><td class="day">10</td><td class="day">11</td></tr><tr><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td><td class="day">18</td></tr><tr><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td><td class="day">25</td></tr><tr><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day">31</td><td class="day new">1</td></tr><tr><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td><td class="day new">8</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">2017</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month active">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">2010-2019</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year active">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody></table></div></div><div class="colorpicker dropdown-menu"><div class="colorpicker-saturation"><i><b></b></i></div><div class="colorpicker-hue"><i></i></div><div class="colorpicker-alpha"><i></i></div><div class="colorpicker-color"><div></div></div></div><div class="colorpicker dropdown-menu"><div class="colorpicker-saturation"><i><b></b></i></div><div class="colorpicker-hue"><i></i></div><div class="colorpicker-alpha"><i></i></div><div class="colorpicker-color"><div></div></div></div><div class="colorpicker dropdown-menu"><div class="colorpicker-saturation"><i><b></b></i></div><div class="colorpicker-hue"><i></i></div><div class="colorpicker-alpha"><i></i></div><div class="colorpicker-color"><div></div></div></div></body></html>