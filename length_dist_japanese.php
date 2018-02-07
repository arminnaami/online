<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Japanese | Download Online Free</title>
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
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Japanese</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>ri</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs jap_ri" onkeyup="jap_ri(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>shaku</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs jap_shaku" onkeyup="jap_shaku(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>cho</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs jap_cho" onkeyup="jap_cho(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>sun</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs jap_sun" onkeyup="jap_sun(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>jo</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs jap_jo" onkeyup="jap_jo(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>bu</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs jap_bu">
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
		function jap_ri(val) 
		{
			var convert_jap_ri_jap_shaku = parseFloat(val)*12960.396039604;
			$('.jap_shaku').val(convert_jap_ri_jap_shaku);

			var convert_jap_ri_jap_cho = parseFloat(val)*36;
			$('.jap_cho').val(convert_jap_ri_jap_cho);

			var convert_jap_ri_jap_sun = parseFloat(val)*129600;
			$('.jap_sun').val(convert_jap_ri_jap_sun);

			var convert_jap_ri_jap_jo = parseFloat(val)*1296;
			$('.jap_jo').val(convert_jap_ri_jap_jo);

			var convert_jap_ri_jap_bu = parseFloat(val)*1296000;
			$('.jap_bu').val(convert_jap_ri_jap_bu);
		}
	</script>

	<script>
		function jap_shaku(val) 
		{
			var convert_jap_shaku_jap_ri = parseFloat(val)*0.000077158135981665;
			$('.jap_ri').val(convert_jap_shaku_jap_ri);

			var convert_jap_shaku_jap_cho = parseFloat(val)*0.000003333;
			$('.jap_cho').val(convert_jap_shaku_jap_cho);

			var convert_jap_shaku_jap_sun = parseFloat(val)*8463.687150838;
			$('.jap_sun').val(convert_jap_shaku_jap_sun);

			var convert_jap_shaku_jap_jo = parseFloat(val)*0.02;
			$('.jap_jo').val(convert_jap_shaku_jap_jo);

			var convert_jap_shaku_jap_bu = parseFloat(val)/100;
			$('.jap_bu').val(convert_jap_shaku_jap_bu);
		}
	</script>

		<script>
		function jap_cho(val) 
		{
			var convert_jap_cho_jap_ri = parseFloat(val)*0.02778;
			$('.jap_ri').val(convert_jap_cho_jap_ri);

			var convert_jap_cho_jap_shaku = parseFloat(val)*360;
			$('.jap_shaku').val(convert_jap_cho_jap_shaku);

			var convert_jap_cho_jap_sun = parseFloat(val)*3600;
			$('.jap_sun').val(convert_jap_cho_jap_sun);

			var convert_jap_cho_jap_jo = parseFloat(val)*36;
			$('.jap_jo').val(convert_jap_cho_jap_jo);

			var convert_jap_cho_jap_bu = parseFloat(val)*36000;
			$('.jap_bu').val(convert_jap_cho_jap_bu);
		}
	</script>

	<script>
		function jap_sun(val) 
		{
			var convert_jap_sun_jap_ri = parseFloat(val)*0.000007716;
			$('.jap_ri').val(convert_jap_sun_jap_ri);

			var convert_jap_sun_jap_shaku = parseFloat(val)/10;
			$('.jap_shaku').val(convert_jap_sun_jap_shaku);

			var convert_jap_sun_jap_cho = parseFloat(val)*0.0002778;
			$('.jap_cho').val(convert_jap_sun_jap_cho);

			var convert_jap_sun_jap_jo = parseFloat(val)/100;
			$('.jap_jo').val(convert_jap_sun_jap_jo);

			var convert_jap_sun_jap_bu = parseFloat(val)*10;
			$('.jap_bu').val(convert_jap_sun_jap_bu);
		}
	</script>

	<script>
		function jap_jo(val) 
		{
			var convert_jap_jo_jap_ri = parseFloat(val)/1296;
			$('.jap_ri').val(convert_jap_jo_jap_ri);

			var convert_jap_jo_jap_shaku = parseFloat(val)*50;
			$('.jap_shaku').val(convert_jap_jo_jap_shaku);

			var convert_jap_jo_jap_cho = parseFloat(val)*0.0001667;
			$('.jap_cho').val(convert_jap_jo_jap_cho);

			var convert_jap_jo_jap_sun = parseFloat(val)*100;
			$('.jap_sun').val(convert_jap_jo_jap_sun);

			var convert_jap_sun_jap_bu = parseFloat(val)*10;
			$('.jap_bu').val(convert_jap_sun_jap_bu);
		}
	</script>
  </body>
</html>
