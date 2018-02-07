<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Historical temperature scales | Download Online Free</title>
    <?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css"/>
    <link type="text/css" href="css/little-fox.css" rel="stylesheet"> 
    <style>
      .mai-end{
        background-color: #fafafa;
      }
      .boots_form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }
	   .form-control-xs::-webkit-inner-spin-button, 
	   .form-control-xs::-webkit-outer-spin-button { 
		-webkit-appearance: none; 
		margin: 0; 
	  }
    </style>
  </head>
  <body>
    <div class="mai-wrapper">
      <?php include("header.php");?>
      <div class="main-content container">
        <!--Basic forms-->
        <!--Basic Elements-->
        <div class="row">
          <!-- sidebar -->
          <?php include("sidebar.php");?>
          <!-- sidebar end -->
          <div class="col-md-6">
			<div class="row">
				<div class="panel panel-default panel-table" style="width:100%;background:none;border:0px;box-shadow:none;padding:14px 15px;margin:0px;">
					 <a href="#" target="ESEA" style="float:left;width:100%;"><img src="images/images.jpg"  alt="ESEA" title="ESEA" border="0" style="width:100%;"></a>
					 <a href="#" target="ESEA" style="float:right;width:100%;"><img src="images/Doctor-Banner-Ad-Horizontal.png" alt="ESEA" title="ESEA" border="0" style="width:100%;"></a>
				</div>
			</div>
            <div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;">
                <h4>Fahrenheit (&deg;F), Celsius (&deg;C) and More. All Scales Temperature Converter.</h4>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;">
                <h4>Historical temperature scales</h4>
              </div>
			  <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
                <span class="" >These temperature scales are not widely used now.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>degrees Rankine (&deg;R)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Rankine" onkeyup="rankzz(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>degrees R&oslash;mer (&deg;R&Oslash;)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Romer" onkeyup="romerzz(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>degrees Newton (&deg;N)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Newton" onkeyup="newzz(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>degrees Delisle (&deg;D)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Delisle" onkeyup="delizz(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                </form>
              </div>
            </div>
			<div class="row">
				<div class="panel panel-default panel-table" style="width:100%;background:none;border:0px;box-shadow:none;padding:14px 15px;margin:0px;">
					 <a href="#" target="ESEA" style="float:left;width:100%;"><img src="images/images.jpg"  alt="ESEA" title="ESEA" border="0" style="width:100%;"></a>
					 <a href="#" target="ESEA" style="float:right;width:100%;"><img src="images/Doctor-Banner-Ad-Horizontal.png" alt="ESEA" title="ESEA" border="0" style="width:100%;"></a>
				</div>
			</div>
          </div>
		<?php include("right_sidebar.php");?>
          <!--Date Picker-->
        </div>
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
	<script>
		function rankzz(rani) {
			var ranik = parseFloat(rani);
		  var convert_ran_rom = (0.291667*ranik) - 135.904;
			$('.Romer').val(convert_ran_rom);
		  var convert_ran_newt = (0.183333*ranik) - 90.1395;
			$('.Newton').val(convert_ran_newt);
		  var convert_ran_deli = (ranik/-1.20000048) + 559.725;
			$('.Delisle').val(convert_ran_deli);
		}
		function romerzz(romer) {
			var romer = parseFloat(romer);
		  var convert_rom_rani = (3.42857*romer) + 465.956;
			$('.Rankine').val(convert_rom_rani);
		  var convert_rom_newt = (0.628571*romer) - 4.71429;
			$('.Newton').val(convert_rom_newt);
		  var convert_rom_deli = (romer/-0.35000035) + 171.429;
			$('.Delisle').val(convert_rom_deli);
		}
		function newzz(newt) {
			var newt = parseFloat(newt);
		  var convert_newt_rani = (5.45455*newt) + 491.67;
			$('.Rankine').val(convert_newt_rani);
		  var convert_newt_rom = (1.59091*newt) + 7.5;
			$('.Romer').val(convert_newt_rom);
		  var convert_newt_deli = (newt/-0.22000022) + 150;
			$('.Delisle').val(convert_newt_deli);
		}
		function delizz(deli) {
			var deli = parseFloat(deli);
		  var convert_deli_rani = (deli/-0.833333333) + 671.67;
			$('.Rankine').val(convert_deli_rani);
		  var convert_deli_rom = (deli/-2.85714286) + 60;
			$('.Romer').val(convert_deli_rom);
		  var convert_deli_newt = (deli/-4.54545455) + 33;
			$('.Newton').val(convert_deli_newt);
		}
	</script>
  </body>
</html>
