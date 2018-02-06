<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Metric | Download Online Free</title>
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

	<style> .form-control-xs::-webkit-inner-spin-button, 
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
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Convert Length and Distance Units Instantly</h4></div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >This converter features units that are still used today. There is also a special converter for historical units of length you might want to visit for ancient, medieval and other old units that are no longer used.</span>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Metric</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>kilometer (km)</label>
					</div>
                    <div class="col-sm-3">
                       <input type="number" class="boots_form-control form-control-xs kilometer" onkeyup="babarbichi(this.value);" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>millimeter (mm)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs milimeter" onkeyup="milimeter(this.value);" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>meter (m)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs meter" onkeyup="meter(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>micrometrer (micron)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs micrometer" onkeyup="micrometer(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>decimeter (dm)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs decimeter" onkeyup="decimeter(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>nanometer (nm)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs nanometer" onkeyup="nanometer(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				   <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>centimeter (cm)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs centimeter" onkeyup="centimeter(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>angstrom</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs angstrom" onkeyup="angstrom(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
		function babarbichi(val) 
		{
			var convert_kilm_metr = parseFloat(val)*1000;
			$('.meter').val(convert_kilm_metr);
			var convert_kilm_milimter = parseFloat(val)*1000000;
			$('.milimeter').val(convert_kilm_milimter);
			var convert_kilm_mcromter = parseFloat(val) * 1000000000;
			$('.micrometer').val(convert_kilm_mcromter);
			var convert_kilm_decimter = parseFloat(val) * 10000;
			$('.decimeter').val(convert_kilm_decimter);
			var convert_kilm_nanometer = parseFloat(val) * 1000000000000;
			$('.nanometer').val(convert_kilm_nanometer);
			var convert_kilm_centimeter = parseFloat(val) * 100000;
			$('.centimeter').val(convert_kilm_centimeter);
			var convert_kilm_angstrom = parseFloat(val) * 10000000000000;
			$('.angstrom').val(convert_kilm_angstrom);
		}
</script>

	<script>
		function milimeter(val) 
		{
			var convert_milimter_klmter = parseFloat(val)/1000000;
			$('.kilometer').val(convert_milimter_klmter);
			var convert_milimter_meter = parseFloat(val)/1000;
			$('.meter').val(convert_milimter_meter);
			var convert_milimter_mcromter = parseFloat(val) / 0.0010000;
			$('.micrometer').val(convert_milimter_mcromter);
			var convert_milimter_decimter = parseFloat(val) / 100;
			$('.decimeter').val(convert_milimter_decimter);
			var convert_milimter_nanometer = parseFloat(val) * 1000000;
			$('.nanometer').val(convert_milimter_nanometer);
			var convert_milimter_centimeter = parseFloat(val) / 10;
			$('.centimeter').val(convert_milimter_centimeter);
			var convert_milimter_angstrom = parseFloat(val) * 10000000;
			$('.angstrom').val(convert_milimter_angstrom);
		}
</script>

	<script>
		function meter(val) 
		{
			var convert_mter_klmter = parseFloat(val)/1000;
			$('.kilometer').val(convert_mter_klmter);
			var convert_mter_milimter = parseFloat(val)*1000;
			$('.milimeter').val(convert_mter_milimter);
			var convert_mter_mcromter = parseFloat(val) * 1000000;
			$('.micrometer').val(convert_mter_mcromter);
			var convert_mter_decimter = parseFloat(val) * 10;
			$('.decimeter').val(convert_mter_decimter);
			var convert_mter_nanometer = parseFloat(val) * 1000000000;
			$('.nanometer').val(convert_mter_nanometer);
			var convert_mter_centimeter = parseFloat(val)*100;
			$('.centimeter').val(convert_mter_centimeter);
			var convert_mter_angstrom = parseFloat(val) * 10000000000;
			$('.angstrom').val(convert_mter_angstrom);
		}
</script>

	<script>
		function micrometer(val) 
		{
			var convert_mcromter_klmter = parseFloat(val)/1000000000;
			$('.kilometer').val(convert_mcromter_klmter);
			var convert_mcromter_milimter = parseFloat(val)/1000;
			$('.milimeter').val(convert_mcromter_milimter);
			var convert_mcromter_mter = parseFloat(val) / 1000000;
			$('.meter').val(convert_mcromter_mter);
			var convert_mcromter_decimter = parseFloat(val) /100000;
			$('.decimeter').val(convert_mcromter_decimter);
			var convert_mcromter_nanometer = parseFloat(val) * 1000;
			$('.nanometer').val(convert_mcromter_nanometer);
			var convert_mcromter_centimeter = parseFloat(val)/10000;
			$('.centimeter').val(convert_mcromter_centimeter);
			var convert_mcromter_angstrom = parseFloat(val) * 10000;
			$('.angstrom').val(convert_mcromter_angstrom);
		}
</script>

	<script>
		function decimeter(val) 
		{
			var convert_decimter_klmter = parseFloat(val)/10000;
			$('.kilometer').val(convert_decimter_klmter);
			var convert_decimter_milimter = parseFloat(val)*100;
			$('.milimeter').val(convert_decimter_milimter);
			var convert_decimter_mter = parseFloat(val) / 10;
			$('.meter').val(convert_decimter_mter);
			var convert_decimter_mcromter = parseFloat(val) * 100000;
			$('.micrometer').val(convert_decimter_mcromter);
			var convert_decimter_nanometer = parseFloat(val) * 100000000;
			$('.nanometer').val(convert_decimter_nanometer);
			var convert_decimter_centimeter = parseFloat(val)*10;
			$('.centimeter').val(convert_decimter_centimeter);
			var convert_decimter_angstrom = parseFloat(val) * 1000000000;
			$('.angstrom').val(convert_decimter_angstrom);
		}
</script>

	<script>
		function nanometer(val) 
		{
			var convert_nanometer_klmter = parseFloat(val)/1000000000000;
			$('.kilometer').val(convert_nanometer_klmter);
			var convert_nanometer_milimter = parseFloat(val)/1000000;
			$('.milimeter').val(convert_nanometer_milimter);
			var convert_nanometer_mter = parseFloat(val) / 1000000000;
			$('.meter').val(convert_nanometer_mter);
			var convert_nanometer_decimter = parseFloat(val) / 100000000;
			$('.decimeter').val(convert_nanometer_decimter);
			var convert_nanometer_mcromter = parseFloat(val) / 1000;
			$('.micrometer').val(convert_nanometer_mcromter);
			var convert_nanometer_centimeter = parseFloat(val)/10000000;
			$('.centimeter').val(convert_nanometer_centimeter);
			var convert_nanometer_angstrom = parseFloat(val) * 10;
			$('.angstrom').val(convert_nanometer_angstrom);
		}
</script>

	<script>
		function centimeter(val) 
		{
			var convert_cntimeter_klmter = parseFloat(val)/100000;
			$('.kilometer').val(convert_cntimeter_klmter);
			var convert_cntimeter_milimter = parseFloat(val)*10;
			$('.milimeter').val(convert_cntimeter_milimter);
			var convert_cntimeter_mter = parseFloat(val) / 100;
			$('.meter').val(convert_cntimeter_mter);
			var convert_cntimeter_decimter = parseFloat(val) / 10;
			$('.decimeter').val(convert_cntimeter_decimter);
			var convert_cntimeter_mcromter = parseFloat(val) *10000;
			$('.micrometer').val(convert_cntimeter_mcromter);
			var convert_cntimeter_nanometer = parseFloat(val)/10000000;
			$('.nanometer').val(convert_cntimeter_nanometer);
			var convert_cntimeter_angstrom = parseFloat(val)/100000000;
			$('.angstrom').val(convert_cntimeter_angstrom);
		}
</script>

	<script>
		function angstrom(val) 
		{
			var convert_angstrom_klmter = parseFloat(val)/10000000000000;
			$('.kilometer').val(convert_angstrom_klmter);
			var convert_angstrom_milimter = parseFloat(val)/10000000;
			$('.milimeter').val(convert_angstrom_milimter);
			var convert_angstrom_mter = parseFloat(val) / 10000000000;
			$('.meter').val(convert_angstrom_mter);
			var convert_angstrom_decimter = parseFloat(val) / 1000000000;
			$('.decimeter').val(convert_angstrom_decimter);
			var convert_angstrom_mcromter = parseFloat(val) /10000;
			$('.micrometer').val(convert_angstrom_mcromter);
			var convert_angstrom_nanometer = parseFloat(val)/100;
			$('.nanometer').val(convert_angstrom_nanometer);
			var convert_angstrom_angstrom = parseFloat(val)/100000000;
			$('.centimeter').val(convert_angstrom_angstrom);
		}
</script>
  </body>
</html>
