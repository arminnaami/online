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
			
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Convert Weight and Mass Units Instantly</h4></div>
              <div class="panel-body mai-end" style="padding:14px 20px;margin:0px;">
				<span class="" >This converter features units that are still used today. There is also a special converter for historical units of weight you might want to visit for ancient, medieval and other old units that are no longer used.</span>
              </div>
            </div>

			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>Metric</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>kilotonne</label>
					</div>
                    <div class="col-sm-3">
                       <input type="number" class="boots_form-control form-control-xs kilotonne" onkeyup="kitonne(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>carat&nbsp;(ct)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs carat" onkeyup="carat(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>tonne</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs tonne" onkeyup="tonne(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>gram&nbsp;(g)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs gram" onkeyup="gram(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>kilonewton (kN)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs kilonewton" onkeyup="kilonewton(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
					<div class="col-sm-3">
					 <label>centigram</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs centigram" onkeyup="centigram(this.value)" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                    </div>
                  </div>

				   <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>centner</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs centner" onkeyup="centner(this.value)">
                    </div>
					<div class="col-sm-3">
					 <label>milligram&nbsp;(mg)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs milligram" onkeyup="milligram(this.value)">
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>kilogram&nbsp;(kg)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs kilogram" onkeyup="kilogram(this.value)">
                    </div>
					<div class="col-sm-3">
					 <label>microgram&nbsp;(mcg)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs microgram" onkeyup="micro(this.value)">
                    </div>
                  </div>

				 <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>newton (N)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs newton" onkeyup="newt(this.value)">
                    </div>
					<div class="col-sm-3">
					 <label>atomic&nbsp;mass unit&nbsp;(amu)</label>
					</div>
                    <div class="col-sm-3">
                      <input type="number" class="boots_form-control form-control-xs atomic" onkeyup="atom(this.value)">
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
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.livePreview();
      });
    </script>

	<script>
		function kitonne(kilozz){
			var kilozzz = parseFloat(kilozz);
		  var convert_kilo_cara = kilozzz/2.0E-10;
			$('.carat').val(convert_kilo_cara);
		  var convert_kilo_ton = kilozzz/0.001;
			$('.tonne').val(convert_kilo_ton);
		  var convert_kilo_gram = Math.round(kilozzz/1.0E-9);
			$('.gram').val(convert_kilo_gram);
		  var convert_kilo_kilonewton = Math.round(kilozzz/0.000101971621);
			$('.kilonewton').val(convert_kilo_kilonewton);
		  var convert_kilo_centigram = kilozzz/1.0E-11;
			$('.centigram').val(convert_kilo_centigram);
		  var convert_kilo_centner = kilozzz/5.0E-5;
			$('.centner').val(convert_kilo_centner);
		  var convert_kilo_milligram = kilozzz/1.0E-12;
			$('.milligram').val(convert_kilo_milligram);
		  var convert_kilo_kilogram = kilozzz/1.0E-6;
			$('.kilogram').val(convert_kilo_kilogram);
		  var convert_kilo_microgram = kilozzz/1.0E-15;
			$('.microgram').val(convert_kilo_microgram);
		  var convert_kilo_newton = kilozzz/1.01971621E-7;
			$('.newton').val(convert_kilo_newton); 
		  var convert_kilo_atomic = kilozzz/1.6603145E-33;
			$('.atomic').val(convert_kilo_atomic); 
		}
		function carat(cara){
			var carrat = parseFloat(cara);
		  var convert_cara_kilo = carrat/5000000000;
			$('.kilotonne').val(convert_cara_kilo);
		  var convert_cara_ton = carrat/5000000;
			$('.tonne').val(convert_cara_ton);
		  var convert_cara_gram = carrat/5;
			$('.gram').val(convert_cara_gram);
		  var convert_cara_kilonewton =carrat/509858.105;
			$('.kilonewton').val(convert_cara_kilonewton);
		  var convert_cara_centigram = carrat/0.05;
			$('.centigram').val(convert_cara_centigram);
		  var convert_cara_centner = carrat/250000;
			$('.centner').val(convert_cara_centner);
		  var convert_cara_milligram = carrat/0.005;
			$('.milligram').val(convert_cara_milligram);
		  var convert_cara_kilogram = carrat/5000;
			$('.kilogram').val(convert_cara_kilogram);
		  var convert_cara_microgram = carrat/5.0E-6;
			$('.microgram').val(convert_cara_microgram);
		  var convert_cara_newton = carrat/509.858105;
			$('.newton').val(convert_cara_newton); 
		  var convert_cara_atomic = carrat/8.3015725E-24;
			$('.atomic').val(convert_cara_atomic); 
		}
		function tonne(ton){
			var tone = parseFloat(ton);
		  var convert_tone_kilo = tone/1000;
			$('.kilotonne').val(convert_tone_kilo);
		  var convert_tone_carat = tone/2.0E-7;
			$('.carat').val(convert_tone_carat);
		  var convert_tone_gram = tone/1.0E-6;
			$('.gram').val(convert_tone_gram);
		  var convert_tone_kilonewton =tone/0.101971621;
			$('.kilonewton').val(convert_tone_kilonewton);
		  var convert_tone_centigram = tone/1.0E-8;
			$('.centigram').val(convert_tone_centigram);
		  var convert_tone_centner = tone/1.0E-1;
			$('.centner').val(convert_tone_centner);
		  var convert_tone_milligram = tone/1.0E-9;
			$('.milligram').val(convert_tone_milligram);
		  var convert_tone_kilogram = tone/0.001;
			$('.kilogram').val(convert_tone_kilogram);
		  var convert_tone_microgram = tone/1.0E-12;
			$('.microgram').val(convert_tone_microgram);
		  var convert_tone_newton = tone/0.000101971621;
			$('.newton').val(convert_tone_newton); 
		  var convert_tone_atomic = tone/1.6603145E-30;
			$('.atomic').val(convert_tone_atomic); 
		}
		function gram(gra){
			var gramme = parseFloat(gra);
		  var convert_gram_kilo = gramme/1000000000;
			$('.kilotonne').val(convert_gram_kilo);
		  var convert_gram_carat = gramme/0.2;
			$('.carat').val(convert_gram_carat);
		  var convert_gram_tone = gramme/1000000;
			$('.tonne').val(convert_gram_tone);
		  var convert_gram_kilonewton =gramme/101971.621;
			$('.kilonewton').val(convert_gram_kilonewton);
		  var convert_gram_centigram = gramme/0.01;
			$('.centigram').val(convert_gram_centigram);
		  var convert_gram_centner = gramme/100000;
			$('.centner').val(convert_gram_centner);
		  var convert_gram_milligram = gramme/0.001;
			$('.milligram').val(convert_gram_milligram);
		  var convert_gram_kilogram = gramme/1000;
			$('.kilogram').val(convert_gram_kilogram);
		  var convert_gram_microgram = gramme/1.0E-6;
			$('.microgram').val(convert_gram_microgram);
		  var convert_gram_newton = gramme/101.971621;
			$('.newton').val(convert_gram_newton); 
		  var convert_gram_atomic = gramme/1.6603145E-24;
			$('.atomic').val(convert_gram_atomic); 
		}
		function kilonewton(kN){
			var kilo_new = parseFloat(kN);
		  var convert_kN_kilo = kilo_new*0.000101971621;
			$('.kilotonne').val(convert_kN_kilo);
		  var convert_kN_carat = kilo_new/1.9613300057278E-6;
			$('.carat').val(convert_kN_carat);
		  var convert_kN_tone = kilo_new/9.80665;
			$('.tonne').val(convert_kN_tone);
		  var convert_kN_gram =kilo_new/9.80665E-6;
			$('.gram').val(convert_kN_gram);
		  var convert_kN_centigram = kilo_new/9.8066500286389E-8;
			$('.centigram').val(convert_kN_centigram);
		  var convert_kN_centner = kilo_new/0.98066500286389;
			$('.centner').val(convert_kN_centner);
		  var convert_kN_milligram = kilo_new/9.8066500286388E-9;
			$('.milligram').val(convert_kN_milligram);
		  var convert_kN_kilogram = kilo_new/0.0098066500286389;
			$('.kilogram').val(convert_kN_kilogram);
		  var convert_kN_microgram = kilo_new/9.8066500286389E-12;
			$('.microgram').val(convert_kN_microgram);
		  var convert_kN_newton = kilo_new/0.001;
			$('.newton').val(convert_kN_newton); 
		  var convert_kN_atomic = kilo_new/1.628432218411E-29;
			$('.atomic').val(convert_kN_atomic); 
		}
		function centigram(centi){
			var centig = parseFloat(centi);
		  var convert_centi_kilo = centig/100000000000;
			$('.kilotonne').val(convert_centi_kilo);
		  var convert_centi_carat = centig/20;
			$('.carat').val(convert_centi_carat);
		  var convert_centi_tone = centig/100000000;
			$('.tonne').val(convert_centi_tone);
		  var convert_centi_gram =centig/100;
			$('.gram').val(convert_centi_gram);
		  var convert_centi_kiloN = centig/10197162.1;
			$('.kilonewton').val(convert_centi_kiloN);
		  var convert_centi_centner = centig/10000000;
			$('.centner').val(convert_centi_centner);
		  var convert_centi_milligram = centig/0.1;
			$('.milligram').val(convert_centi_milligram);
		  var convert_centi_kilogram = centig/100000;
			$('.kilogram').val(convert_centi_kilogram);
		  var convert_centi_microgram = centig/0.0001;
			$('.microgram').val(convert_centi_microgram);
		  var convert_centi_newton = centig/10197.1621;
			$('.newton').val(convert_centi_newton); 
		  var convert_centi_atomic = centig/1.6603145E-22;
			$('.atomic').val(convert_centi_atomic); 
		}
		function centner(centn){
			var centnr = parseFloat(centn);
		  var convert_centn_kilo = centnr/10000;
			$('.kilotonne').val(convert_centn_kilo);
		  var convert_centn_carat = centnr/2.0E-6;
			$('.carat').val(convert_centn_carat);
		  var convert_centn_tone = centnr/10;
			$('.tonne').val(convert_centn_tone);
		  var convert_centn_gram =centnr/1.0E-5;
			$('.gram').val(convert_centn_gram);
		  var convert_centn_kiloN = centnr/1.01971621;
			$('.kilonewton').val(convert_centn_kiloN);
		  var convert_centn_centi = centnr/1.0E-7;
			$('.centigram').val(convert_centn_centi);
		  var convert_centn_milligram = centnr/1.0E-8;
			$('.milligram').val(convert_centn_milligram);
		  var convert_centn_kilogram = centnr/0.01;
			$('.kilogram').val(convert_centn_kilogram);
		  var convert_centn_microgram = centnr/1.0E-11;
			$('.microgram').val(convert_centn_microgram);
		  var convert_centn_newton = centnr/0.00101971621;
			$('.newton').val(convert_centn_newton); 
		  var convert_centn_atomic = centnr/1.6605655E-29;
			$('.atomic').val(convert_centn_atomic); 
		}
		function milligram(milli){
			var milligr = parseFloat(milli);
		  var convert_milli_kilo = milligr/1000000000000;
			$('.kilotonne').val(convert_milli_kilo);
		  var convert_milli_carat = milligr/200;
			$('.carat').val(convert_milli_carat);
		  var convert_milli_tone = milligr/1000000000;
			$('.tonne').val(convert_milli_tone);
		  var convert_milli_gram =milligr/1000;
			$('.gram').val(convert_milli_gram);
		  var convert_milli_kiloN = milligr/101971621;
			$('.kilonewton').val(convert_milli_kiloN);
		  var convert_milli_centi = milligr/10;
			$('.centigram').val(convert_milli_centi);
		  var convert_milli_cent = milligr/100000000;
			$('.centner').val(convert_milli_cent);
		  var convert_milli_kilogram = milligr/1000000;
			$('.kilogram').val(convert_milli_kilogram);
		  var convert_milli_microgram = milligr/0.001;
			$('.microgram').val(convert_milli_microgram);
		  var convert_milli_newton = milligr/101971.621;
			$('.newton').val(convert_milli_newton); 
		  var convert_milli_atomic = milligr/1.6603145E-21;
			$('.atomic').val(convert_milli_atomic); 
		}
		function kilogram(kilog){
			var killogr = parseFloat(kilog);
		  var convert_kilog_kilo = killogr/1000000;
			$('.kilotonne').val(convert_kilog_kilo);
		  var convert_kilog_carat = killogr/0.0002;
			$('.carat').val(convert_kilog_carat);
		  var convert_kilog_tone = killogr/1000;
			$('.tonne').val(convert_kilog_tone);
		  var convert_kilog_gram =killogr/0.001;
			$('.gram').val(convert_kilog_gram);
		  var convert_kilog_kiloN = killogr/101.971621;
			$('.kilonewton').val(convert_kilog_kiloN);
		  var convert_kilog_centi = killogr/1.0E-5;
			$('.centigram').val(convert_kilog_centi);
		  var convert_kilog_cent = killogr/100;
			$('.centner').val(convert_kilog_cent);
		  var convert_kilog_mili = killogr/1.0E-6;
			$('.milligram').val(convert_kilog_mili);
		  var convert_kilog_microgram = killogr/1.0E-9;
			$('.microgram').val(convert_kilog_microgram);
		  var convert_kilog_newton = killogr/0.101971621;
			$('.newton').val(convert_kilog_newton); 
		  var convert_kilog_atomic = killogr/1.6603145E-27;
			$('.atomic').val(convert_kilog_atomic); 
		}
		function micro(microg){
			var microgr = parseFloat(microg);
		  var convert_micro_kilo = microgr/1.0E+15;
			$('.kilotonne').val(convert_micro_kilo);
		  var convert_micro_carat = microgr/200000;
			$('.carat').val(convert_micro_carat);
		  var convert_micro_tone = microgr/1000000000000;
			$('.tonne').val(convert_micro_tone);
		  var convert_micro_gram =microgr/1000000;
			$('.gram').val(convert_micro_gram);
		  var convert_micro_kiloN = microgr/1.0E+15;
			$('.kilonewton').val(convert_micro_kiloN);
		  var convert_micro_centi = microgr/10000;
			$('.centigram').val(convert_micro_centi);
		  var convert_micro_cent = microgr/100000000000;
			$('.centner').val(convert_micro_cent);
		  var convert_micro_mili = microgr/1000;
			$('.milligram').val(convert_micro_mili);
		  var convert_micro_kilogram = microgr/1000000000;
			$('.kilogram').val(convert_micro_kilogram);
		  var convert_micro_newton = microgr/101971621;
			$('.newton').val(convert_micro_newton); 
		  var convert_micro_atomic = microgr/1.6605655E-18;
			$('.atomic').val(convert_micro_atomic); 
		}
		function newt(newto){
			var newton = parseFloat(newto);
		  var convert_new_kilo = newton/9806650.0286389;
			$('.kilotonne').val(convert_new_kilo);
		  var convert_new_carat = newton/0.0019613300057278;
			$('.carat').val(convert_new_carat);
		  var convert_new_tone = newton/9806.6500286389;
			$('.tonne').val(convert_new_tone);
		  var convert_new_gram =newton/0.0098066500286389;
			$('.gram').val(convert_new_gram);
		  var convert_new_kiloN = newton/1000;
			$('.kilonewton').val(convert_new_kiloN);
		  var convert_new_centi = newton/9.8066500286389E-5;
			$('.centigram').val(convert_new_centi);
		  var convert_new_cent = newton/980.66500286389;
			$('.centner').val(convert_new_cent);
		  var convert_new_mili = newton/9.8066500286389E-6;
			$('.milligram').val(convert_new_mili);
		  var convert_new_kilogram = newton/9.8066500286389;
			$('.kilogram').val(convert_new_kilogram);
		  var convert_new_micro = newton/9.8066500286389E-9;
			$('.microgram').val(convert_new_micro); 
		  var convert_new_atomic = newton/1.6284584708132E-26;
			$('.atomic').val(convert_new_atomic); 
		}
		function atom(ato){
			var amu = parseFloat(ato);
		  var convert_amu_kilo = amu/6.0220448997646E+32;
			$('.kilotonne').val(convert_amu_kilo);
		  var convert_amu_carat = amu/1.2044089799529E+23;
			$('.carat').val(convert_amu_carat);
		  var convert_amu_tone = amu/6.0220448997646E+29;
			$('.tonne').val(convert_amu_tone);
		  var convert_amu_gram =amu/6.0220448997646E+23;
			$('.gram').val(convert_amu_gram);
		  var convert_amu_kiloN = amu/6.1407768016378E+28;
			$('.kilonewton').val(convert_amu_kiloN);
		  var convert_amu_centi = amu/6.0220448997646E+21;
			$('.centigram').val(convert_amu_centi);
		  var convert_amu_cent = amu/6.0220448997646E+28;
			$('.centner').val(convert_amu_cent);
		  var convert_amu_mili = amu/6.0220448997646E+20;
			$('.milligram').val(convert_amu_mili);
		  var convert_amu_kilogram = amu/6.0220448997646E+26;
			$('.kilogram').val(convert_amu_kilogram);
		  var convert_amu_micro = amu/6.0220448997646E+17;
			$('.microgram').val(convert_amu_micro); 
		  var convert_amu_new = amu/6.1407768016378E+25;
			$('.newton').val(convert_amu_new); 
		}		
	</script>
  </body>
</html>
