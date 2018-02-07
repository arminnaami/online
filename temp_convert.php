<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Temperature conversion | Download Online Free</title>
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
                <h4>Temperature scale conversion</h4>
              </div>
			  <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
                <span class="" >Please be aware there is the absolute zero - the coldest temperature possible in the Universe. It is zero kelvin (-459.67&deg;F, -273.15&deg;C).</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>degrees Celsius (&deg;C)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Celsius" onkeyup="celzz(this.value);" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>kelvin (K)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs kelvin" onkeyup="kelzz(this.value);" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>degrees Fahrenheit (&deg;F)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Fahrenheit" onkeyup="fahzz(this.value);" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                    <div class="col-sm-3">
                      <label>degrees Reaumur (&deg;Re)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Reaumur" onkeyup="reazz(this.value);" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>Planck temperature</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs Planck" onkeyup="planck(this.value);" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
		function celzz(celsi) {
		  var convert_cel_kel = parseFloat(celsi)+273.15;
			$('.kelvin').val(convert_cel_kel);
		  var convert_cel_fah = (parseFloat(celsi)*1.8)+32;
			$('.Fahrenheit').val(convert_cel_fah);
		  var convert_cel_reau = parseFloat(celsi) * 0.80000;
			$('.Reaumur').val(convert_cel_reau);
			var power = Math.pow(10,32);
		  var convert_cel_planck = parseFloat(celsi)/1.416785E+32;
			$('.Planck').val(convert_cel_planck);
		}

		function kelzz(kelv) {
		  var convert_kel_cel = parseFloat(kelv)-273.15;
			$('.Celsius').val(convert_kel_cel);
		  var convert_kel_fah = ((parseFloat(kelv)-273.15)*1.8)+32;
			$('.Fahrenheit').val(convert_kel_fah);
		  var convert_kel_reau = (parseFloat(kelv) - 273.15)* 0.80000;
			$('.Reaumur').val(convert_kel_reau);
			var power = Math.pow(10,32);
		  var convert_kel_planck = parseFloat(kelv) / (1.41683385 * power);
			$('.Planck').val(convert_kel_planck);
		}
		function fahzz(fah) {
			var fahren = parseFloat(fah);
		  var convert_fah_cel = (fahren-32)/1.8;
			$('.Celsius').val(convert_fah_cel);
		  var convert_fah_kel = ((fahren-32)/1.8)+273.15;
			$('.kelvin').val(convert_fah_kel);
		  var convert_fah_reau = (fahren - 32)* 0.44444;
			$('.Reaumur').val(convert_fah_reau);
			var power = Math.pow(10,32);
		  var convert_fah_planck = ((fahren + 459.67)/(2.55030092 * power));
			$('.Planck').val(convert_fah_planck);
		}
		function reazz(reau) {
			var reaumur = parseFloat(reau);
		  var convert_reau_cel = reaumur * 1.25;
			$('.Celsius').val(convert_reau_cel);
		  var convert_reau_kel = reaumur * 1.25 + 273.15;
			$('.kelvin').val(convert_reau_kel);
		  var convert_reau_fahre = reaumur * 2.25 + 32;
			$('.Fahrenheit').val(convert_reau_fahre);
			var power = Math.pow(10,32);
		  var convert_reau_planck =  (reaumur/1.133428E+32) + 1.92795660597762E-30;
			$('.Planck').val(convert_reau_planck);
		}
		function planck(plan) {
			var plankzz = parseFloat(plan);
		  var convert_planck_cel = 1.416785E+32*plankzz;
			$('.Celsius').val(convert_planck_cel);
		  var convert_planck_kel = 1.416785E+32*plankzz;
			$('.kelvin').val(convert_planck_kel);
		  var convert_planck_fahre = 2.550213E+32*plankzz;
			$('.Fahrenheit').val(convert_planck_fahre);
		  var convert_planck_reau = 1.133428E+32*plankzz;
			$('.Reaumur').val(convert_planck_reau);
		}
	</script>
  </body>
</html>
