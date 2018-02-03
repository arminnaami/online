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
                      <input type="text" class="boots_form-control form-control-xs Celsius" onkeyup="celzz(this.value);">
                    </div>
                    <div class="col-sm-3">
                      <label>kelvin (K)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs kelvin" onkeyup="kelzz(this.value);">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>degrees Fahrenheit (&deg;F)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs Fahrenheit" onkeyup="fahzz(this.value);">
                    </div>
                    <div class="col-sm-3">
                      <label>degrees Reaumur (&deg;Re)</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs Reaumur" onkeyup="myFunction(this.value);">
                    </div>
                  </div>
                  <div class="form-group inline row">
                    <div class="col-sm-3">
                      <label>Planck temperature</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs Planck" onkeyup="myFunction(this.value);">
                    </div>
                  </div>
                </form>
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
		  var convert_cel_planck = parseFloat(celsi)+ 273.15 / (1.41683385 * power);
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
		  var convert_fah_cel = (parseFloat(fah)-32)/1.8;
			$('.Celsius').val(convert_fah_cel);
		  var convert_fah_kel = ((parseFloat(fah)-32)/1.8)+273.15;
			$('.kelvin').val(convert_fah_kel);
		  var convert_fah_reau = (parseFloat(fah) - 32)* 0.44444;
			$('.Reaumur').val(convert_fah_reau);
			var power = Math.pow(10,32);
		  var convert_fah_planck = parseFloat(fah);
		  alert(convert_fah_planck);
			$('.Planck').val(convert_fah_planck);
		}
	</script>
  </body>
</html>
