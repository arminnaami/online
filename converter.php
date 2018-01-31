<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Maisonnette</title>
	<?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css"/>
    <link type="text/css" href="css/little-fox.css" rel="stylesheet"> 
  </head>
  <body>
	<?php include("header_top.php");?>
	<div class="mai-wrapper">
	<?php include("header.php");?>
	  <div class="main-content container">
        <!--Basic forms-->
        <!--Basic Elements-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Metric</div>
              <div class="panel-body pl-sm-5">
                <form>
				<div class="row">
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label">Cubic kilometer (km&sup3;)</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>


				  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label">Readonly Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                    </div>
                  </div>
				

				  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label">Readonly Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                    </div>
                  </div>
				</div>
				<div class="row">
				  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label">Readonly Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                    </div>
                  </div>

				  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label">Readonly Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                    </div>
                  </div>

				</div>
				<div class="row">
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label">Readonly Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                    </div>
                  </div>
               </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Date Picker-->
      </div>
    </div>
    <?php include("footer.php");?>
    <script src="js/select2.min.js" type="text/javascript"></script>
    <script src="js/select2.full.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.formElements();
      }
                       );
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.livePreview();
      }
    );
    </script>
  </body>
</html>
