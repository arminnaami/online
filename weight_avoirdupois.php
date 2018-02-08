<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Avoirdupois (U.S. / British) | Download Online Free</title>
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
			<?php include("advertisement_top.php");?>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Avoirdupois (U.S. / British)</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>long&nbsp;ton&nbsp;(UK)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs long_ton" onkeyup="long_ton(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>stone&nbsp;(st)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs stone" onkeyup="stone(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>short&nbsp;ton&nbsp;(US)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs short_ton" onkeyup="short_ton(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>grain&nbsp;(gr)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs grain" onkeyup="grain(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>kilopound,kip (mass)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs kilopound" onkeyup="kilopound(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>pound&nbsp;(lb)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs pound" onkeyup="pound(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				   <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>long&nbsp;hundred weight&nbsp;(UK)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs l_hun_weight" onkeyup="l_hun_weight(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>ounce&nbsp;(oz)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs ounce" onkeyup="ounce(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>short&nbsp;hundred weight&nbsp;(US)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs short_hun_weight" onkeyup="short_hun_weight(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
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
		function long_ton(l_ton){
			var long_ton = parseFloat(l_ton);
		  var convert_longton_stone = long_ton/0.00625;
			$('.stone').val(convert_longton_stone);
		  var convert_longton_short_ton = long_ton/0.89285714285714;
			$('.short_ton').val(convert_longton_short_ton);
		  var convert_longton_kilopound = long_ton/0.44642857142857;
			$('.kilopound').val(convert_longton_kilopound);
		  var convert_longton_pound = long_ton/0.00044642857142857;
			$('.pound').val(convert_longton_pound);
		  var convert_longton_l_hun_weight = long_ton/0.050000;
			$('.l_hun_weight').val(convert_longton_l_hun_weight);
		  var convert_longton_ounce = long_ton/2.7901785714286E-5;
			$('.ounce').val(convert_longton_ounce);
		  var convert_longton_short_hun_weight = long_ton/0.044643;
			$('.short_hun_weight').val(convert_longton_short_hun_weight);
		  var convert_longton_grain = long_ton/6.3775510204082E-8;
			$('.grain').val(convert_longton_grain);
		}
		function stone(ston){
			var stone = parseFloat(ston);
		  var convert_stone_long_ton = stone/160;
			$('.long_ton').val(convert_stone_long_ton);
		  var convert_stone_short_ton = stone/142.85714285714;
			$('.short_ton').val(convert_stone_short_ton);
		  var convert_stone_kilopound = stone/71.428571428571;
			$('.kilopound').val(convert_stone_kilopound);
		  var convert_stone_pound = stone/0.071428571428571;
			$('.pound').val(convert_stone_pound);
		  var convert_stone_l_hun_weight = stone/8;
			$('.l_hun_weight').val(convert_stone_l_hun_weight);
		  var convert_stone_ounce = stone/0.0044642857142857;
			$('.ounce').val(convert_stone_ounce);
		  var convert_stone_short_hun_weight = stone/7.1428571428571;
			$('.short_hun_weight').val(convert_stone_short_hun_weight);
		  var convert_stone_grain = stone/1.0204081632653E-5;
			$('.grain').val(convert_stone_grain);
		}
		function short_ton(shor_ton){
			var short_ton = parseFloat(shor_ton);
		  var convert_short_tone_long_ton = short_ton/1.12;
			$('.long_ton').val(convert_short_tone_long_ton);
		  var convert_short_tone_stone = short_ton/0.007;
			$('.stone').val(convert_short_tone_stone);
		  var convert_short_tone_grain = short_ton/7.1428571428571E-8;
			$('.grain').val(convert_short_tone_grain);
		  var convert_short_tone_kilopound = short_ton/0.55115565546219;
			$('.kilopound').val(convert_short_tone_kilopound);
		  var convert_short_tone_pound = short_ton/0.0005;
			$('.pound').val(convert_short_tone_pound);
		  var convert_short_tone_l_hun_weight = short_ton/ 0.056;
			$('.l_hun_weight').val(convert_short_tone_l_hun_weight);
		  var convert_short_tone_ounce = short_ton/3.125E-5;
			$('.ounce').val(convert_short_tone_ounce);
		  var convert_short_tone_short_hun_weight = short_ton/0.05;
			$('.short_hun_weight').val(convert_short_tone_short_hun_weight);
		}
		function grain(grain){
			var grain = parseFloat(grain);
		  var convert_grain_long_ton = grain/15680000;
			$('.long_ton').val(convert_grain_long_ton);
		  var convert_grain_stone = grain/98000;
			$('.stone').val(convert_grain_stone);
		  var convert_grain_short_ton = grain/14000000;
			$('.short_ton').val(convert_grain_short_ton);
		  var convert_grain_kilopound = grain/7716179.1764707;
			$('.kilopound').val(convert_grain_kilopound);
		  var convert_grain_pound = grain/7000;
			$('.pound').val(convert_grain_pound);
		  var convert_grain_l_hun_weight = grain/784000;
			$('.l_hun_weight').val(convert_grain_l_hun_weight);
		  var convert_grain_ounce = grain/437.5;
			$('.ounce').val(convert_grain_ounce);
		  var convert_grain_short_hun_weight = grain/700000;
			$('.short_hun_weight').val(convert_grain_short_hun_weight);
		}
		function kilopound(kip){
			var kilop = parseFloat(kip);
		  var convert_kilop_long_ton = kilop/2.24;
			$('.long_ton').val(convert_kilop_long_ton);
		  var convert_kilop_stone = kilop/0.014;
			$('.stone').val(convert_kilop_stone);
		  var convert_kilop_short_ton = kilop/2;
			$('.short_ton').val(convert_kilop_short_ton);
		  var convert_kilop_grain = kilop/1.4285714285714E-7;
			$('.grain').val(convert_kilop_grain);
		  var convert_kilop_pound = kilop/0.001;
			$('.pound').val(convert_kilop_pound);
		  var convert_kilop_l_hun_weight = kilop/0.112;
			$('.l_hun_weight').val(convert_kilop_l_hun_weight);
		  var convert_kilop_ounce = kilop/6.25E-5;
			$('.ounce').val(convert_kilop_ounce);
		  var convert_kilop_short_hun_weight = kilop/0.1;
			$('.short_hun_weight').val(convert_kilop_short_hun_weight);
		}
		function pound(pound){
			var pound = parseFloat(pound);
		  var convert_pound_long_ton = pound/2240;
			$('.long_ton').val(convert_pound_long_ton);
		  var convert_pound_stone = pound/14;
			$('.stone').val(convert_pound_stone);
		  var convert_pound_short_ton = pound/2000;
			$('.short_ton').val(convert_pound_short_ton);
		  var convert_pound_grain = pound/0.00014285714285714;
			$('.grain').val(convert_pound_grain);
		  var convert_pound_kilopound = pound/1000;
			$('.kilopound').val(convert_pound_kilopound);
		  var convert_pound_l_hun_weight = pound/112;
			$('.l_hun_weight').val(convert_pound_l_hun_weight);
		  var convert_pound_ounce = pound/0.0625;
			$('.ounce').val(convert_pound_ounce);
		  var convert_pound_short_hun_weight = pound/100;
			$('.short_hun_weight').val(convert_pound_short_hun_weight);
		}
		function l_hun_weight(long_hun_weight){
			var long_hun_weight = parseFloat(long_hun_weight);
		  var convert_l_hun_weight_long_ton = long_hun_weight/20;
			$('.long_ton').val(convert_l_hun_weight_long_ton);
		  var convert_l_hun_weight_stone = long_hun_weight/0.125;
			$('.stone').val(convert_l_hun_weight_stone);
		  var convert_l_hun_weight_short_ton = long_hun_weight/17.857142857143;
			$('.short_ton').val(convert_l_hun_weight_short_ton);
		  var convert_l_hun_weight_grain = long_hun_weight/1.2755102040816E-6;
			$('.grain').val(convert_l_hun_weight_grain);
		  var convert_l_hun_weight_kilopound = long_hun_weight/8.9285714285714;
			$('.kilopound').val(convert_l_hun_weight_kilopound);
		  var convert_l_hun_weight_pound = long_hun_weight/0.0089285714285714;
			$('.pound').val(convert_l_hun_weight_pound);
		  var convert_l_hun_weight_ounce = long_hun_weight/0.00055803571428571;
			$('.ounce').val(convert_l_hun_weight_ounce);
		  var convert_l_hun_weight_short_hun_weight = long_hun_weight/0.89285714285714;
			$('.short_hun_weight').val(convert_l_hun_weight_short_hun_weight);
		}
		function ounce(ounce){
			var ounce = parseFloat(ounce);
		  var convert_ounce_long_ton = ounce/35840;
			$('.long_ton').val(convert_ounce_long_ton);
		  var convert_ounce_stone = ounce/224;
			$('.stone').val(convert_ounce_stone);
		  var convert_ounce_short_ton = ounce/32000;
			$('.short_ton').val(convert_ounce_short_ton);
		  var convert_ounce_grain = ounce/0.0022857142857143;
			$('.grain').val(convert_ounce_grain);
		  var convert_ounce_kilopound = ounce/16000;
			$('.kilopound').val(convert_ounce_kilopound);
		  var convert_ounce_pound = ounce/16;
			$('.pound').val(convert_ounce_pound);
		  var convert_ounce_l_hun_weight = ounce/1792;
			$('.l_hun_weight').val(convert_ounce_l_hun_weight);
		  var convert_ounce_short_hun_weight = ounce/1600;
			$('.short_hun_weight').val(convert_ounce_short_hun_weight);
		}
		function short_hun_weight(short_hun_weight){
			var short_hun_weight = parseFloat(short_hun_weight);
		  var convert_short_hun_weight_long_ton = short_hun_weight/22.4;
			$('.long_ton').val(convert_short_hun_weight_long_ton);
		  var convert_short_hun_weight_stone = short_hun_weight/0.14;
			$('.stone').val(convert_short_hun_weight_stone);
		  var convert_short_hun_weight_short_ton = short_hun_weight/20;
			$('.short_ton').val(convert_short_hun_weight_short_ton);
		  var convert_short_hun_weight_grain = short_hun_weight/1.4285714285714E-6;
			$('.grain').val(convert_short_hun_weight_grain);
		  var convert_short_hun_weight_kilopound = short_hun_weight/10;
			$('.kilopound').val(convert_short_hun_weight_kilopound);
		  var convert_short_hun_weight_pound = short_hun_weight/0.01;
			$('.pound').val(convert_short_hun_weight_pound);
		  var convert_short_hun_weight_l_hun_weight = short_hun_weight/1.12;
			$('.l_hun_weight').val(convert_short_hun_weight_l_hun_weight);
		  var convert_short_hun_weight_ounce = short_hun_weight/0.000625;
			$('.ounce').val(convert_short_hun_weight_ounce);
		}
	</script>
  </body>
</html>
