<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Troy | Download Online Free</title>
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
		   <div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Convert Weight and Mass Units Instantly</h4></div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >This converter features units that are still used today. There is also a special converter for historical units of weight you might want to visit for ancient, medieval and other old units that are no longer used.</span>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Troy</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>pound</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs pound" onkeyup="pound(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>carat</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs carat" onkeyup="carat(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>ounce&nbsp;(ozt)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs ounce" onkeyup="ounce(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>grain</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs grain" onkeyup="grain(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>pennyweight&nbsp;(dwt)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs pennyweight" onkeyup="pennyweight(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
		function pound(pound){
			var pound = parseFloat(pound);
		  var convert_pound_carat = pound/0.0005358457761438;
			$('.carat').val(convert_pound_carat);
		  var convert_pound_ounce = pound/0.083333333333333;
			$('.ounce').val(convert_pound_ounce);
		  var convert_pound_grain = pound/0.00017361111111111;
			$('.grain').val(convert_pound_grain);
		  var convert_pound_pennyweight = pound/0.0041666666666667;
			$('.pennyweight').val(convert_pound_pennyweight);
		}
		function carat(carat){
			var carat = parseFloat(carat);
		  var convert_carat_pound = carat/1866.208608;
			$('.pound').val(convert_carat_pound);
		  var convert_carat_ounce = carat/155.517384;
			$('.ounce').val(convert_carat_ounce);
		  var convert_carat_grain = carat/0.32399455;
			$('.grain').val(convert_carat_grain);
		  var convert_carat_pennyweight = carat/7.7758692;
			$('.pennyweight').val(convert_carat_pennyweight);
		}
		function ounce(ounce){
			var ounce = parseFloat(ounce);
		  var convert_ounce_pound = ounce/12;
			$('.pound').val(convert_ounce_pound);
		  var convert_ounce_carat = ounce/0.0064301493137256;
			$('.carat').val(convert_ounce_carat);
		  var convert_ounce_grain = ounce/0.0020833333333333;
			$('.grain').val(convert_ounce_grain);
		  var convert_ounce_pennyweight = ounce/0.05;
			$('.pennyweight').val(convert_ounce_pennyweight);
		}
		function grain(grain){
			var grain = parseFloat(grain);
		  var convert_grain_pound = grain/5760;
			$('.pound').val(convert_grain_pound);
		  var convert_grain_carat = grain/3.0864716705883;
			$('.carat').val(convert_grain_carat);
		  var convert_grain_ounce = grain/480;
			$('.ounce').val(convert_grain_ounce);
		  var convert_grain_pennyweight = grain/24;
			$('.pennyweight').val(convert_grain_pennyweight);
		}
		function pennyweight(pennyweight){
			var pennyweight = parseFloat(pennyweight);
		  var convert_pennyweight_pound = pennyweight/240;
			$('.pound').val(convert_pennyweight_pound);
		  var convert_pennyweight_carat = pennyweight/0.12860298627451;
			$('.carat').val(convert_pennyweight_carat);
		  var convert_pennyweight_ounce = pennyweight/20;
			$('.ounce').val(convert_pennyweight_ounce);
		  var convert_pennyweight_grain = pennyweight/0.041666666666667;
			$('.grain').val(convert_pennyweight_grain);
		}
	</script>
  </body>
</html>
