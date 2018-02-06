<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>International Nautical Measure | Download Online Free</title>
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
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>International Nautical Measure</h4></div>
				<div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >The international nautical mile was defined by the First International Extraordinary Hydrographic Conference, Monaco in 1929. This is the only definition in widespread current use, and is the one accepted by the International Bureau of Weights and Measures. Before 1929 different countries had different definitions, and the Soviet Union, the United Kingdom and the United States did not immediately accept the international value.</span>
              </div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>nautical league (naut.leag)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs n_leauge" onkeyup="n_leauge(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>cable length (cbl)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs cable_length"  onkeyup="cable_length(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>nautical mile (naut.mi)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs n_mile" onkeyup="n_mile(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>fathom (fath)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs fathom" onkeyup="fathom(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
		function n_leauge(val) 
		{
			var convert_n_leauge_cable_length = parseFloat(val)*30;
			$('.cable_length').val(convert_n_leauge_cable_length);

			var convert_n_leauge_nautical_mile = parseFloat(val)*3;
			$('.n_mile').val(convert_n_leauge_nautical_mile);

			var convert_n_leauge_fathom = parseFloat(val)*3038.06;
			$('.fathom').val(convert_n_leauge_fathom);
		}
	</script>

	<script>
		function cable_length(val) 
		{
			var convert_cable_length_n_leauge = parseFloat(val)/30;
			$('.n_leauge').val(convert_cable_length_n_leauge);

			var convert_cable_length_nautical_mile = parseFloat(val)/10;
			$('.n_mile').val(convert_cable_length_nautical_mile);

			var convert_cable_length_fathom = parseFloat(val)*101.33;
			$('.fathom').val(convert_cable_length_fathom);
		}
	</script>

	<script>
		function n_mile(val) 
		{
			var convert_n_mile_n_leauge = parseFloat(val)/3;
			$('.n_leauge').val(convert_n_mile_n_leauge);

			var convert_n_mile_cable_length = parseFloat(val)*10;
			$('.cable_length').val(convert_n_mile_cable_length);

			var convert_n_mile_fathom = parseFloat(val)*1012.69;
			$('.fathom').val(convert_n_mile_fathom);
		}
	</script>
		<script>
		function fathom(val) 
		{
			var convert_fathom_n_leauge = parseFloat(val)*0.000329158;
			$('.n_leauge').val(convert_fathom_n_leauge);

			var convert_fathom_cable_length = parseFloat(val)/100;
			$('.cable_length').val(convert_fathom_cable_length);

			var convert_fathom_n_mile = parseFloat(val)*0.000987473;
			$('.n_mile').val(convert_fathom_n_mile);
		}
	</script>
  </body>
</html>
