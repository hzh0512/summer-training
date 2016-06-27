<!DOCTYPE html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>科协培训</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Main Style Sheet -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Modernizr -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>

        <header role="banner">
          <div class="container">
            <a class="banner-brand visible-md visible-lg" href="/home"><img src="img/ee.jpg" alt="EESAST" width="180"></a>
        
          </div><!-- /.container -->
            <nav role="navigation" class="navbar navbar-default ">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand visible-xs visible-sm" href="/home"><img src="img/ee.jpg" alt="EESAST" width="120"></a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                      <?php $directory3=dirname(__FILE__)."/../../../public/files/";
$mydir3 = dir($directory3); 
    while($file3 = $mydir3->read())
	{ 
		if((is_dir("$directory3/$file3")) AND ($file3!=".") AND ($file3!="..")) 
		{
?>
                      <li class="dropdown">
                        <a href="<?php echo "#".$file3;?>" ><?php echo $file3;?></a>
                        
                    </li>
<?php
		} 
		
	} 
$mydir3->close(); 
?>
                   
                  </ul>
                    <!--
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" title="Login"><i class="icon fa fa-user fa-lg"></i> <span>Log In</span></a></li>
                  </ul>
-->
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal">培训安排</a>
                    </li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div><!--/.container -->
            </nav>
        </header>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" style="width:auto; max-width:800px">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               培训安排
            </h4>
         </div>
         <div class="modal-body">
            <img src="img/train.jpg" style="width:100%"/>
         </div>
         
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
        </div>