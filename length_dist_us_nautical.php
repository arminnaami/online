<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>US Nautical Measure | Download Online Free</title>
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
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>US Nautical Measure</h4></div>
				<div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >These measures were abandoned in favor of the international nautical measures in 1954.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>US nautical mile</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs us_mautical_mile" onkeyup="us_mautical_mile(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>US cable length</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs us_cable_length" onkeyup="us_cable_length(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>US fathom (fath)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs us_fathom" onkeyup="us_fathom(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
		function us_mautical_mile(val) 
		{
			var convert_us_mautical_mile_us_cable_length = parseFloat(val)*8.44;
			$('.us_cable_length').val(convert_us_mautical_mile_us_cable_length);

			var convert_n_leauge_fathom = parseFloat(val)*1012.686;
			$('.us_fathom').val(convert_n_leauge_fathom);
		}
	</script>

	<script>
		function us_cable_length(val) 
		{
			var convert_us_cable_length_us_mautical_mile = parseFloat(val)*0.118497;
			$('.us_mautical_mile').val(convert_us_cable_length_us_mautical_mile);

			var convert_us_cable_length_fathom = parseFloat(val)*120;
			$('.us_fathom').val(convert_us_cable_length_fathom);
		}
	</script>

	<script>
		function us_fathom(val) 
		{
			var convert_us_fathom_us_mautical_mile = parseFloat(val)*0.00098747300215983;
			$('.us_mautical_mile').val(convert_us_fathom_us_mautical_mile);

			var convert_us_fathom_us_cable_length = parseFloat(val)/100;
			$('.us_cable_length').val(convert_us_fathom_us_cable_length);
		}
	</script>
  </body>
</html>
